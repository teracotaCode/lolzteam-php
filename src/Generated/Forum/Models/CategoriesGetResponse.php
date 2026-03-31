<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoriesGetResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Forum\Models\CategoriesGetResponseCategory|null $category = null, // Category
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            category: isset($data['category']) && is_array($data['category']) && !empty($data['category']) ? \Lolzteam\Generated\Forum\Models\CategoriesGetResponseCategory::fromArray($data['category']) : null,
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
