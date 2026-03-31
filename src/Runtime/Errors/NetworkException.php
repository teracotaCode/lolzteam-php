<?php

declare(strict_types=1);

namespace Lolzteam\Runtime\Errors;

/**
 * Network-level failure (DNS, connection, timeout).
 */
final class NetworkException extends LolzteamException
{
    public function __construct(string $message = '', \Throwable $previous = null)
    {
        parent::__construct(
            $message ?: 'A network error occurred while communicating with the Lolzteam API',
            0,
            $previous,
        );
    }
}
