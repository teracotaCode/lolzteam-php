<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\SearchResultsResponseDataItemForumForumPrefixesItem[]|null $forumPrefixes Forum
 */
class SearchResultsResponseDataItemForum implements JsonSerializable
{
    public function __construct(
        public readonly int|null $forumId = null, // Forum
        public readonly string|null $forumTitle = null, // Forum
        public readonly string|null $forumDescription = null, // Forum
        public readonly int|null $forumThreadCount = null, // Forum
        public readonly int|null $forumPostCount = null, // Forum
        public readonly array|null $forumPrefixes = null, // Forum
        public readonly int|null $threadDefaultPrefixId = null, // Thread
        public readonly bool|null $threadPrefixIsRequired = null, // Thread
        public readonly \Lolzteam\Generated\Forum\Models\SearchResultsResponseDataItemForumLinks|null $links = null, // Links
        public readonly \Lolzteam\Generated\Forum\Models\SearchResultsResponseDataItemForumPermissions|null $permissions = null, // Permissions
        public readonly bool|null $forumIsFollowed = null, // Forum
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            forumId: $data['forum_id'] ?? null,
            forumTitle: $data['forum_title'] ?? null,
            forumDescription: $data['forum_description'] ?? null,
            forumThreadCount: $data['forum_thread_count'] ?? null,
            forumPostCount: $data['forum_post_count'] ?? null,
            forumPrefixes: isset($data['forum_prefixes']) && is_array($data['forum_prefixes']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\SearchResultsResponseDataItemForumForumPrefixesItem::fromArray($item), $data['forum_prefixes']) : null,
            threadDefaultPrefixId: $data['thread_default_prefix_id'] ?? null,
            threadPrefixIsRequired: $data['thread_prefix_is_required'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\SearchResultsResponseDataItemForumLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\SearchResultsResponseDataItemForumPermissions::fromArray($data['permissions']) : null,
            forumIsFollowed: $data['forum_is_followed'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'forum_id' => $this->forumId,
            'forum_title' => $this->forumTitle,
            'forum_description' => $this->forumDescription,
            'forum_thread_count' => $this->forumThreadCount,
            'forum_post_count' => $this->forumPostCount,
            'forum_prefixes' => $this->forumPrefixes !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->forumPrefixes) : null,
            'thread_default_prefix_id' => $this->threadDefaultPrefixId,
            'thread_prefix_is_required' => $this->threadPrefixIsRequired,
            'links' => $this->links?->toArray(),
            'permissions' => $this->permissions?->toArray(),
            'forum_is_followed' => $this->forumIsFollowed,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
