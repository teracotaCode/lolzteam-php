<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ProfilePostsListResponseProfilePostsItemLinks implements JsonSerializable
{
    public function __construct(
        public readonly string|null $permalink = null, // Permalink
        public readonly string|null $detail = null, // Detail
        public readonly string|null $timeline = null, // Timeline
        public readonly string|null $timelineUser = null, // Timeline
        public readonly string|null $poster = null, // Poster
        public readonly string|null $likes = null, // Likes
        public readonly string|null $comments = null, // Comments
        public readonly string|null $report = null, // Report
        public readonly string|null $posterAvatar = null, // Poster
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            permalink: $data['permalink'] ?? null,
            detail: $data['detail'] ?? null,
            timeline: $data['timeline'] ?? null,
            timelineUser: $data['timeline_user'] ?? null,
            poster: $data['poster'] ?? null,
            likes: $data['likes'] ?? null,
            comments: $data['comments'] ?? null,
            report: $data['report'] ?? null,
            posterAvatar: $data['poster_avatar'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'permalink' => $this->permalink,
            'detail' => $this->detail,
            'timeline' => $this->timeline,
            'timeline_user' => $this->timelineUser,
            'poster' => $this->poster,
            'likes' => $this->likes,
            'comments' => $this->comments,
            'report' => $this->report,
            'poster_avatar' => $this->posterAvatar,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
