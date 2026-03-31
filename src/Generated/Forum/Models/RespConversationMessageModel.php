<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class RespConversationMessageModel implements JsonSerializable
{
    public function __construct(
        public readonly int|null $messageId = null, // Message
        public readonly int|null $conversationId = null, // Conversation
        public readonly int|null $creatorUserId = null, // Creator
        public readonly string|null $creatorUsername = null, // Creator
        public readonly string|null $creatorUsernameHtml = null, // Creator
        public readonly int|null $messageCreateDate = null, // Message
        public readonly int|null $messageIsUnread = null, // Message
        public readonly bool|null $messageNeedTranslate = null, // Message
        public readonly bool|null $messageIsSystem = null, // Message
        public readonly int|null $messageEditDate = null, // Message
        public readonly string|null $messageBody = null, // Message
        public readonly string|null $messageBodyHtml = null, // Message
        public readonly string|null $messageBodyPlainText = null, // Message
        public readonly bool|null $userIsIgnored = null, // User
        public readonly \Lolzteam\Generated\Forum\Models\RespConversationMessageModelLinks|null $links = null, // Links
        public readonly \Lolzteam\Generated\Forum\Models\RespConversationMessageModelPermissions|null $permissions = null, // Permissions
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            messageId: $data['message_id'] ?? null,
            conversationId: $data['conversation_id'] ?? null,
            creatorUserId: $data['creator_user_id'] ?? null,
            creatorUsername: $data['creator_username'] ?? null,
            creatorUsernameHtml: $data['creator_username_html'] ?? null,
            messageCreateDate: $data['message_create_date'] ?? null,
            messageIsUnread: $data['message_is_unread'] ?? null,
            messageNeedTranslate: $data['message_need_translate'] ?? null,
            messageIsSystem: $data['message_is_system'] ?? null,
            messageEditDate: $data['message_edit_date'] ?? null,
            messageBody: $data['message_body'] ?? null,
            messageBodyHtml: $data['message_body_html'] ?? null,
            messageBodyPlainText: $data['message_body_plain_text'] ?? null,
            userIsIgnored: $data['user_is_ignored'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\RespConversationMessageModelLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\RespConversationMessageModelPermissions::fromArray($data['permissions']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'message_id' => $this->messageId,
            'conversation_id' => $this->conversationId,
            'creator_user_id' => $this->creatorUserId,
            'creator_username' => $this->creatorUsername,
            'creator_username_html' => $this->creatorUsernameHtml,
            'message_create_date' => $this->messageCreateDate,
            'message_is_unread' => $this->messageIsUnread,
            'message_need_translate' => $this->messageNeedTranslate,
            'message_is_system' => $this->messageIsSystem,
            'message_edit_date' => $this->messageEditDate,
            'message_body' => $this->messageBody,
            'message_body_html' => $this->messageBodyHtml,
            'message_body_plain_text' => $this->messageBodyPlainText,
            'user_is_ignored' => $this->userIsIgnored,
            'links' => $this->links?->toArray(),
            'permissions' => $this->permissions?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
