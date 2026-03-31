<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ChatboxGetMessagesResponseMessagesItem[]|null $messages Messages
 */
class ChatboxGetMessagesResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $messages = null, // Messages
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            messages: isset($data['messages']) && is_array($data['messages']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ChatboxGetMessagesResponseMessagesItem::fromArray($item), $data['messages']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'messages' => $this->messages !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->messages) : null,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
