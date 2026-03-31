<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ThreadsListResponseThreadsItem[]|null $threads Threads
 */
class ThreadsListResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $threads = null, // Threads
        public readonly \Lolzteam\Generated\Forum\Models\ThreadsListResponseForum|null $forum = null, // Forum
        public readonly int|null $threadsTotal = null, // Threads
        public readonly \Lolzteam\Generated\Forum\Models\ThreadsListResponseLinks|null $links = null, // Links
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            threads: isset($data['threads']) && is_array($data['threads']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ThreadsListResponseThreadsItem::fromArray($item), $data['threads']) : null,
            forum: isset($data['forum']) && is_array($data['forum']) && !empty($data['forum']) ? \Lolzteam\Generated\Forum\Models\ThreadsListResponseForum::fromArray($data['forum']) : null,
            threadsTotal: $data['threads_total'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\ThreadsListResponseLinks::fromArray($data['links']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'threads' => $this->threads !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->threads) : null,
            'forum' => $this->forum?->toArray(),
            'threads_total' => $this->threadsTotal,
            'links' => $this->links?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
