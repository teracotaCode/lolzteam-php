<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ThreadsRecentResponseDataItemFirstPostLinks implements JsonSerializable
{
    public function __construct(
        public readonly string|null $permalink = null, // Permalink
        public readonly string|null $detail = null, // Detail
        public readonly string|null $thread = null, // Thread
        public readonly string|null $poster = null, // Poster
        public readonly string|null $likes = null, // Likes
        public readonly string|null $report = null, // Report
        public readonly string|null $attachments = null, // Attachments
        public readonly string|null $posterAvatar = null, // Poster
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            permalink: $data['permalink'] ?? null,
            detail: $data['detail'] ?? null,
            thread: $data['thread'] ?? null,
            poster: $data['poster'] ?? null,
            likes: $data['likes'] ?? null,
            report: $data['report'] ?? null,
            attachments: $data['attachments'] ?? null,
            posterAvatar: $data['poster_avatar'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'permalink' => $this->permalink,
            'detail' => $this->detail,
            'thread' => $this->thread,
            'poster' => $this->poster,
            'likes' => $this->likes,
            'report' => $this->report,
            'attachments' => $this->attachments,
            'poster_avatar' => $this->posterAvatar,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
