<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\PostsListResponsePostsItem[]|null $posts Posts
 */
class PostsListResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $posts = null, // Posts
        public readonly \Lolzteam\Generated\Forum\Models\PostsListResponseThread|null $thread = null,
        public readonly int|null $postsTotal = null, // Posts
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            posts: isset($data['posts']) && is_array($data['posts']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\PostsListResponsePostsItem::fromArray($item), $data['posts']) : null,
            thread: isset($data['thread']) && is_array($data['thread']) && !empty($data['thread']) ? \Lolzteam\Generated\Forum\Models\PostsListResponseThread::fromArray($data['thread']) : null,
            postsTotal: $data['posts_total'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'posts' => $this->posts !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->posts) : null,
            'thread' => $this->thread?->toArray(),
            'posts_total' => $this->postsTotal,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
