<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ProfilePostsCommentsCreateResponseCommentLinks implements JsonSerializable
{
    public function __construct(
        public readonly string|null $detail = null, // Detail
        public readonly string|null $profilePost = null, // Profile
        public readonly string|null $timeline = null, // Timeline
        public readonly string|null $timelineUser = null, // Timeline
        public readonly string|null $poster = null, // Poster
        public readonly string|null $posterAvatar = null, // Poster
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            detail: $data['detail'] ?? null,
            profilePost: $data['profile_post'] ?? null,
            timeline: $data['timeline'] ?? null,
            timelineUser: $data['timeline_user'] ?? null,
            poster: $data['poster'] ?? null,
            posterAvatar: $data['poster_avatar'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'detail' => $this->detail,
            'profile_post' => $this->profilePost,
            'timeline' => $this->timeline,
            'timeline_user' => $this->timelineUser,
            'poster' => $this->poster,
            'poster_avatar' => $this->posterAvatar,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
