<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersFindResponseUsersItemSelfPermissions implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $createConversation = null, // Create
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            createConversation: $data['create_conversation'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'create_conversation' => $this->createConversation,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
