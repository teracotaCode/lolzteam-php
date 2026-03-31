<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

/**
 * Token-bucket rate limiter with smooth refill using nanosecond precision.
 */
final class RateLimiter
{
    /** Current number of available tokens for general requests. */
    private float $tokens;

    /** Current number of available tokens for search requests. */
    private float $searchTokens;

    /** Nanosecond timestamp of last refill for general bucket. */
    private int $lastRefillNs;

    /** Nanosecond timestamp of last refill for search bucket. */
    private int $searchLastRefillNs;

    /** Nanoseconds between general token refills. */
    private readonly float $refillIntervalNs;

    /** Nanoseconds between search token refills. */
    private readonly float $searchRefillIntervalNs;

    public function __construct(private readonly RateLimitConfig $config)
    {
        $this->tokens = (float) $config->requestsPerMinute;
        $this->searchTokens = (float) $config->searchRequestsPerMinute;

        $now = hrtime(true);
        $this->lastRefillNs = $now;
        $this->searchLastRefillNs = $now;

        // Nanoseconds per token: 60 seconds / tokens-per-minute * 1e9.
        $this->refillIntervalNs = $config->requestsPerMinute > 0
            ? (60.0 / $config->requestsPerMinute) * 1_000_000_000
            : 0;

        $this->searchRefillIntervalNs = $config->searchRequestsPerMinute > 0
            ? (60.0 / $config->searchRequestsPerMinute) * 1_000_000_000
            : 0;
    }

    /**
     * Block until a token is available.
     *
     * Search requests consume from both the general and the search bucket.
     */
    public function wait(bool $isSearch = false): void
    {
        $this->acquire(
            tokens: $this->tokens,
            lastRefillNs: $this->lastRefillNs,
            refillIntervalNs: $this->refillIntervalNs,
            maxTokens: $this->config->requestsPerMinute,
            writeback: function (float $t, int $ns): void {
                $this->tokens = $t;
                $this->lastRefillNs = $ns;
            },
        );

        if ($isSearch) {
            $this->acquire(
                tokens: $this->searchTokens,
                lastRefillNs: $this->searchLastRefillNs,
                refillIntervalNs: $this->searchRefillIntervalNs,
                maxTokens: $this->config->searchRequestsPerMinute,
                writeback: function (float $t, int $ns): void {
                    $this->searchTokens = $t;
                    $this->searchLastRefillNs = $ns;
                },
            );
        }
    }

    /**
     * Refill a bucket and consume one token, blocking if necessary.
     *
     * @param callable(float, int): void $writeback Writes updated state back.
     */
    private function acquire(
        float $tokens,
        int $lastRefillNs,
        float $refillIntervalNs,
        int $maxTokens,
        callable $writeback,
    ): void {
        // No limit configured.
        if ($maxTokens <= 0 || $refillIntervalNs <= 0) {
            return;
        }

        // Refill tokens based on elapsed time.
        $now = hrtime(true);
        $elapsedNs = $now - $lastRefillNs;

        if ($elapsedNs > 0) {
            $newTokens = $elapsedNs / $refillIntervalNs;
            $tokens = min((float) $maxTokens, $tokens + $newTokens);
            $lastRefillNs = $now;
        }

        // If no token available, sleep until one is refilled.
        if ($tokens < 1.0) {
            $deficit = 1.0 - $tokens;
            $waitNs = (int) ceil($deficit * $refillIntervalNs);
            $this->sleepNs($waitNs);

            // After sleeping, recalculate.
            $now = hrtime(true);
            $elapsedNs = $now - $lastRefillNs;
            $newTokens = $elapsedNs / $refillIntervalNs;
            $tokens = min((float) $maxTokens, $tokens + $newTokens);
            $lastRefillNs = $now;
        }

        // Consume one token.
        $tokens -= 1.0;

        $writeback($tokens, $lastRefillNs);
    }

    /**
     * Sleep for the given nanoseconds.
     *
     * @codeCoverageIgnore
     */
    protected function sleepNs(int $ns): void
    {
        $microseconds = (int) ceil($ns / 1_000);
        if ($microseconds > 0) {
            usleep($microseconds);
        }
    }
}
