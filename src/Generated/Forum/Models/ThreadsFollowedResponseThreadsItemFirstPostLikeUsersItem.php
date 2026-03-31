<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ThreadsFollowedResponseThreadsItemFirstPostLikeUsersItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $userId = null, // User
        public readonly string|null $username = null, // Username
        public readonly int|null $displayStyleGroupId = null, // Display
        public readonly int|null $isBanned = null, // Is
        public readonly string|null $uniqUsernameCss = null, // Uniq
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            userId: $data['user_id'] ?? null,
            username: $data['username'] ?? null,
            displayStyleGroupId: $data['display_style_group_id'] ?? null,
            isBanned: $data['is_banned'] ?? null,
            uniqUsernameCss: $data['uniq_username_css'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'user_id' => $this->userId,
            'username' => $this->username,
            'display_style_group_id' => $this->displayStyleGroupId,
            'is_banned' => $this->isBanned,
            'uniq_username_css' => $this->uniqUsernameCss,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
