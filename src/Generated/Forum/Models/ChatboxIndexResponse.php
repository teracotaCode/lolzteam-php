<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ChatboxIndexResponseRoomsItem[]|null $rooms Rooms
 * @property-read \Lolzteam\Generated\Forum\Models\ChatboxIndexResponseIgnoreItem[]|null $ignore Ignore
 */
class ChatboxIndexResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $rooms = null, // Rooms
        public readonly mixed $ban = null, // Ban
        public readonly array|null $ignore = null, // Ignore
        public readonly \Lolzteam\Generated\Forum\Models\ChatboxIndexResponsePermissions|null $permissions = null, // Permissions
        public readonly array|null $commands = null, // Commands
        public readonly \Lolzteam\Generated\Forum\Models\ChatboxIndexResponseRoomsOnline|null $roomsOnline = null, // Rooms Online
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            rooms: isset($data['rooms']) && is_array($data['rooms']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ChatboxIndexResponseRoomsItem::fromArray($item), $data['rooms']) : null,
            ban: $data['ban'] ?? null,
            ignore: isset($data['ignore']) && is_array($data['ignore']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ChatboxIndexResponseIgnoreItem::fromArray($item), $data['ignore']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\ChatboxIndexResponsePermissions::fromArray($data['permissions']) : null,
            commands: $data['commands'] ?? null,
            roomsOnline: isset($data['roomsOnline']) && is_array($data['roomsOnline']) && !empty($data['roomsOnline']) ? \Lolzteam\Generated\Forum\Models\ChatboxIndexResponseRoomsOnline::fromArray($data['roomsOnline']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'rooms' => $this->rooms !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->rooms) : null,
            'ban' => $this->ban,
            'ignore' => $this->ignore !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->ignore) : null,
            'permissions' => $this->permissions?->toArray(),
            'commands' => $this->commands,
            'roomsOnline' => $this->roomsOnline?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
