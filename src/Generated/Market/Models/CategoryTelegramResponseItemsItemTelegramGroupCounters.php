<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryTelegramResponseItemsItemTelegramGroupCounters implements JsonSerializable
{
    public function __construct(
        public readonly int|null $chats = null, // Chats
        public readonly int|null $channels = null, // Channels
        public readonly int|null $conversations = null, // Conversations
        public readonly int|null $admin = null, // Admin
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            chats: $data['chats'] ?? null,
            channels: $data['channels'] ?? null,
            conversations: $data['conversations'] ?? null,
            admin: $data['admin'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'chats' => $this->chats,
            'channels' => $this->channels,
            'conversations' => $this->conversations,
            'admin' => $this->admin,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
