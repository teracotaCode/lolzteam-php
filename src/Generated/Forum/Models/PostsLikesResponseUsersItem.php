<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PostsLikesResponseUsersItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $userId = null, // User
        public readonly string|null $username = null, // Username
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            userId: $data['user_id'] ?? null,
            username: $data['username'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'user_id' => $this->userId,
            'username' => $this->username,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
