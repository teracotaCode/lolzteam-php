<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

/**
 * Retry configuration with exponential backoff and jitter.
 */
final class RetryConfig
{
    /**
     * @param int              $maxRetries    Maximum number of retry attempts (0 = no retries).
     * @param float            $baseDelay     Base delay in seconds before first retry.
     * @param float            $maxDelay      Maximum delay cap in seconds.
     * @param list<int>        $retryStatuses HTTP status codes that trigger a retry.
     * @param (\Closure(int, \Throwable, float): void)|null $onRetry Callback invoked before each retry.
     */
    public function __construct(
        public int $maxRetries = 3,
        public float $baseDelay = 1.0,
        public float $maxDelay = 30.0,
        public array $retryStatuses = [429, 502, 503, 504],
        public ?\Closure $onRetry = null,
    ) {
    }
}
