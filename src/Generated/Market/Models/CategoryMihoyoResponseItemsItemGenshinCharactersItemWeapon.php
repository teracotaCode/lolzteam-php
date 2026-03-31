<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryMihoyoResponseItemsItemGenshinCharactersItemWeapon implements JsonSerializable
{
    public function __construct(
        public readonly int|null $id = null, // Id
        public readonly string|null $name = null, // Name
        public readonly string|null $icon = null, // Icon
        public readonly int|null $type = null, // Type
        public readonly int|null $rarity = null, // Rarity
        public readonly int|null $level = null, // Level
        public readonly int|null $promoteLevel = null, // Promote
        public readonly string|null $typeName = null, // Type
        public readonly string|null $desc = null, // Desc
        public readonly int|null $affixLevel = null, // Affix
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            id: $data['id'] ?? null,
            name: $data['name'] ?? null,
            icon: $data['icon'] ?? null,
            type: $data['type'] ?? null,
            rarity: $data['rarity'] ?? null,
            level: $data['level'] ?? null,
            promoteLevel: $data['promote_level'] ?? null,
            typeName: $data['type_name'] ?? null,
            desc: $data['desc'] ?? null,
            affixLevel: $data['affix_level'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'id' => $this->id,
            'name' => $this->name,
            'icon' => $this->icon,
            'type' => $this->type,
            'rarity' => $this->rarity,
            'level' => $this->level,
            'promote_level' => $this->promoteLevel,
            'type_name' => $this->typeName,
            'desc' => $this->desc,
            'affix_level' => $this->affixLevel,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
