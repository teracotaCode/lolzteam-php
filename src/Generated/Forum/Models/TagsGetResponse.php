<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\TagsGetResponseTaggedItem[]|null $tagged Tagged
 */
class TagsGetResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Forum\Models\TagsGetResponseTag|null $tag = null, // Tag
        public readonly array|null $tagged = null, // Tagged
        public readonly int|null $taggedTotal = null, // Tagged
        public readonly \Lolzteam\Generated\Forum\Models\TagsGetResponseLinks|null $links = null, // Links
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            tag: isset($data['tag']) && is_array($data['tag']) && !empty($data['tag']) ? \Lolzteam\Generated\Forum\Models\TagsGetResponseTag::fromArray($data['tag']) : null,
            tagged: isset($data['tagged']) && is_array($data['tagged']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\TagsGetResponseTaggedItem::fromArray($item), $data['tagged']) : null,
            taggedTotal: $data['tagged_total'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\TagsGetResponseLinks::fromArray($data['links']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'tag' => $this->tag?->toArray(),
            'tagged' => $this->tagged !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->tagged) : null,
            'tagged_total' => $this->taggedTotal,
            'links' => $this->links?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
