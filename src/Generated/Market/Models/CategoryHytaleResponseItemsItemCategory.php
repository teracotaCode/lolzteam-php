<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryHytaleResponseItemsItemCategory implements JsonSerializable
{
    public function __construct(
        public readonly int|null $categoryId = null, // Category
        public readonly string|null $categoryTitle = null, // Category
        public readonly string|null $categoryName = null, // Category
        public readonly string|null $categoryUrl = null, // Category
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            categoryId: $data['category_id'] ?? null,
            categoryTitle: $data['category_title'] ?? null,
            categoryName: $data['category_name'] ?? null,
            categoryUrl: $data['category_url'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'category_id' => $this->categoryId,
            'category_title' => $this->categoryTitle,
            'category_name' => $this->categoryName,
            'category_url' => $this->categoryUrl,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
