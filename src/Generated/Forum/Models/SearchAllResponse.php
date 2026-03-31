<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\SearchAllResponseDataItem[]|null $data Data
 * @property-read \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItem[]|null $users Users
 */
class SearchAllResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $data = null, // Data
        public readonly int|null $dataTotal = null, // Data
        public readonly array|null $users = null, // Users
        public readonly \Lolzteam\Generated\Forum\Models\SearchAllResponseLinks|null $links = null, // Links
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            data: isset($data['data']) && is_array($data['data']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\SearchAllResponseDataItem::fromArray($item), $data['data']) : null,
            dataTotal: $data['data_total'] ?? null,
            users: isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItem::fromArray($item), $data['users']) : null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\SearchAllResponseLinks::fromArray($data['links']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'data' => $this->data !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->data) : null,
            'data_total' => $this->dataTotal,
            'users' => $this->users !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->users) : null,
            'links' => $this->links?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
