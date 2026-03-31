<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

use Lolzteam\Runtime\Errors\AuthException;
use Lolzteam\Runtime\Errors\ForbiddenException;
use Lolzteam\Runtime\Errors\HttpException;
use Lolzteam\Runtime\Errors\NotFoundException;
use Lolzteam\Runtime\Errors\RateLimitException;
use Lolzteam\Runtime\Errors\ServerException;
use Lolzteam\Runtime\Errors\ValidationException;

/**
 * Maps HTTP status codes to the appropriate exception class.
 */
final class HttpExceptionFactory
{
    /** @var array<int, class-string<HttpException>> */
    private const STATUS_MAP = [
        401 => AuthException::class,
        403 => ForbiddenException::class,
        404 => NotFoundException::class,
        422 => ValidationException::class,
        429 => RateLimitException::class,
    ];

    /**
     * Create the appropriate HttpException for a given status code.
     */
    public static function create(
        int $statusCode,
        string $responseBody,
        ?float $retryAfter = null,
    ): HttpException {
        $class = self::resolve($statusCode);

        return new $class(
            statusCode: $statusCode,
            responseBody: $responseBody,
            retryAfter: $retryAfter,
        );
    }

    /**
     * @return class-string<HttpException>
     */
    private static function resolve(int $statusCode): string
    {
        if (isset(self::STATUS_MAP[$statusCode])) {
            return self::STATUS_MAP[$statusCode];
        }

        if ($statusCode >= 500) {
            return ServerException::class;
        }

        return HttpException::class;
    }
}
