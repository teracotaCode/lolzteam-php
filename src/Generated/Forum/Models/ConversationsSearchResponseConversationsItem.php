<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ConversationsSearchResponseConversationsItemRecipientsItem[]|null $recipients Recipients
 */
class ConversationsSearchResponseConversationsItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $conversationId = null, // Conversation
        public readonly string|null $conversationTitle = null, // Conversation
        public readonly int|null $creatorUserId = null, // Creator
        public readonly string|null $creatorUsername = null, // Creator
        public readonly string|null $creatorUsernameHtml = null, // Creator
        public readonly int|null $conversationCreateDate = null, // Conversation
        public readonly int|null $conversationUpdateDate = null, // Conversation
        public readonly int|null $conversationLastReadDate = null, // Conversation
        public readonly int|null $conversationOnlineCount = null, // Conversation
        public readonly int|null $isStarred = null, // Is
        public readonly int|null $isGroup = null, // Is
        public readonly int|null $isUnread = null, // Is
        public readonly int|null $alerts = null, // Alerts
        public readonly \Lolzteam\Generated\Forum\Models\ConversationsSearchResponseConversationsItemPermissions|null $permissions = null, // Permissions
        public readonly int|null $conversationMessageCount = null, // Conversation
        public readonly bool|null $conversationIsNew = null, // Conversation
        public readonly bool|null $creatorIsIgnored = null, // Creator
        public readonly bool|null $conversationIsOpen = null, // Conversation
        public readonly bool|null $conversationIsDeleted = null, // Conversation
        public readonly \Lolzteam\Generated\Forum\Models\ConversationsSearchResponseConversationsItemRecipient|null $recipient = null, // Recipient
        public readonly array|null $recipients = null, // Recipients
        public readonly \Lolzteam\Generated\Forum\Models\ConversationsSearchResponseConversationsItemLinks|null $links = null, // Links
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            conversationId: $data['conversation_id'] ?? null,
            conversationTitle: $data['conversation_title'] ?? null,
            creatorUserId: $data['creator_user_id'] ?? null,
            creatorUsername: $data['creator_username'] ?? null,
            creatorUsernameHtml: $data['creator_username_html'] ?? null,
            conversationCreateDate: $data['conversation_create_date'] ?? null,
            conversationUpdateDate: $data['conversation_update_date'] ?? null,
            conversationLastReadDate: $data['conversation_last_read_date'] ?? null,
            conversationOnlineCount: $data['conversation_online_count'] ?? null,
            isStarred: $data['is_starred'] ?? null,
            isGroup: $data['is_group'] ?? null,
            isUnread: $data['is_unread'] ?? null,
            alerts: $data['alerts'] ?? null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\ConversationsSearchResponseConversationsItemPermissions::fromArray($data['permissions']) : null,
            conversationMessageCount: $data['conversation_message_count'] ?? null,
            conversationIsNew: $data['conversation_is_new'] ?? null,
            creatorIsIgnored: $data['creator_is_ignored'] ?? null,
            conversationIsOpen: $data['conversation_is_open'] ?? null,
            conversationIsDeleted: $data['conversation_is_deleted'] ?? null,
            recipient: isset($data['recipient']) && is_array($data['recipient']) && !empty($data['recipient']) ? \Lolzteam\Generated\Forum\Models\ConversationsSearchResponseConversationsItemRecipient::fromArray($data['recipient']) : null,
            recipients: isset($data['recipients']) && is_array($data['recipients']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ConversationsSearchResponseConversationsItemRecipientsItem::fromArray($item), $data['recipients']) : null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\ConversationsSearchResponseConversationsItemLinks::fromArray($data['links']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'conversation_id' => $this->conversationId,
            'conversation_title' => $this->conversationTitle,
            'creator_user_id' => $this->creatorUserId,
            'creator_username' => $this->creatorUsername,
            'creator_username_html' => $this->creatorUsernameHtml,
            'conversation_create_date' => $this->conversationCreateDate,
            'conversation_update_date' => $this->conversationUpdateDate,
            'conversation_last_read_date' => $this->conversationLastReadDate,
            'conversation_online_count' => $this->conversationOnlineCount,
            'is_starred' => $this->isStarred,
            'is_group' => $this->isGroup,
            'is_unread' => $this->isUnread,
            'alerts' => $this->alerts,
            'permissions' => $this->permissions?->toArray(),
            'conversation_message_count' => $this->conversationMessageCount,
            'conversation_is_new' => $this->conversationIsNew,
            'creator_is_ignored' => $this->creatorIsIgnored,
            'conversation_is_open' => $this->conversationIsOpen,
            'conversation_is_deleted' => $this->conversationIsDeleted,
            'recipient' => $this->recipient?->toArray(),
            'recipients' => $this->recipients !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->recipients) : null,
            'links' => $this->links?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
