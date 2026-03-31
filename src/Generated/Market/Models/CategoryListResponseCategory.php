<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryListResponseCategory implements JsonSerializable
{
    public function __construct(
        public readonly int|null $categoryId = null, // Category Id
        public readonly string|null $categoryTitle = null, // Category Title
        public readonly string|null $categoryDescription = null, // Category Description
        public readonly \Lolzteam\Generated\Market\Models\CategoryListResponseCategoryLinks|null $links = null, // Links
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            categoryId: $data['category_id'] ?? null,
            categoryTitle: $data['category_title'] ?? null,
            categoryDescription: $data['category_description'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Market\Models\CategoryListResponseCategoryLinks::fromArray($data['links']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'category_id' => $this->categoryId,
            'category_title' => $this->categoryTitle,
            'category_description' => $this->categoryDescription,
            'links' => $this->links?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
