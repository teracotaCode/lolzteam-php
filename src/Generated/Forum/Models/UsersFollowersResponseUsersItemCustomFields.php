<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersFollowersResponseUsersItemCustomFields implements JsonSerializable
{
    public function __construct(
        public readonly string|null $_4 = null,
        public readonly string|null $lztInnovation20Link = null, // Lzt innovation link
        public readonly string|null $lztInnovation30Link = null, // Lzt innovation link
        public readonly string|null $lztInnovationLink = null, // Lzt innovation link
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            _4: $data['_4'] ?? null,
            lztInnovation20Link: $data['lztInnovation20Link'] ?? null,
            lztInnovation30Link: $data['lztInnovation30Link'] ?? null,
            lztInnovationLink: $data['lztInnovationLink'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            '_4' => $this->_4,
            'lztInnovation20Link' => $this->lztInnovation20Link,
            'lztInnovation30Link' => $this->lztInnovation30Link,
            'lztInnovationLink' => $this->lztInnovationLink,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
