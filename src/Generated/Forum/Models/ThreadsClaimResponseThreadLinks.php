<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ThreadsClaimResponseThreadLinks implements JsonSerializable
{
    public function __construct(
        public readonly string|null $permalink = null, // Permalink
        public readonly string|null $detail = null, // Detail
        public readonly string|null $followers = null, // Followers
        public readonly string|null $forum = null, // Forum
        public readonly string|null $posts = null, // Posts
        public readonly string|null $firstPoster = null, // First
        public readonly string|null $firstPosterAvatar = null, // First
        public readonly string|null $firstPost = null, // First
        public readonly string|null $lastPost = null, // Last
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            permalink: $data['permalink'] ?? null,
            detail: $data['detail'] ?? null,
            followers: $data['followers'] ?? null,
            forum: $data['forum'] ?? null,
            posts: $data['posts'] ?? null,
            firstPoster: $data['first_poster'] ?? null,
            firstPosterAvatar: $data['first_poster_avatar'] ?? null,
            firstPost: $data['first_post'] ?? null,
            lastPost: $data['last_post'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'permalink' => $this->permalink,
            'detail' => $this->detail,
            'followers' => $this->followers,
            'forum' => $this->forum,
            'posts' => $this->posts,
            'first_poster' => $this->firstPoster,
            'first_poster_avatar' => $this->firstPosterAvatar,
            'first_post' => $this->firstPost,
            'last_post' => $this->lastPost,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
