<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ProxyGetResponseProxiesItem implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\ProxyGetResponseProxiesItemProxy|null $proxy = null, // Proxy1
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            proxy: isset($data['proxy']) && is_array($data['proxy']) && !empty($data['proxy']) ? \Lolzteam\Generated\Market\Models\ProxyGetResponseProxiesItemProxy::fromArray($data['proxy']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'proxy' => $this->proxy?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
