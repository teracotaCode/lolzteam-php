<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class NotificationsGetResponse implements JsonSerializable
{
    public function __construct(
        public readonly int|null $notificationId = null, // Notification
        public readonly \Lolzteam\Generated\Forum\Models\NotificationsGetResponseNotification|null $notification = null,
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            notificationId: $data['notification_id'] ?? null,
            notification: isset($data['notification']) && is_array($data['notification']) && !empty($data['notification']) ? \Lolzteam\Generated\Forum\Models\NotificationsGetResponseNotification::fromArray($data['notification']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'notification_id' => $this->notificationId,
            'notification' => $this->notification?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
