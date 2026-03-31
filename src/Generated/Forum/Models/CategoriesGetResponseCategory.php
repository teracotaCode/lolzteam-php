<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoriesGetResponseCategory implements JsonSerializable
{
    public function __construct(
        public readonly int|null $categoryId = null, // Category
        public readonly string|null $categoryTitle = null, // Category
        public readonly string|null $categoryDescription = null, // Category
        public readonly \Lolzteam\Generated\Forum\Models\CategoriesGetResponseCategoryLinks|null $links = null, // Links
        public readonly \Lolzteam\Generated\Forum\Models\CategoriesGetResponseCategoryPermissions|null $permissions = null, // Permissions
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            categoryId: $data['category_id'] ?? null,
            categoryTitle: $data['category_title'] ?? null,
            categoryDescription: $data['category_description'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\CategoriesGetResponseCategoryLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\CategoriesGetResponseCategoryPermissions::fromArray($data['permissions']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'category_id' => $this->categoryId,
            'category_title' => $this->categoryTitle,
            'category_description' => $this->categoryDescription,
            'links' => $this->links?->toArray(),
            'permissions' => $this->permissions?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
