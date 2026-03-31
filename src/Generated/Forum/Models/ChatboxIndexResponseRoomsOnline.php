<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ChatboxIndexResponseRoomsOnline implements JsonSerializable
{
    public function __construct(
        public readonly int|null $chat0 = null, // Chat
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            chat0: $data['chat:0'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'chat:0' => $this->chat0,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
