<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingSteamMafileCodeResponseItemSeller implements JsonSerializable
{
    public function __construct(
        public readonly int|null $userId = null, // User
        public readonly string|null $username = null, // Username
        public readonly int|null $avatarDate = null, // Avatar
        public readonly int|null $isBanned = null, // Is
        public readonly int|null $displayStyleGroupId = null, // Display
        public readonly int|null $joinedDate = null, // Joined
        public readonly int|null $soldItemsCount = null, // Sold
        public readonly int|null $activeItemsCount = null, // Active
        public readonly mixed $restoreData = null, // Restore
        public readonly int|null $effectiveLastActivity = null, // Effective
        public readonly mixed $restorePercents = null, // Restore
        public readonly bool|null $isOnline = null, // Is Online
        public readonly \Lolzteam\Generated\Market\Models\ManagingSteamMafileCodeResponseItemSellerContacts|null $contacts = null, // Contacts
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            userId: $data['user_id'] ?? null,
            username: $data['username'] ?? null,
            avatarDate: $data['avatar_date'] ?? null,
            isBanned: $data['is_banned'] ?? null,
            displayStyleGroupId: $data['display_style_group_id'] ?? null,
            joinedDate: $data['joined_date'] ?? null,
            soldItemsCount: $data['sold_items_count'] ?? null,
            activeItemsCount: $data['active_items_count'] ?? null,
            restoreData: $data['restore_data'] ?? null,
            effectiveLastActivity: $data['effective_last_activity'] ?? null,
            restorePercents: $data['restore_percents'] ?? null,
            isOnline: $data['isOnline'] ?? null,
            contacts: isset($data['contacts']) && is_array($data['contacts']) && !empty($data['contacts']) ? \Lolzteam\Generated\Market\Models\ManagingSteamMafileCodeResponseItemSellerContacts::fromArray($data['contacts']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'user_id' => $this->userId,
            'username' => $this->username,
            'avatar_date' => $this->avatarDate,
            'is_banned' => $this->isBanned,
            'display_style_group_id' => $this->displayStyleGroupId,
            'joined_date' => $this->joinedDate,
            'sold_items_count' => $this->soldItemsCount,
            'active_items_count' => $this->activeItemsCount,
            'restore_data' => $this->restoreData,
            'effective_last_activity' => $this->effectiveLastActivity,
            'restore_percents' => $this->restorePercents,
            'isOnline' => $this->isOnline,
            'contacts' => $this->contacts?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
