<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadForumForumPrefixesItem[]|null $forumPrefixes Forum Prefixes
 */
class ManagingCreateClaimResponseThreadForum implements JsonSerializable
{
    public function __construct(
        public readonly int|null $forumId = null, // Forum Id
        public readonly string|null $forumTitle = null, // Forum Title
        public readonly string|null $forumDescription = null, // Forum Description
        public readonly int|null $forumThreadCount = null, // Forum Thread Count
        public readonly int|null $forumPostCount = null, // Forum Post Count
        public readonly array|null $forumPrefixes = null, // Forum Prefixes
        public readonly int|null $threadDefaultPrefixId = null, // Thread Default Prefix Id
        public readonly bool|null $threadPrefixIsRequired = null, // Thread Prefix Is Required
        public readonly \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadForumLinks|null $links = null, // Links2
        public readonly \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadForumPermissions|null $permissions = null, // Permissions2
        public readonly bool|null $forumIsFollowed = null, // Forum Is Followed
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            forumId: $data['forum_id'] ?? null,
            forumTitle: $data['forum_title'] ?? null,
            forumDescription: $data['forum_description'] ?? null,
            forumThreadCount: $data['forum_thread_count'] ?? null,
            forumPostCount: $data['forum_post_count'] ?? null,
            forumPrefixes: isset($data['forum_prefixes']) && is_array($data['forum_prefixes']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadForumForumPrefixesItem::fromArray($item), $data['forum_prefixes']) : null,
            threadDefaultPrefixId: $data['thread_default_prefix_id'] ?? null,
            threadPrefixIsRequired: $data['thread_prefix_is_required'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadForumLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadForumPermissions::fromArray($data['permissions']) : null,
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
