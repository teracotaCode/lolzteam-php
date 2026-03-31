<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ThreadsFollowersResponseUsersItemFollow implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $alert = null, // Alert
        public readonly bool|null $email = null, // Email
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            alert: $data['alert'] ?? null,
            email: $data['email'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'alert' => $this->alert,
            'email' => $this->email,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
