<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ConversationsMessagesListResponseMessagesItem[]|null $messages Messages
 */
class ConversationsMessagesListResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $messages = null, // Messages
        public readonly int|null $messagesTotal = null, // Messages
        public readonly \Lolzteam\Generated\Forum\Models\ConversationsMessagesListResponseLinks|null $links = null, // Links
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            messages: isset($data['messages']) && is_array($data['messages']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ConversationsMessagesListResponseMessagesItem::fromArray($item), $data['messages']) : null,
            messagesTotal: $data['messages_total'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\ConversationsMessagesListResponseLinks::fromArray($data['links']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'messages' => $this->messages !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->messages) : null,
            'messages_total' => $this->messagesTotal,
            'links' => $this->links?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
