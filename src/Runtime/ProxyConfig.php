<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

use Lolzteam\Runtime\Errors\ConfigException;

/**
 * Validated proxy configuration.
 */
final class ProxyConfig
{
    private const ALLOWED_SCHEMES = ['http', 'https', 'socks5'];

    public function __construct(public string $url)
    {
        $parsed = parse_url($url);

        if ($parsed === false || !isset($parsed['scheme'], $parsed['host'])) {
            throw new ConfigException(
                sprintf('Invalid proxy URL: "%s". Must contain a scheme and host.', $url),
            );
        }

        $scheme = strtolower($parsed['scheme']);

        if (!\in_array($scheme, self::ALLOWED_SCHEMES, true)) {
            throw new ConfigException(
                sprintf(
                    'Unsupported proxy scheme "%s". Allowed: %s',
                    $scheme,
                    implode(', ', self::ALLOWED_SCHEMES),
                ),
            );
        }
    }
}
