<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ThreadsRecentResponseThreadsItem[]|null $threads Threads
 * @property-read \Lolzteam\Generated\Forum\Models\ThreadsRecentResponseDataItem[]|null $data Data
 */
class ThreadsRecentResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $threads = null, // Threads
        public readonly array|null $data = null, // Data
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            threads: isset($data['threads']) && is_array($data['threads']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ThreadsRecentResponseThreadsItem::fromArray($item), $data['threads']) : null,
            data: isset($data['data']) && is_array($data['data']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ThreadsRecentResponseDataItem::fromArray($item), $data['data']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'threads' => $this->threads !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->threads) : null,
            'data' => $this->data !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->data) : null,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
