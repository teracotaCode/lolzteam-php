<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersIgnoredResponseUsersItemRenderedAvatars implements JsonSerializable
{
    public function __construct(
        public readonly string|null $l = null, // L
        public readonly string|null $m = null, // M
        public readonly string|null $s = null, // S
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            l: $data['l'] ?? null,
            m: $data['m'] ?? null,
            s: $data['s'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'l' => $this->l,
            'm' => $this->m,
            's' => $this->s,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
