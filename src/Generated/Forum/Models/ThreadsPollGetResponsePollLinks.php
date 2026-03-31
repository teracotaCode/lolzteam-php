<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ThreadsPollGetResponsePollLinks implements JsonSerializable
{
    public function __construct(
        public readonly string|null $vote = null, // Vote
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            vote: $data['vote'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'vote' => $this->vote,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
