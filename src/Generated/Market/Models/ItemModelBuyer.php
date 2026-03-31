<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ItemModelBuyer implements JsonSerializable
{
    public function __construct(
        public readonly int|null $userId = null, // User
        public readonly int|null $operationDate = null, // Operation
        public readonly bool|null $visitorIsBuyer = null, // Visitor Is Buyer
        public readonly string|null $username = null, // Username
        public readonly int|null $isBanned = null, // Is
        public readonly int|null $displayStyleGroupId = null, // Display
        public readonly int|null $displayIconGroupId = null, // Display
        public readonly string|null $uniqUsernameCss = null, // Uniq
        public readonly string|null $uniqBanner = null, // Uniq
        public readonly int|null $userGroupId = null, // User
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            userId: $data['user_id'] ?? null,
            operationDate: $data['operation_date'] ?? null,
            visitorIsBuyer: $data['visitorIsBuyer'] ?? null,
            username: $data['username'] ?? null,
            isBanned: $data['is_banned'] ?? null,
            displayStyleGroupId: $data['display_style_group_id'] ?? null,
            displayIconGroupId: $data['display_icon_group_id'] ?? null,
            uniqUsernameCss: $data['uniq_username_css'] ?? null,
            uniqBanner: $data['uniq_banner'] ?? null,
            userGroupId: $data['user_group_id'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'user_id' => $this->userId,
            'operation_date' => $this->operationDate,
            'visitorIsBuyer' => $this->visitorIsBuyer,
            'username' => $this->username,
            'is_banned' => $this->isBanned,
            'display_style_group_id' => $this->displayStyleGroupId,
            'display_icon_group_id' => $this->displayIconGroupId,
            'uniq_username_css' => $this->uniqUsernameCss,
            'uniq_banner' => $this->uniqBanner,
            'user_group_id' => $this->userGroupId,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
