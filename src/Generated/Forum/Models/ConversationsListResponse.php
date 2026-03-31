<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ConversationsListResponseConversationsItem[]|null $conversations Conversations
 * @property-read \Lolzteam\Generated\Forum\Models\ConversationsListResponseFoldersItem[]|null $folders Folders
 */
class ConversationsListResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $conversations = null, // Conversations
        public readonly bool|null $canStart = null, // Can
        public readonly array|null $folders = null, // Folders
        public readonly \Lolzteam\Generated\Forum\Models\ConversationsListResponseLinks|null $links = null, // Links
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            conversations: isset($data['conversations']) && is_array($data['conversations']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ConversationsListResponseConversationsItem::fromArray($item), $data['conversations']) : null,
            canStart: $data['can_start'] ?? null,
            folders: isset($data['folders']) && is_array($data['folders']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ConversationsListResponseFoldersItem::fromArray($item), $data['folders']) : null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\ConversationsListResponseLinks::fromArray($data['links']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'conversations' => $this->conversations !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->conversations) : null,
            'can_start' => $this->canStart,
            'folders' => $this->folders !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->folders) : null,
            'links' => $this->links?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
