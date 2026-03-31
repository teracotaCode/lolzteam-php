<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemZenlessCharactersItemWeaponPropertiesItem[]|null $properties Properties
 * @property-read \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemZenlessCharactersItemWeaponMainPropertiesItem[]|null $mainProperties Main
 */
class CategoryMihoyoResponseItemsItemZenlessCharactersItemWeapon implements JsonSerializable
{
    public function __construct(
        public readonly int|null $id = null, // Id
        public readonly int|null $level = null, // Level
        public readonly string|null $name = null, // Name
        public readonly int|null $star = null, // Star
        public readonly string|null $icon = null, // Icon
        public readonly int|null $rarity = null, // Rarity
        public readonly array|null $properties = null, // Properties
        public readonly array|null $mainProperties = null, // Main
        public readonly string|null $talentTitle = null, // Talent
        public readonly string|null $talentContent = null, // Talent
        public readonly int|null $profession = null, // Profession
        public readonly string|null $starIcon = null, // Star Icon
        public readonly string|null $rarityIcon = null, // Rarity Icon
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            id: $data['id'] ?? null,
            level: $data['level'] ?? null,
            name: $data['name'] ?? null,
            star: $data['star'] ?? null,
            icon: $data['icon'] ?? null,
            rarity: $data['rarity'] ?? null,
            properties: isset($data['properties']) && is_array($data['properties']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemZenlessCharactersItemWeaponPropertiesItem::fromArray($item), $data['properties']) : null,
            mainProperties: isset($data['main_properties']) && is_array($data['main_properties']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemZenlessCharactersItemWeaponMainPropertiesItem::fromArray($item), $data['main_properties']) : null,
            talentTitle: $data['talent_title'] ?? null,
            talentContent: $data['talent_content'] ?? null,
            profession: $data['profession'] ?? null,
            starIcon: $data['starIcon'] ?? null,
            rarityIcon: $data['rarityIcon'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'id' => $this->id,
            'level' => $this->level,
            'name' => $this->name,
            'star' => $this->star,
            'icon' => $this->icon,
            'rarity' => $this->rarity,
            'properties' => $this->properties !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->properties) : null,
            'main_properties' => $this->mainProperties !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->mainProperties) : null,
            'talent_title' => $this->talentTitle,
            'talent_content' => $this->talentContent,
            'profession' => $this->profession,
            'starIcon' => $this->starIcon,
            'rarityIcon' => $this->rarityIcon,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
