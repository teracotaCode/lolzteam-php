<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryMihoyoResponseItemsItemHonkaiCharactersItemEquip implements JsonSerializable
{
    public function __construct(
        public readonly int|null $id = null, // Id
        public readonly int|null $level = null, // Level
        public readonly int|null $rank = null, // Rank
        public readonly string|null $name = null, // Name
        public readonly string|null $desc = null, // Desc
        public readonly string|null $icon = null, // Icon
        public readonly int|null $rarity = null, // Rarity
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            id: $data['id'] ?? null,
            level: $data['level'] ?? null,
            rank: $data['rank'] ?? null,
            name: $data['name'] ?? null,
            desc: $data['desc'] ?? null,
            icon: $data['icon'] ?? null,
            rarity: $data['rarity'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'id' => $this->id,
            'level' => $this->level,
            'rank' => $this->rank,
            'name' => $this->name,
            'desc' => $this->desc,
            'icon' => $this->icon,
            'rarity' => $this->rarity,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
