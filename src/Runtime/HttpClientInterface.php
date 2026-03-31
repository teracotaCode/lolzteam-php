<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

/**
 * Contract for HTTP clients used by generated API resource classes.
 *
 * @phpstan-type RequestOptions array{
 *     params?: array<string, mixed>,
 *     json?: array<string, mixed>|list<mixed>,
 *     multipart?: array<string, mixed>,
 *     isSearch?: bool,
 * }
 */
interface HttpClientInterface
{
    /**
     * Execute an HTTP request against the Lolzteam API.
     *
     * @param string $method  HTTP method (GET, POST, PUT, DELETE, PATCH).
     * @param string $path    API path (e.g. "/threads/123").
     * @param array  $options Request options (params, json, multipart, isSearch).
     *
     * @return array<string, mixed> Decoded JSON response body.
     *
     * @throws Errors\LolzteamException
     */
    public function request(string $method, string $path, array $options = []): array;
}
