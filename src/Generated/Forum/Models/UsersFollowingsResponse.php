<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\UsersFollowingsResponseUsersItem[]|null $users Users
 */
class UsersFollowingsResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $users = null, // Users
        public readonly int|null $usersTotal = null, // Users
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            users: isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\UsersFollowingsResponseUsersItem::fromArray($item), $data['users']) : null,
            usersTotal: $data['users_total'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'users' => $this->users !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->users) : null,
            'users_total' => $this->usersTotal,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
