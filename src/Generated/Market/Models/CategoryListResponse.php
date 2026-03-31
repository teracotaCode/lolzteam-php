<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryListResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\CategoryListResponseCategory|null $category = null, // Category
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            category: isset($data['category']) && is_array($data['category']) && !empty($data['category']) ? \Lolzteam\Generated\Market\Models\CategoryListResponseCategory::fromArray($data['category']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'category' => $this->category?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
