<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ForumsGetResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Forum\Models\ForumsGetResponseForum|null $forum = null, // Forum
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            forum: isset($data['forum']) && is_array($data['forum']) && !empty($data['forum']) ? \Lolzteam\Generated\Forum\Models\ForumsGetResponseForum::fromArray($data['forum']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'forum' => $this->forum?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
