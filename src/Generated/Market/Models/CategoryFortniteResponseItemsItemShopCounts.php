<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryFortniteResponseItemsItemShopCounts implements JsonSerializable
{
    public function __construct(
        public readonly int|null $shopSkinsCount = null, // Shop Skins Count
        public readonly int|null $shopPickaxesCount = null, // Shop Pickaxes Count
        public readonly int|null $shopDancesCount = null, // Shop Dances Count
        public readonly int|null $shopGlidersCount = null, // Shop Gliders Count
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            shopSkinsCount: $data['shopSkinsCount'] ?? null,
            shopPickaxesCount: $data['shopPickaxesCount'] ?? null,
            shopDancesCount: $data['shopDancesCount'] ?? null,
            shopGlidersCount: $data['shopGlidersCount'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'shopSkinsCount' => $this->shopSkinsCount,
            'shopPickaxesCount' => $this->shopPickaxesCount,
            'shopDancesCount' => $this->shopDancesCount,
            'shopGlidersCount' => $this->shopGlidersCount,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
