<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

use Lolzteam\Runtime\Errors\HttpException;
use Lolzteam\Runtime\Errors\NetworkException;
use Lolzteam\Runtime\Errors\RetryExhaustedException;

/**
 * Executes a callable with automatic retry on transient failures.
 */
final class RetryHandler
{
    public function __construct(private RetryConfig $config)
    {
    }

    /**
     * Execute the callable, retrying on transient errors.
     *
     * @template T
     * @param callable(): T $fn
     * @return T
     *
     * @throws RetryExhaustedException
     */
    public function execute(callable $fn): mixed
    {
        $attempt = 0;

        while (true) {
            try {
                return $fn();
            } catch (\Throwable $e) {
                $attempt++;

                if (!$this->isRetryable($e) || $attempt > $this->config->maxRetries) {
                    if ($this->isRetryable($e) && $this->config->maxRetries > 0 && $attempt > $this->config->maxRetries) {
                        throw new RetryExhaustedException($attempt, $e);
                    }
                    throw $e;
                }

                $delay = $this->computeDelay($attempt, $e);

                if ($this->config->onRetry !== null) {
                    ($this->config->onRetry)($attempt, $e, $delay);
                }

                $this->sleep($delay);
            }
        }
    }

    /**
     * Determine if an exception is retryable.
     */
    private function isRetryable(\Throwable $e): bool
    {
        // Network-level errors are always retryable.
        if ($e instanceof NetworkException) {
            return true;
        }

        // Guzzle transport errors (connection, timeout).
        if ($e instanceof \GuzzleHttp\Exception\ConnectException) {
            return true;
        }

        // HTTP errors — only retry configured status codes.
        if ($e instanceof HttpException) {
            return \in_array($e->statusCode, $this->config->retryStatuses, true);
        }

        return false;
    }

    /**
     * Compute the delay before the next retry attempt.
     *
     * Uses exponential backoff with full jitter, but honours Retry-After
     * from 429 responses.
     */
    private function computeDelay(int $attempt, \Throwable $e): float
    {
        // Honour Retry-After header from rate-limit responses.
        if ($e instanceof HttpException && $e->retryAfter !== null && $e->retryAfter > 0) {
            return min($e->retryAfter, $this->config->maxDelay);
        }

        // Exponential backoff: base * 2^(attempt-1)
        $exponential = $this->config->baseDelay * (2 ** ($attempt - 1));
        $capped = min($exponential, $this->config->maxDelay);

        // Full jitter: uniform random in [0, capped]
        $jitterMs = random_int(0, (int) ($capped * 1000));

        return $jitterMs / 1000.0;
    }

    /**
     * Sleep for the given number of seconds (with microsecond precision).
     *
     * @codeCoverageIgnore
     */
    private function sleep(float $seconds): void
    {
        usleep((int) ($seconds * 1_000_000));
    }
}
