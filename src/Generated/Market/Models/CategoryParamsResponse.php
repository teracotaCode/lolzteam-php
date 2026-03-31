<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\CategoryParamsResponseParamsItem[]|null $params Params
 */
class CategoryParamsResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\CategoryParamsResponseCategory|null $category = null, // Category
        public readonly array|null $params = null, // Params
        public readonly mixed $baseParams = null, // Base
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            category: isset($data['category']) && is_array($data['category']) && !empty($data['category']) ? \Lolzteam\Generated\Market\Models\CategoryParamsResponseCategory::fromArray($data['category']) : null,
            params: isset($data['params']) && is_array($data['params']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryParamsResponseParamsItem::fromArray($item), $data['params']) : null,
            baseParams: $data['base_params'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'category' => $this->category?->toArray(),
            'params' => $this->params !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->params) : null,
            'base_params' => $this->baseParams,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
