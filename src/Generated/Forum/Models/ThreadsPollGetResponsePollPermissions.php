<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ThreadsPollGetResponsePollPermissions implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $vote = null, // Vote
        public readonly bool|null $result = null, // Result
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            vote: $data['vote'] ?? null,
            result: $data['result'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'vote' => $this->vote,
            'result' => $this->result,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
