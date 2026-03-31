<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ThreadsPollGetResponsePollResponsesItem[]|null $responses Responses
 */
class ThreadsPollGetResponsePoll implements JsonSerializable
{
    public function __construct(
        public readonly int|null $pollId = null, // Poll
        public readonly string|null $pollQuestion = null, // Poll
        public readonly int|null $pollVoteCount = null, // Poll
        public readonly int|null $pollMaxVotes = null, // Poll
        public readonly bool|null $pollIsOpen = null, // Poll
        public readonly bool|null $pollIsVoted = null, // Poll
        public readonly array|null $responses = null, // Responses
        public readonly \Lolzteam\Generated\Forum\Models\ThreadsPollGetResponsePollPermissions|null $permissions = null, // Permissions
        public readonly \Lolzteam\Generated\Forum\Models\ThreadsPollGetResponsePollLinks|null $links = null, // Links
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            pollId: $data['poll_id'] ?? null,
            pollQuestion: $data['poll_question'] ?? null,
            pollVoteCount: $data['poll_vote_count'] ?? null,
            pollMaxVotes: $data['poll_max_votes'] ?? null,
            pollIsOpen: $data['poll_is_open'] ?? null,
            pollIsVoted: $data['poll_is_voted'] ?? null,
            responses: isset($data['responses']) && is_array($data['responses']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ThreadsPollGetResponsePollResponsesItem::fromArray($item), $data['responses']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\ThreadsPollGetResponsePollPermissions::fromArray($data['permissions']) : null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\ThreadsPollGetResponsePollLinks::fromArray($data['links']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'poll_id' => $this->pollId,
            'poll_question' => $this->pollQuestion,
            'poll_vote_count' => $this->pollVoteCount,
            'poll_max_votes' => $this->pollMaxVotes,
            'poll_is_open' => $this->pollIsOpen,
            'poll_is_voted' => $this->pollIsVoted,
            'responses' => $this->responses !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->responses) : null,
            'permissions' => $this->permissions?->toArray(),
            'links' => $this->links?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
