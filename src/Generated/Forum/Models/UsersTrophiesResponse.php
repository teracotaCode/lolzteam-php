<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\UsersTrophiesResponseTrophiesItem[]|null $trophies Trophies
 */
class UsersTrophiesResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $trophies = null, // Trophies
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            trophies: isset($data['trophies']) && is_array($data['trophies']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\UsersTrophiesResponseTrophiesItem::fromArray($item), $data['trophies']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'trophies' => $this->trophies !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->trophies) : null,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
