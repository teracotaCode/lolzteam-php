<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ThreadsFollowedResponseThreadsItem[]|null $threads Threads
 */
class ThreadsFollowedResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $threads = null, // Threads
        public readonly int|null $threadsTotal = null, // Threads
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            threads: isset($data['threads']) && is_array($data['threads']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ThreadsFollowedResponseThreadsItem::fromArray($item), $data['threads']) : null,
            threadsTotal: $data['threads_total'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'threads' => $this->threads !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->threads) : null,
            'threads_total' => $this->threadsTotal,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
