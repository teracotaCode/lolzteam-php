<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemHonkaiCharactersItemRelicsItemPropertiesItem[]|null $properties Properties
 */
class CategoryMihoyoResponseItemsItemHonkaiCharactersItemRelicsItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $id = null, // Id
        public readonly int|null $level = null, // Level
        public readonly int|null $pos = null, // Pos
        public readonly string|null $name = null, // Name
        public readonly string|null $desc = null, // Desc
        public readonly string|null $icon = null, // Icon
        public readonly int|null $rarity = null, // Rarity
        public readonly \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemHonkaiCharactersItemRelicsItemMainProperty|null $mainProperty = null, // Main
        public readonly array|null $properties = null, // Properties
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            id: $data['id'] ?? null,
            level: $data['level'] ?? null,
            pos: $data['pos'] ?? null,
            name: $data['name'] ?? null,
            desc: $data['desc'] ?? null,
            icon: $data['icon'] ?? null,
            rarity: $data['rarity'] ?? null,
            mainProperty: isset($data['main_property']) && is_array($data['main_property']) && !empty($data['main_property']) ? \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemHonkaiCharactersItemRelicsItemMainProperty::fromArray($data['main_property']) : null,
            properties: isset($data['properties']) && is_array($data['properties']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemHonkaiCharactersItemRelicsItemPropertiesItem::fromArray($item), $data['properties']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'id' => $this->id,
            'level' => $this->level,
            'pos' => $this->pos,
            'name' => $this->name,
            'desc' => $this->desc,
            'icon' => $this->icon,
            'rarity' => $this->rarity,
            'main_property' => $this->mainProperty?->toArray(),
            'properties' => $this->properties !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->properties) : null,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
