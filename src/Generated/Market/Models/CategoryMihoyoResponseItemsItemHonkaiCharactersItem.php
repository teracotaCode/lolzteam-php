<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemHonkaiCharactersItemRelicsItem[]|null $relics Relics
 * @property-read \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemHonkaiCharactersItemOrnamentsItem[]|null $ornaments Ornaments
 */
class CategoryMihoyoResponseItemsItemHonkaiCharactersItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $id = null, // Id
        public readonly int|null $level = null, // Level
        public readonly string|null $name = null, // Name
        public readonly string|null $element = null, // Element
        public readonly string|null $icon = null, // Icon
        public readonly int|null $rarity = null, // Rarity
        public readonly int|null $rank = null, // Rank
        public readonly string|null $image = null, // Image
        public readonly \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemHonkaiCharactersItemEquip|null $equip = null, // Equip
        public readonly array|null $relics = null, // Relics
        public readonly array|null $ornaments = null, // Ornaments
        public readonly int|null $baseType = null, // Base
        public readonly string|null $figurePath = null, // Figure
        public readonly string|null $elementImage = null, // Element Image
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            id: $data['id'] ?? null,
            level: $data['level'] ?? null,
            name: $data['name'] ?? null,
            element: $data['element'] ?? null,
            icon: $data['icon'] ?? null,
            rarity: $data['rarity'] ?? null,
            rank: $data['rank'] ?? null,
            image: $data['image'] ?? null,
            equip: isset($data['equip']) && is_array($data['equip']) && !empty($data['equip']) ? \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemHonkaiCharactersItemEquip::fromArray($data['equip']) : null,
            relics: isset($data['relics']) && is_array($data['relics']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemHonkaiCharactersItemRelicsItem::fromArray($item), $data['relics']) : null,
            ornaments: isset($data['ornaments']) && is_array($data['ornaments']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemHonkaiCharactersItemOrnamentsItem::fromArray($item), $data['ornaments']) : null,
            baseType: $data['base_type'] ?? null,
            figurePath: $data['figure_path'] ?? null,
            elementImage: $data['elementImage'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'id' => $this->id,
            'level' => $this->level,
            'name' => $this->name,
            'element' => $this->element,
            'icon' => $this->icon,
            'rarity' => $this->rarity,
            'rank' => $this->rank,
            'image' => $this->image,
            'equip' => $this->equip?->toArray(),
            'relics' => $this->relics !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->relics) : null,
            'ornaments' => $this->ornaments !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->ornaments) : null,
            'base_type' => $this->baseType,
            'figure_path' => $this->figurePath,
            'elementImage' => $this->elementImage,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
