<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class NotificationsGetResponseNotification implements JsonSerializable
{
    public function __construct(
        public readonly int|null $notificationId = null, // Notification
        public readonly int|null $notificationCreateDate = null, // Notification
        public readonly string|null $contentType = null, // Content
        public readonly int|null $contentId = null, // Content
        public readonly string|null $contentAction = null, // Content
        public readonly bool|null $notificationIsUnread = null, // Notification
        public readonly int|null $creatorUserId = null, // Creator
        public readonly string|null $creatorUsername = null, // Creator
        public readonly string|null $creatorUsernameHtml = null, // Creator
        public readonly string|null $notificationType = null, // Notification
        public readonly \Lolzteam\Generated\Forum\Models\NotificationsGetResponseNotificationLinks|null $links = null, // Links
        public readonly string|null $notificationHtml = null, // Notification
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            notificationId: $data['notification_id'] ?? null,
            notificationCreateDate: $data['notification_create_date'] ?? null,
            contentType: $data['content_type'] ?? null,
            contentId: $data['content_id'] ?? null,
            contentAction: $data['content_action'] ?? null,
            notificationIsUnread: $data['notification_is_unread'] ?? null,
            creatorUserId: $data['creator_user_id'] ?? null,
            creatorUsername: $data['creator_username'] ?? null,
            creatorUsernameHtml: $data['creator_username_html'] ?? null,
            notificationType: $data['notification_type'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\NotificationsGetResponseNotificationLinks::fromArray($data['links']) : null,
            notificationHtml: $data['notification_html'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'notification_id' => $this->notificationId,
            'notification_create_date' => $this->notificationCreateDate,
            'content_type' => $this->contentType,
            'content_id' => $this->contentId,
            'content_action' => $this->contentAction,
            'notification_is_unread' => $this->notificationIsUnread,
            'creator_user_id' => $this->creatorUserId,
            'creator_username' => $this->creatorUsername,
            'creator_username_html' => $this->creatorUsernameHtml,
            'notification_type' => $this->notificationType,
            'links' => $this->links?->toArray(),
            'notification_html' => $this->notificationHtml,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
