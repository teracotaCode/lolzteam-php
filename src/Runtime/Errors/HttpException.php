<?php

declare(strict_types=1);

namespace Lolzteam\Runtime\Errors;

/**
 * HTTP error response from the Lolzteam API.
 */
class HttpException extends LolzteamException
{
    public function __construct(
        public readonly int $statusCode,
        public readonly string $responseBody,
        public readonly ?float $retryAfter = null,
        string $message = '',
        \Throwable $previous = null,
    ) {
        if ($message === '') {
            $message = sprintf('HTTP %d: %s', $statusCode, self::truncate($responseBody, 200));
        }

        parent::__construct($message, $statusCode, $previous);
    }

    private static function truncate(string $text, int $maxLength): string
    {
        if (mb_strlen($text) <= $maxLength) {
            return $text;
        }

        return mb_substr($text, 0, $maxLength) . '…';
    }
}
