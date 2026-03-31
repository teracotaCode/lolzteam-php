<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ProxyGetResponseProxiesItemProxy implements JsonSerializable
{
    public function __construct(
        public readonly int|null $proxyId = null, // Proxy Id
        public readonly int|null $userId = null, // User Id
        public readonly string|null $proxyIp = null, // Proxy Ip
        public readonly int|null $proxyPort = null, // Proxy Port
        public readonly string|null $proxyUser = null, // Proxy User
        public readonly string|null $proxyPass = null, // Proxy Pass
        public readonly string|null $proxyString = null, // Proxystring
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            proxyId: $data['proxy_id'] ?? null,
            userId: $data['user_id'] ?? null,
            proxyIp: $data['proxy_ip'] ?? null,
            proxyPort: $data['proxy_port'] ?? null,
            proxyUser: $data['proxy_user'] ?? null,
            proxyPass: $data['proxy_pass'] ?? null,
            proxyString: $data['proxyString'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'proxy_id' => $this->proxyId,
            'user_id' => $this->userId,
            'proxy_ip' => $this->proxyIp,
            'proxy_port' => $this->proxyPort,
            'proxy_user' => $this->proxyUser,
            'proxy_pass' => $this->proxyPass,
            'proxyString' => $this->proxyString,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
