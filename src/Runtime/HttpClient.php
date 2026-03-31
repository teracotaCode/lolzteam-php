<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\RequestOptions;
use Lolzteam\Runtime\Errors\NetworkException;

/**
 * Guzzle-based HTTP client for the Lolzteam API.
 */
final class HttpClient implements HttpClientInterface
{
    private readonly GuzzleClient $guzzle;
    private readonly RetryHandler $retryHandler;
    private readonly RateLimiter $rateLimiter;

    public function __construct(
        private readonly string $token,
        private readonly string $baseUrl,
        private readonly ?ProxyConfig $proxy,
        RetryConfig $retry,
        RateLimitConfig $rateLimit,
        private readonly float $timeout = 60.0,
        ?\GuzzleHttp\HandlerStack $handler = null,
    ) {
        $guzzleConfig = [
            'base_uri' => rtrim($baseUrl, '/') . '/',
            RequestOptions::TIMEOUT => $timeout,
            RequestOptions::CONNECT_TIMEOUT => min($timeout, 10.0),
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::HEADERS => [
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json',
            ],
        ];

        if ($proxy !== null) {
            $guzzleConfig[RequestOptions::PROXY] = $proxy->url;
        }

        if ($handler !== null) {
            $guzzleConfig['handler'] = $handler;
        }

        $this->guzzle = new GuzzleClient($guzzleConfig);
        $this->retryHandler = new RetryHandler($retry);
        $this->rateLimiter = new RateLimiter($rateLimit);
    }

    /**
     * {@inheritDoc}
     */
    public function request(string $method, string $path, array $options = []): array
    {
        $isSearch = (bool) ($options['isSearch'] ?? false);

        return $this->retryHandler->execute(function () use ($method, $path, $options, $isSearch): array {
            $this->rateLimiter->wait($isSearch);

            $guzzleOptions = $this->buildGuzzleOptions($options);

            try {
                $response = $this->guzzle->request($method, ltrim($path, '/'), $guzzleOptions);
            } catch (ConnectException $e) {
                throw new NetworkException(
                    'Connection failed: ' . $e->getMessage(),
                    $e,
                );
            }

            $statusCode = $response->getStatusCode();
            $body = (string) $response->getBody();

            if ($statusCode >= 400) {
                $retryAfter = $this->parseRetryAfter($response->getHeaderLine('Retry-After'));

                throw HttpExceptionFactory::create($statusCode, $body, $retryAfter);
            }

            /** @var array<string, mixed> $decoded */
            $decoded = json_decode($body, true, 512, \JSON_THROW_ON_ERROR);

            return $decoded;
        });
    }

    /**
     * Build Guzzle request options from our abstracted options.
     *
     * @param array<string, mixed> $options
     * @return array<string, mixed>
     */
    private function buildGuzzleOptions(array $options): array
    {
        $guzzleOptions = [];

        // Query parameters.
        if (isset($options['params']) && \is_array($options['params'])) {
            $guzzleOptions[RequestOptions::QUERY] = $this->buildQueryString(
                $this->stripNulls($options['params']),
            );
        }

        // JSON body.
        if (isset($options['json']) && \is_array($options['json'])) {
            $guzzleOptions[RequestOptions::JSON] = $this->prepareBody($options['json']);
        }

        // Multipart body.
        if (isset($options['multipart']) && \is_array($options['multipart'])) {
            $guzzleOptions[RequestOptions::MULTIPART] = $this->buildMultipart($options['multipart']);
        }

        return $guzzleOptions;
    }

    /**
     * Build a query string that supports deepObject and array notation.
     *
     * @param array<string, mixed> $params
     */
    private function buildQueryString(array $params): string
    {
        $pairs = [];
        $this->flattenParams($params, '', $pairs);

        $parts = [];
        foreach ($pairs as [$key, $value]) {
            $parts[] = urlencode($key) . '=' . urlencode((string) $value);
        }

        return implode('&', $parts);
    }

    /**
     * Recursively flatten parameters for query string encoding.
     *
     * - Associative arrays (deepObject): key[sub]=value
     * - Sequential arrays: key[]=value
     * - Booleans: "true"/"false"
     * - Nulls: skipped
     *
     * @param array<int|string, mixed> $params
     * @param string $prefix
     * @param list<array{0: string, 1: string}> $pairs
     */
    private function flattenParams(array $params, string $prefix, array &$pairs): void
    {
        foreach ($params as $key => $value) {
            if ($value === null) {
                continue;
            }

            if ($prefix === '') {
                $fullKey = (string) $key;
            } elseif (\is_int($key)) {
                // Sequential array: parent[]
                $fullKey = $prefix . '[]';
            } else {
                // Associative / deepObject: parent[key]
                $fullKey = $prefix . '[' . $key . ']';
            }

            if (\is_array($value)) {
                $this->flattenParams($value, $fullKey, $pairs);
            } elseif (\is_bool($value)) {
                $pairs[] = [$fullKey, $value ? '1' : '0'];
            } else {
                $pairs[] = [$fullKey, (string) $value];
            }
        }
    }

    /**
     * Prepare a JSON body: strip nulls and convert bools.
     *
     * @param array<string, mixed> $data
     * @return array<string, mixed>
     */
    private function prepareBody(array $data): array
    {
        return $this->stripNulls($data);
    }

    /**
     * Build Guzzle multipart fields, splitting binary from text.
     *
     * @param array<string, mixed> $fields
     * @return list<array<string, mixed>>
     */
    private function buildMultipart(array $fields): array
    {
        $parts = [];

        foreach ($fields as $name => $value) {
            if ($value === null) {
                continue;
            }

            $part = ['name' => $name];

            if ($value instanceof \SplFileInfo) {
                $part['contents'] = fopen($value->getPathname(), 'r');
                $part['filename'] = $value->getFilename();
            } elseif (\is_resource($value)) {
                $part['contents'] = $value;
            } elseif (\is_bool($value)) {
                $part['contents'] = $value ? '1' : '0';
            } else {
                $part['contents'] = (string) $value;
            }

            $parts[] = $part;
        }

        return $parts;
    }

    /**
     * Recursively strip null values from an array.
     *
     * @param array<string, mixed> $data
     * @return array<string, mixed>
     */
    private function stripNulls(array $data): array
    {
        $result = [];

        foreach ($data as $key => $value) {
            if ($value === null) {
                continue;
            }

            $result[$key] = \is_array($value) ? $this->stripNulls($value) : $value;
        }

        return $result;
    }

    /**
     * Parse a Retry-After header value into seconds.
     *
     * Supports both delta-seconds and HTTP-date formats.
     */
    private function parseRetryAfter(string $header): ?float
    {
        if ($header === '') {
            return null;
        }

        // Numeric seconds.
        if (is_numeric($header)) {
            return (float) $header;
        }

        // HTTP-date format.
        $timestamp = strtotime($header);
        if ($timestamp !== false) {
            $delta = (float) $timestamp - time();
            return max(0.0, $delta);
        }

        return null;
    }
}
