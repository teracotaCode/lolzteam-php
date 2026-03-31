<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\SearchResultsResponseDataItem[]|null $data Data
 */
class SearchResultsResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $data = null, // Data
        public readonly int|null $dataTotal = null, // Data
        public readonly mixed $searchTags = null, // Search
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            data: isset($data['data']) && is_array($data['data']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\SearchResultsResponseDataItem::fromArray($item), $data['data']) : null,
            dataTotal: $data['data_total'] ?? null,
            searchTags: $data['search_tags'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'data' => $this->data !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->data) : null,
            'data_total' => $this->dataTotal,
            'search_tags' => $this->searchTags,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
