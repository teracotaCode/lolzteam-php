<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ThreadsNavigationResponseElementsItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $categoryId = null, // Category
        public readonly string|null $categoryTitle = null, // Category
        public readonly string|null $categoryDescription = null, // Category
        public readonly \Lolzteam\Generated\Forum\Models\ThreadsNavigationResponseElementsItemLinks|null $links = null, // Links
        public readonly \Lolzteam\Generated\Forum\Models\ThreadsNavigationResponseElementsItemPermissions|null $permissions = null, // Permissions
        public readonly string|null $navigationType = null, // Navigation
        public readonly int|null $navigationId = null, // Navigation
        public readonly int|null $navigationDepth = null, // Navigation
        public readonly int|null $navigationParentId = null, // Navigation
        public readonly bool|null $hasSubElements = null, // Has
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            categoryId: $data['category_id'] ?? null,
            categoryTitle: $data['category_title'] ?? null,
            categoryDescription: $data['category_description'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\ThreadsNavigationResponseElementsItemLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\ThreadsNavigationResponseElementsItemPermissions::fromArray($data['permissions']) : null,
            navigationType: $data['navigation_type'] ?? null,
            navigationId: $data['navigation_id'] ?? null,
            navigationDepth: $data['navigation_depth'] ?? null,
            navigationParentId: $data['navigation_parent_id'] ?? null,
            hasSubElements: $data['has_sub_elements'] ?? null,
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
            'navigation_type' => $this->navigationType,
            'navigation_id' => $this->navigationId,
            'navigation_depth' => $this->navigationDepth,
            'navigation_parent_id' => $this->navigationParentId,
            'has_sub_elements' => $this->hasSubElements,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
