<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

/**
 * Rate-limit configuration.
 */
final class RateLimitConfig
{
    public function __construct(
        public int $requestsPerMinute = 300,
        public int $searchRequestsPerMinute = 20,
    ) {
    }
}
