<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ThreadsPollGetResponsePollResponsesItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $responseId = null, // Response
        public readonly string|null $responseAnswer = null, // Response
        public readonly int|null $responseVoteCount = null, // Response
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            responseId: $data['response_id'] ?? null,
            responseAnswer: $data['response_answer'] ?? null,
            responseVoteCount: $data['response_vote_count'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'response_id' => $this->responseId,
            'response_answer' => $this->responseAnswer,
            'response_vote_count' => $this->responseVoteCount,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
