<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class RespProfilePostModelTimelineUserPermissions implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $edit = null, // Edit
        public readonly bool|null $follow = null, // Follow
        public readonly bool|null $ignore = null, // Ignore
        public readonly bool|null $profilePost = null, // Profile
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            edit: $data['edit'] ?? null,
            follow: $data['follow'] ?? null,
            ignore: $data['ignore'] ?? null,
            profilePost: $data['profile_post'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'edit' => $this->edit,
            'follow' => $this->follow,
            'ignore' => $this->ignore,
            'profile_post' => $this->profilePost,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
