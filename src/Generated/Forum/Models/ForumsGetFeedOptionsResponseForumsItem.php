<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ForumsGetFeedOptionsResponseForumsItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $forumId = null, // Forum
        public readonly string|null $forumTitle = null, // Forum
        public readonly string|null $forumDescription = null, // Forum
        public readonly int|null $parentNodeId = null, // Parent
        public readonly \Lolzteam\Generated\Forum\Models\ForumsGetFeedOptionsResponseForumsItemLinks|null $links = null, // Links
        public readonly \Lolzteam\Generated\Forum\Models\ForumsGetFeedOptionsResponseForumsItemPermissions|null $permissions = null, // Permissions
        public readonly bool|null $forumIsFollowed = null, // Forum
        public readonly bool|null $hasChildren = null, // Has
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            forumId: $data['forum_id'] ?? null,
            forumTitle: $data['forum_title'] ?? null,
            forumDescription: $data['forum_description'] ?? null,
            parentNodeId: $data['parent_node_id'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\ForumsGetFeedOptionsResponseForumsItemLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\ForumsGetFeedOptionsResponseForumsItemPermissions::fromArray($data['permissions']) : null,
            forumIsFollowed: $data['forum_is_followed'] ?? null,
            hasChildren: $data['has_children'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'forum_id' => $this->forumId,
            'forum_title' => $this->forumTitle,
            'forum_description' => $this->forumDescription,
            'parent_node_id' => $this->parentNodeId,
            'links' => $this->links?->toArray(),
            'permissions' => $this->permissions?->toArray(),
            'forum_is_followed' => $this->forumIsFollowed,
            'has_children' => $this->hasChildren,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
