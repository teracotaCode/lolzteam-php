<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\SearchUsersResponseUsersItem[]|null $users Users
 */
class SearchUsersResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $users = null, // Users
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            users: isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\SearchUsersResponseUsersItem::fromArray($item), $data['users']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'users' => $this->users !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->users) : null,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
