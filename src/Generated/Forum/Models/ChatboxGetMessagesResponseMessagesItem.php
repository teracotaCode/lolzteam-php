<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ChatboxGetMessagesResponseMessagesItem implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $canReport = null, // Can
        public readonly int|null $date = null, // Date
        public readonly bool|null $isDeleted = null, // Is
        public readonly string|null $message = null, // Message
        public readonly int|null $messageId = null, // Message
        public readonly string|null $messageJson = null, // Message Json
        public readonly string|null $messageRaw = null, // Message Raw
        public readonly \Lolzteam\Generated\Forum\Models\ChatboxGetMessagesResponseMessagesItemRoom|null $room = null, // Room
        public readonly \Lolzteam\Generated\Forum\Models\ChatboxGetMessagesResponseMessagesItemUser|null $user = null, // User
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            canReport: $data['can_report'] ?? null,
            date: $data['date'] ?? null,
            isDeleted: $data['is_deleted'] ?? null,
            message: $data['message'] ?? null,
            messageId: $data['message_id'] ?? null,
            messageJson: $data['messageJson'] ?? null,
            messageRaw: $data['messageRaw'] ?? null,
            room: isset($data['room']) && is_array($data['room']) && !empty($data['room']) ? \Lolzteam\Generated\Forum\Models\ChatboxGetMessagesResponseMessagesItemRoom::fromArray($data['room']) : null,
            user: isset($data['user']) && is_array($data['user']) && !empty($data['user']) ? \Lolzteam\Generated\Forum\Models\ChatboxGetMessagesResponseMessagesItemUser::fromArray($data['user']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'can_report' => $this->canReport,
            'date' => $this->date,
            'is_deleted' => $this->isDeleted,
            'message' => $this->message,
            'message_id' => $this->messageId,
            'messageJson' => $this->messageJson,
            'messageRaw' => $this->messageRaw,
            'room' => $this->room?->toArray(),
            'user' => $this->user?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
