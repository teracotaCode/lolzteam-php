<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersFollowingsResponseUsersItemLinks implements JsonSerializable
{
    public function __construct(
        public readonly string|null $permalink = null, // Permalink
        public readonly string|null $detail = null, // Detail
        public readonly string|null $avatar = null, // Avatar
        public readonly string|null $avatarBig = null, // Avatar
        public readonly string|null $avatarSmall = null, // Avatar
        public readonly string|null $followers = null, // Followers
        public readonly string|null $followings = null, // Followings
        public readonly string|null $ignore = null, // Ignore
        public readonly string|null $timeline = null, // Timeline
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            permalink: $data['permalink'] ?? null,
            detail: $data['detail'] ?? null,
            avatar: $data['avatar'] ?? null,
            avatarBig: $data['avatar_big'] ?? null,
            avatarSmall: $data['avatar_small'] ?? null,
            followers: $data['followers'] ?? null,
            followings: $data['followings'] ?? null,
            ignore: $data['ignore'] ?? null,
            timeline: $data['timeline'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'permalink' => $this->permalink,
            'detail' => $this->detail,
            'avatar' => $this->avatar,
            'avatar_big' => $this->avatarBig,
            'avatar_small' => $this->avatarSmall,
            'followers' => $this->followers,
            'followings' => $this->followings,
            'ignore' => $this->ignore,
            'timeline' => $this->timeline,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
