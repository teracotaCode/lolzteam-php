<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\ProxyGetResponseProxiesItem[]|null $proxies Proxies
 */
class ProxyGetResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $proxies = null, // Proxies
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            proxies: isset($data['proxies']) && is_array($data['proxies']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\ProxyGetResponseProxiesItem::fromArray($item), $data['proxies']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'proxies' => $this->proxies !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->proxies) : null,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
