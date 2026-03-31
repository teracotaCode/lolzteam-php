<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryRiotResponseItemsItemLolInventory implements JsonSerializable
{
    public function __construct(
        public readonly array|null $champion = null, // Champion
        public readonly mixed $skin = null, // Skin
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            champion: $data['Champion'] ?? null,
            skin: $data['Skin'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'Champion' => $this->champion,
            'Skin' => $this->skin,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
