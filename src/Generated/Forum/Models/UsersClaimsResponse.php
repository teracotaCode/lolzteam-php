<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\UsersClaimsResponseClaimsItem[]|null $claims Claims
 */
class UsersClaimsResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $claims = null, // Claims
        public readonly \Lolzteam\Generated\Forum\Models\UsersClaimsResponseStats|null $stats = null, // Stats
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            claims: isset($data['claims']) && is_array($data['claims']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\UsersClaimsResponseClaimsItem::fromArray($item), $data['claims']) : null,
            stats: isset($data['stats']) && is_array($data['stats']) && !empty($data['stats']) ? \Lolzteam\Generated\Forum\Models\UsersClaimsResponseStats::fromArray($data['stats']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'claims' => $this->claims !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->claims) : null,
            'stats' => $this->stats?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
