<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CustomDiscountsCreateResponseDiscount implements JsonSerializable
{
    public function __construct(
        public readonly int|null $categoryId = null, // Category
        public readonly int|null $discountId = null, // Discount
        public readonly int|null $discountPercent = null, // Discount
        public readonly int|null $discountUserId = null, // Discount
        public readonly int|null $maxPrice = null, // Max
        public readonly int|null $minPrice = null, // Min
        public readonly int|null $userId = null, // User
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            categoryId: $data['category_id'] ?? null,
            discountId: $data['discount_id'] ?? null,
            discountPercent: $data['discount_percent'] ?? null,
            discountUserId: $data['discount_user_id'] ?? null,
            maxPrice: $data['max_price'] ?? null,
            minPrice: $data['min_price'] ?? null,
            userId: $data['user_id'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'category_id' => $this->categoryId,
            'discount_id' => $this->discountId,
            'discount_percent' => $this->discountPercent,
            'discount_user_id' => $this->discountUserId,
            'max_price' => $this->maxPrice,
            'min_price' => $this->minPrice,
            'user_id' => $this->userId,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
