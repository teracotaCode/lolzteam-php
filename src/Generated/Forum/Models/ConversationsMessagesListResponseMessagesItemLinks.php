<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ConversationsMessagesListResponseMessagesItemLinks implements JsonSerializable
{
    public function __construct(
        public readonly string|null $detail = null, // Detail
        public readonly string|null $conversation = null, // Conversation
        public readonly string|null $creator = null, // Creator
        public readonly string|null $creatorAvatar = null, // Creator
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            detail: $data['detail'] ?? null,
            conversation: $data['conversation'] ?? null,
            creator: $data['creator'] ?? null,
            creatorAvatar: $data['creator_avatar'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'detail' => $this->detail,
            'conversation' => $this->conversation,
            'creator' => $this->creator,
            'creator_avatar' => $this->creatorAvatar,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
