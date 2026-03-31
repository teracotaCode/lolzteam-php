<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class RespNotificationModelLinks implements JsonSerializable
{
    public function __construct(
        public readonly string|null $content = null, // Content
        public readonly string|null $creatorAvatar = null, // Creator
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            content: $data['content'] ?? null,
            creatorAvatar: $data['creator_avatar'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'content' => $this->content,
            'creator_avatar' => $this->creatorAvatar,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
