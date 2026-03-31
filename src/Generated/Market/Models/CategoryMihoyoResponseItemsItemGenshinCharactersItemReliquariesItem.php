<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryMihoyoResponseItemsItemGenshinCharactersItemReliquariesItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $id = null, // Id
        public readonly string|null $name = null, // Name
        public readonly string|null $icon = null, // Icon
        public readonly int|null $pos = null, // Pos
        public readonly int|null $rarity = null, // Rarity
        public readonly int|null $level = null, // Level
        public readonly string|null $posName = null, // Pos
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            id: $data['id'] ?? null,
            name: $data['name'] ?? null,
            icon: $data['icon'] ?? null,
            pos: $data['pos'] ?? null,
            rarity: $data['rarity'] ?? null,
            level: $data['level'] ?? null,
            posName: $data['pos_name'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'id' => $this->id,
            'name' => $this->name,
            'icon' => $this->icon,
            'pos' => $this->pos,
            'rarity' => $this->rarity,
            'level' => $this->level,
            'pos_name' => $this->posName,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
