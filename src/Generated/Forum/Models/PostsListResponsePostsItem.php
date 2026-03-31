<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PostsListResponsePostsItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $threadId = null, // Thread
        public readonly int|null $forumId = null, // Forum
        public readonly string|null $threadTitle = null, // Thread
        public readonly int|null $threadViewCount = null, // Thread
        public readonly int|null $creatorUserId = null, // Creator
        public readonly string|null $creatorUsername = null, // Creator
        public readonly string|null $creatorUsernameHtml = null, // Creator
        public readonly int|null $threadCreateDate = null, // Thread
        public readonly int|null $threadUpdateDate = null, // Thread
        public readonly bool|null $userIsIgnored = null, // User
        public readonly int|null $threadPostCount = null, // Thread
        public readonly bool|null $threadIsPublished = null, // Thread
        public readonly bool|null $threadIsDeleted = null, // Thread
        public readonly bool|null $threadIsSticky = null, // Thread
        public readonly bool|null $threadIsClosed = null, // Thread
        public readonly bool|null $threadIsFollowed = null, // Thread
        public readonly bool|null $threadIsStarred = null, // Thread
        public readonly \Lolzteam\Generated\Forum\Models\PostsListResponsePostsItemFirstPost|null $firstPost = null, // First
        public readonly array|null $threadPrefixes = null, // Thread
        public readonly array|null $threadTags = null, // Thread
        public readonly \Lolzteam\Generated\Forum\Models\PostsListResponsePostsItemLinks|null $links = null, // Links
        public readonly \Lolzteam\Generated\Forum\Models\PostsListResponsePostsItemPermissions|null $permissions = null, // Permissions
        public readonly string|null $nodeTitle = null, // Node
        public readonly \Lolzteam\Generated\Forum\Models\PostsListResponsePostsItemRestrictions|null $restrictions = null, // Restrictions
        public readonly \Lolzteam\Generated\Forum\Models\PostsListResponsePostsItemLastPost|null $lastPost = null, // Last
        public readonly \Lolzteam\Generated\Forum\Models\PostsListResponsePostsItemContest|null $contest = null,
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
            creatorUsernameHtml: $data['creator_username_html'] ?? null,
            threadCreateDate: $data['thread_create_date'] ?? null,
            threadUpdateDate: $data['thread_update_date'] ?? null,
            userIsIgnored: $data['user_is_ignored'] ?? null,
            threadPostCount: $data['thread_post_count'] ?? null,
            threadIsPublished: $data['thread_is_published'] ?? null,
            threadIsDeleted: $data['thread_is_deleted'] ?? null,
            threadIsSticky: $data['thread_is_sticky'] ?? null,
            threadIsClosed: $data['thread_is_closed'] ?? null,
            threadIsFollowed: $data['thread_is_followed'] ?? null,
            threadIsStarred: $data['thread_is_starred'] ?? null,
            firstPost: isset($data['first_post']) && is_array($data['first_post']) && !empty($data['first_post']) ? \Lolzteam\Generated\Forum\Models\PostsListResponsePostsItemFirstPost::fromArray($data['first_post']) : null,
            threadPrefixes: $data['thread_prefixes'] ?? null,
            threadTags: $data['thread_tags'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\PostsListResponsePostsItemLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\PostsListResponsePostsItemPermissions::fromArray($data['permissions']) : null,
            nodeTitle: $data['node_title'] ?? null,
            restrictions: isset($data['restrictions']) && is_array($data['restrictions']) && !empty($data['restrictions']) ? \Lolzteam\Generated\Forum\Models\PostsListResponsePostsItemRestrictions::fromArray($data['restrictions']) : null,
            lastPost: isset($data['last_post']) && is_array($data['last_post']) && !empty($data['last_post']) ? \Lolzteam\Generated\Forum\Models\PostsListResponsePostsItemLastPost::fromArray($data['last_post']) : null,
            contest: isset($data['contest']) && is_array($data['contest']) && !empty($data['contest']) ? \Lolzteam\Generated\Forum\Models\PostsListResponsePostsItemContest::fromArray($data['contest']) : null,
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
            'creator_username_html' => $this->creatorUsernameHtml,
            'thread_create_date' => $this->threadCreateDate,
            'thread_update_date' => $this->threadUpdateDate,
            'user_is_ignored' => $this->userIsIgnored,
            'thread_post_count' => $this->threadPostCount,
            'thread_is_published' => $this->threadIsPublished,
            'thread_is_deleted' => $this->threadIsDeleted,
            'thread_is_sticky' => $this->threadIsSticky,
            'thread_is_closed' => $this->threadIsClosed,
            'thread_is_followed' => $this->threadIsFollowed,
            'thread_is_starred' => $this->threadIsStarred,
            'first_post' => $this->firstPost?->toArray(),
            'thread_prefixes' => $this->threadPrefixes,
            'thread_tags' => $this->threadTags,
            'links' => $this->links?->toArray(),
            'permissions' => $this->permissions?->toArray(),
            'node_title' => $this->nodeTitle,
            'restrictions' => $this->restrictions?->toArray(),
            'last_post' => $this->lastPost?->toArray(),
            'contest' => $this->contest?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
