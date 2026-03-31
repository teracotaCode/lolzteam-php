<?php

declare(strict_types=1);

namespace Lolzteam\Runtime\Errors;

/**
 * All retry attempts have been exhausted.
 */
final class RetryExhaustedException extends LolzteamException
{
    public function __construct(
        public readonly int $attempts,
        public readonly \Throwable $lastError,
    ) {
        parent::__construct(
            sprintf(
                'All %d retry attempts exhausted. Last error: %s',
                $attempts,
                $lastError->getMessage(),
            ),
            0,
            $lastError,
        );
    }
}
