<?php

declare(strict_types=1);

namespace Lolzteam\Runtime\Errors;

/**
 * 429 Too Many Requests — rate limit exceeded.
 */
final class RateLimitException extends HttpException
{
}
