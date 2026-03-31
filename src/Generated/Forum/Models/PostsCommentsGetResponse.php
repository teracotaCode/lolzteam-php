<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\PostsCommentsGetResponseCommentsItem[]|null $comments 
 */
class PostsCommentsGetResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $comments = null,
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            comments: isset($data['comments']) && is_array($data['comments']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\PostsCommentsGetResponseCommentsItem::fromArray($item), $data['comments']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'comments' => $this->comments !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->comments) : null,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
