<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryMihoyoResponseItemsItemZenlessCharactersItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $id = null, // Id
        public readonly int|null $level = null, // Level
        public readonly string|null $nameMi18n = null, // Name
        public readonly string|null $fullNameMi18n = null, // Full
        public readonly int|null $elementType = null, // Element
        public readonly string|null $campNameMi18n = null, // Camp
        public readonly int|null $avatarProfession = null, // Avatar
        public readonly int|null $rarity = null, // Rarity
        public readonly \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemZenlessCharactersItemWeapon|null $weapon = null, // Weapon
        public readonly int|null $rank = null, // Rank
        public readonly string|null $name = null, // Name
        public readonly string|null $rarityIcon = null, // Rarity Icon
        public readonly string|null $elementIcon = null, // Element Icon
        public readonly string|null $professionIcon = null, // Profession Icon
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            id: $data['id'] ?? null,
            level: $data['level'] ?? null,
            nameMi18n: $data['name_mi18n'] ?? null,
            fullNameMi18n: $data['full_name_mi18n'] ?? null,
            elementType: $data['element_type'] ?? null,
            campNameMi18n: $data['camp_name_mi18n'] ?? null,
            avatarProfession: $data['avatar_profession'] ?? null,
            rarity: $data['rarity'] ?? null,
            weapon: isset($data['weapon']) && is_array($data['weapon']) && !empty($data['weapon']) ? \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemZenlessCharactersItemWeapon::fromArray($data['weapon']) : null,
            rank: $data['rank'] ?? null,
            name: $data['name'] ?? null,
            rarityIcon: $data['rarityIcon'] ?? null,
            elementIcon: $data['elementIcon'] ?? null,
            professionIcon: $data['professionIcon'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'id' => $this->id,
            'level' => $this->level,
            'name_mi18n' => $this->nameMi18n,
            'full_name_mi18n' => $this->fullNameMi18n,
            'element_type' => $this->elementType,
            'camp_name_mi18n' => $this->campNameMi18n,
            'avatar_profession' => $this->avatarProfession,
            'rarity' => $this->rarity,
            'weapon' => $this->weapon?->toArray(),
            'rank' => $this->rank,
            'name' => $this->name,
            'rarityIcon' => $this->rarityIcon,
            'elementIcon' => $this->elementIcon,
            'professionIcon' => $this->professionIcon,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
