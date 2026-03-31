<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\UsersFindResponseUsersItemUserFollowingUsersItem[]|null $users Users
 */
class UsersFindResponseUsersItemUserFollowing implements JsonSerializable
{
    public function __construct(
        public readonly array|null $users = null, // Users
        public readonly int|null $count = null, // Count
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            users: isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\UsersFindResponseUsersItemUserFollowingUsersItem::fromArray($item), $data['users']) : null,
            count: $data['count'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'users' => $this->users !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->users) : null,
            'count' => $this->count,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
