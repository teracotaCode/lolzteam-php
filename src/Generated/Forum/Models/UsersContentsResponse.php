<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\UsersContentsResponseDataItem[]|null $data Data
 */
class UsersContentsResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $data = null, // Data
        public readonly int|null $dataTotal = null, // Data
        public readonly \Lolzteam\Generated\Forum\Models\UsersContentsResponseUser|null $user = null,
        public readonly \Lolzteam\Generated\Forum\Models\UsersContentsResponseLinks|null $links = null, // Links
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            data: isset($data['data']) && is_array($data['data']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\UsersContentsResponseDataItem::fromArray($item), $data['data']) : null,
            dataTotal: $data['data_total'] ?? null,
            user: isset($data['user']) && is_array($data['user']) && !empty($data['user']) ? \Lolzteam\Generated\Forum\Models\UsersContentsResponseUser::fromArray($data['user']) : null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\UsersContentsResponseLinks::fromArray($data['links']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'data' => $this->data !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->data) : null,
            'data_total' => $this->dataTotal,
            'user' => $this->user?->toArray(),
            'links' => $this->links?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
