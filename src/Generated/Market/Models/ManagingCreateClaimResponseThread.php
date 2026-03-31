<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingCreateClaimResponseThread implements JsonSerializable
{
    public function __construct(
        public readonly int|null $threadId = null, // Thread Id
        public readonly int|null $forumId = null, // Forum Id
        public readonly string|null $threadTitle = null, // Thread Title
        public readonly int|null $threadViewCount = null, // Thread View Count
        public readonly int|null $creatorUserId = null, // Creator User Id
        public readonly string|null $creatorUsername = null, // Creator Username
        public readonly int|null $threadCreateDate = null, // Thread Create Date
        public readonly int|null $threadUpdateDate = null, // Thread Update Date
        public readonly bool|null $userIsIgnored = null, // User Is Ignored
        public readonly int|null $threadPostCount = null, // Thread Post Count
        public readonly bool|null $threadIsPublished = null, // Thread Is Published
        public readonly bool|null $threadIsDeleted = null, // Thread Is Deleted
        public readonly bool|null $threadIsSticky = null, // Thread Is Sticky
        public readonly bool|null $threadIsFollowed = null, // Thread Is Followed
        public readonly \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadFirstPost|null $firstPost = null, // FirstPost
        public readonly array|null $threadPrefixes = null, // Thread Prefixes
        public readonly array|null $threadTags = null, // Thread Tags
        public readonly \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadLinks|null $links = null, // Links1
        public readonly \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadPermissions|null $permissions = null, // Permissions1
        public readonly \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadForum|null $forum = null, // Forum
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            threadId: $data['thread_id'] ?? null,
            forumId: $data['forum_id'] ?? null,
            threadTitle: $data['thread_title'] ?? null,
            threadViewCount: $data['thread_view_count'] ?? null,
            creatorUserId: $data['creator_user_id'] ?? null,
            creatorUsername: $data['creator_username'] ?? null,
            threadCreateDate: $data['thread_create_date'] ?? null,
            threadUpdateDate: $data['thread_update_date'] ?? null,
            userIsIgnored: $data['user_is_ignored'] ?? null,
            threadPostCount: $data['thread_post_count'] ?? null,
            threadIsPublished: $data['thread_is_published'] ?? null,
            threadIsDeleted: $data['thread_is_deleted'] ?? null,
            threadIsSticky: $data['thread_is_sticky'] ?? null,
            threadIsFollowed: $data['thread_is_followed'] ?? null,
            firstPost: isset($data['first_post']) && is_array($data['first_post']) && !empty($data['first_post']) ? \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadFirstPost::fromArray($data['first_post']) : null,
            threadPrefixes: $data['thread_prefixes'] ?? null,
            threadTags: $data['thread_tags'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadPermissions::fromArray($data['permissions']) : null,
            forum: isset($data['forum']) && is_array($data['forum']) && !empty($data['forum']) ? \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadForum::fromArray($data['forum']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'thread_id' => $this->threadId,
            'forum_id' => $this->forumId,
            'thread_title' => $this->threadTitle,
            'thread_view_count' => $this->threadViewCount,
            'creator_user_id' => $this->creatorUserId,
            'creator_username' => $this->creatorUsername,
            'thread_create_date' => $this->threadCreateDate,
            'thread_update_date' => $this->threadUpdateDate,
            'user_is_ignored' => $this->userIsIgnored,
            'thread_post_count' => $this->threadPostCount,
            'thread_is_published' => $this->threadIsPublished,
            'thread_is_deleted' => $this->threadIsDeleted,
            'thread_is_sticky' => $this->threadIsSticky,
            'thread_is_followed' => $this->threadIsFollowed,
            'first_post' => $this->firstPost?->toArray(),
            'thread_prefixes' => $this->threadPrefixes,
            'thread_tags' => $this->threadTags,
            'links' => $this->links?->toArray(),
            'permissions' => $this->permissions?->toArray(),
            'forum' => $this->forum?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
