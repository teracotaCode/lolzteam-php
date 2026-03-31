<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\NotificationsListResponseNotificationsItem[]|null $notifications Notifications
 */
class NotificationsListResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $notifications = null, // Notifications
        public readonly int|null $notificationsTotal = null, // Notifications
        public readonly \Lolzteam\Generated\Forum\Models\NotificationsListResponseLinks|null $links = null, // Links
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            notifications: isset($data['notifications']) && is_array($data['notifications']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\NotificationsListResponseNotificationsItem::fromArray($item), $data['notifications']) : null,
            notificationsTotal: $data['notifications_total'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\NotificationsListResponseLinks::fromArray($data['links']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'notifications' => $this->notifications !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->notifications) : null,
            'notifications_total' => $this->notificationsTotal,
            'links' => $this->links?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
