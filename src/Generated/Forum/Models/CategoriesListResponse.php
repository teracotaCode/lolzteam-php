<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\CategoriesListResponseCategoriesItem[]|null $categories Categories
 */
class CategoriesListResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $categories = null, // Categories
        public readonly int|null $categoriesTotal = null, // Categories
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            categories: isset($data['categories']) && is_array($data['categories']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\CategoriesListResponseCategoriesItem::fromArray($item), $data['categories']) : null,
            categoriesTotal: $data['categories_total'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'categories' => $this->categories !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->categories) : null,
            'categories_total' => $this->categoriesTotal,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
