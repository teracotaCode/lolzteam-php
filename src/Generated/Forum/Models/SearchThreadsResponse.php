<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\SearchThreadsResponseDataItem[]|null $data Data
 */
class SearchThreadsResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $data = null, // Data
        public readonly int|null $dataTotal = null, // Data
        public readonly \Lolzteam\Generated\Forum\Models\SearchThreadsResponseLinks|null $links = null, // Links
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            data: isset($data['data']) && is_array($data['data']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\SearchThreadsResponseDataItem::fromArray($item), $data['data']) : null,
            dataTotal: $data['data_total'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\SearchThreadsResponseLinks::fromArray($data['links']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'data' => $this->data !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->data) : null,
            'data_total' => $this->dataTotal,
            'links' => $this->links?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
