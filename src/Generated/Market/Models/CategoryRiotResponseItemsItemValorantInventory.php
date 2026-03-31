<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryRiotResponseItemsItemValorantInventory implements JsonSerializable
{
    public function __construct(
        public readonly mixed $weaponSkins = null, // Weapon Skins
        public readonly array|null $agent = null, // Agent
        public readonly array|null $buddy = null, // Buddy
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            weaponSkins: $data['WeaponSkins'] ?? null,
            agent: $data['Agent'] ?? null,
            buddy: $data['Buddy'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'WeaponSkins' => $this->weaponSkins,
            'Agent' => $this->agent,
            'Buddy' => $this->buddy,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
