<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ThreadsEditResponseThreadRestrictions implements JsonSerializable
{
    public function __construct(
        public readonly int|null $replyDelay = null, // Reply
        public readonly int|null $maxReplyCount = null, // Max
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            replyDelay: $data['reply_delay'] ?? null,
            maxReplyCount: $data['max_reply_count'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'reply_delay' => $this->replyDelay,
            'max_reply_count' => $this->maxReplyCount,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
