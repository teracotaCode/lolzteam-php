<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryFortniteResponseItemsItemFortnitePickaxeItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $id = null, // Id
        public readonly string|null $title = null, // Title
        public readonly string|null $rarity = null, // Rarity
        public readonly string|null $type = null, // Type
        public readonly int|null $fromShop = null, // From
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            id: $data['id'] ?? null,
            title: $data['title'] ?? null,
            rarity: $data['rarity'] ?? null,
            type: $data['type'] ?? null,
            fromShop: $data['from_shop'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'id' => $this->id,
            'title' => $this->title,
            'rarity' => $this->rarity,
            'type' => $this->type,
            'from_shop' => $this->fromShop,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
