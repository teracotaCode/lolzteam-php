<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemGenshinCharactersItemReliquariesItem[]|null $reliquaries Reliquaries
 */
class CategoryMihoyoResponseItemsItemGenshinCharactersItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $id = null, // Id
        public readonly string|null $image = null, // Image
        public readonly string|null $icon = null, // Icon
        public readonly string|null $name = null, // Name
        public readonly string|null $element = null, // Element
        public readonly int|null $fetter = null, // Fetter
        public readonly int|null $level = null, // Level
        public readonly int|null $rarity = null, // Rarity
        public readonly \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemGenshinCharactersItemWeapon|null $weapon = null, // Weapon
        public readonly array|null $reliquaries = null, // Reliquaries
        public readonly int|null $activedConstellationNum = null, // Actived
        public readonly array|null $costumes = null, // Costumes
        public readonly mixed $external = null, // External
        public readonly string|null $background = null, // Background
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            id: $data['id'] ?? null,
            image: $data['image'] ?? null,
            icon: $data['icon'] ?? null,
            name: $data['name'] ?? null,
            element: $data['element'] ?? null,
            fetter: $data['fetter'] ?? null,
            level: $data['level'] ?? null,
            rarity: $data['rarity'] ?? null,
            weapon: isset($data['weapon']) && is_array($data['weapon']) && !empty($data['weapon']) ? \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemGenshinCharactersItemWeapon::fromArray($data['weapon']) : null,
            reliquaries: isset($data['reliquaries']) && is_array($data['reliquaries']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemGenshinCharactersItemReliquariesItem::fromArray($item), $data['reliquaries']) : null,
            activedConstellationNum: $data['actived_constellation_num'] ?? null,
            costumes: $data['costumes'] ?? null,
            external: $data['external'] ?? null,
            background: $data['background'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'id' => $this->id,
            'image' => $this->image,
            'icon' => $this->icon,
            'name' => $this->name,
            'element' => $this->element,
            'fetter' => $this->fetter,
            'level' => $this->level,
            'rarity' => $this->rarity,
            'weapon' => $this->weapon?->toArray(),
            'reliquaries' => $this->reliquaries !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->reliquaries) : null,
            'actived_constellation_num' => $this->activedConstellationNum,
            'costumes' => $this->costumes,
            'external' => $this->external,
            'background' => $this->background,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
