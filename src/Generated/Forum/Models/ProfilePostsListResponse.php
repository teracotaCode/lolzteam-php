<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ProfilePostsListResponseProfilePostsItem[]|null $profilePosts Profile
 */
class ProfilePostsListResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $profilePosts = null, // Profile
        public readonly int|null $totalProfilePosts = null, // Total profile posts
        public readonly bool|null $canPostOnProfile = null, // Can post on profile
        public readonly \Lolzteam\Generated\Forum\Models\ProfilePostsListResponseLinks|null $links = null, // Links
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            profilePosts: isset($data['profile_posts']) && is_array($data['profile_posts']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ProfilePostsListResponseProfilePostsItem::fromArray($item), $data['profile_posts']) : null,
            totalProfilePosts: $data['totalProfilePosts'] ?? null,
            canPostOnProfile: $data['canPostOnProfile'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\ProfilePostsListResponseLinks::fromArray($data['links']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'profile_posts' => $this->profilePosts !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->profilePosts) : null,
            'totalProfilePosts' => $this->totalProfilePosts,
            'canPostOnProfile' => $this->canPostOnProfile,
            'links' => $this->links?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
