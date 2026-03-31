<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ItemFromListModelSeller implements JsonSerializable
{
    public function __construct(
        public readonly int|null $userId = null,
        public readonly int|null $soldItemsCount = null,
        public readonly int|null $activeItemCount = null,
        public readonly mixed $restoreData = null,
        public readonly string|null $username = null,
        public readonly int|null $avatarDate = null,
        public readonly int|null $isBanned = null,
        public readonly int|null $displayStyleGroupId = null,
        public readonly int|null $restorePercents = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            userId: $data['user_id'] ?? null,
            soldItemsCount: $data['sold_items_count'] ?? null,
            activeItemCount: $data['active_item_count'] ?? null,
            restoreData: $data['restore_data'] ?? null,
            username: $data['username'] ?? null,
            avatarDate: $data['avatar_date'] ?? null,
            isBanned: $data['is_banned'] ?? null,
            displayStyleGroupId: $data['display_style_group_id'] ?? null,
            restorePercents: $data['restore_percents'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'user_id' => $this->userId,
            'sold_items_count' => $this->soldItemsCount,
            'active_item_count' => $this->activeItemCount,
            'restore_data' => $this->restoreData,
            'username' => $this->username,
            'avatar_date' => $this->avatarDate,
            'is_banned' => $this->isBanned,
            'display_style_group_id' => $this->displayStyleGroupId,
            'restore_percents' => $this->restorePercents,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
