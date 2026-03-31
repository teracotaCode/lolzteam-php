<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryMihoyoResponseItemsItemSeller implements JsonSerializable
{
    public function __construct(
        public readonly int|null $userId = null, // User
        public readonly int|null $soldItemsCount = null, // Sold
        public readonly int|null $activeItemsCount = null, // Active
        public readonly mixed $restoreData = null, // Restore
        public readonly string|null $username = null, // Username
        public readonly int|null $avatarDate = null, // Avatar
        public readonly int|null $isBanned = null, // Is
        public readonly int|null $displayStyleGroupId = null, // Display
        public readonly int|null $restorePercents = null, // Restore
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            userId: $data['user_id'] ?? null,
            soldItemsCount: $data['sold_items_count'] ?? null,
            activeItemsCount: $data['active_items_count'] ?? null,
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
            'active_items_count' => $this->activeItemsCount,
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
