<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsListResponseCommentsItem[]|null $comments Comments
 */
class ProfilePostsCommentsListResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $comments = null, // Comments
        public readonly int|null $commentsTotal = null, // Comments
        public readonly \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsListResponseProfilePost|null $profilePost = null, // Profile
        public readonly \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsListResponseTimelineUser|null $timelineUser = null,
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            comments: isset($data['comments']) && is_array($data['comments']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsListResponseCommentsItem::fromArray($item), $data['comments']) : null,
            commentsTotal: $data['comments_total'] ?? null,
            profilePost: isset($data['profile_post']) && is_array($data['profile_post']) && !empty($data['profile_post']) ? \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsListResponseProfilePost::fromArray($data['profile_post']) : null,
            timelineUser: isset($data['timeline_user']) && is_array($data['timeline_user']) && !empty($data['timeline_user']) ? \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsListResponseTimelineUser::fromArray($data['timeline_user']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'comments' => $this->comments !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->comments) : null,
            'comments_total' => $this->commentsTotal,
            'profile_post' => $this->profilePost?->toArray(),
            'timeline_user' => $this->timelineUser?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
