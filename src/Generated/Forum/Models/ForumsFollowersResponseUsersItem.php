<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ForumsFollowersResponseUsersItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $userId = null, // User
        public readonly string|null $username = null, // Username
        public readonly \Lolzteam\Generated\Forum\Models\ForumsFollowersResponseUsersItemFollow|null $follow = null, // Follow
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            userId: $data['user_id'] ?? null,
            username: $data['username'] ?? null,
            follow: isset($data['follow']) && is_array($data['follow']) && !empty($data['follow']) ? \Lolzteam\Generated\Forum\Models\ForumsFollowersResponseUsersItemFollow::fromArray($data['follow']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'user_id' => $this->userId,
            'username' => $this->username,
            'follow' => $this->follow?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
