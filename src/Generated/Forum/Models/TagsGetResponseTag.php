<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class TagsGetResponseTag implements JsonSerializable
{
    public function __construct(
        public readonly int|null $tagId = null, // Tag
        public readonly string|null $tagText = null, // Tag
        public readonly int|null $tagUseCount = null, // Tag
        public readonly \Lolzteam\Generated\Forum\Models\TagsGetResponseTagLinks|null $links = null, // Links
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            tagId: $data['tag_id'] ?? null,
            tagText: $data['tag_text'] ?? null,
            tagUseCount: $data['tag_use_count'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\TagsGetResponseTagLinks::fromArray($data['links']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'tag_id' => $this->tagId,
            'tag_text' => $this->tagText,
            'tag_use_count' => $this->tagUseCount,
            'links' => $this->links?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
