<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ForumsGetFeedOptionsResponseForumsItem[]|null $forums Forums
 */
class ForumsGetFeedOptionsResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $forums = null, // Forums
        public readonly array|null $excludedForumsIds = null, // Excluded
        public readonly array|null $defaultExcludedForumsIds = null, // Default
        public readonly string|null $keywords = null, // Keywords
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            forums: isset($data['forums']) && is_array($data['forums']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ForumsGetFeedOptionsResponseForumsItem::fromArray($item), $data['forums']) : null,
            excludedForumsIds: $data['excluded_forums_ids'] ?? null,
            defaultExcludedForumsIds: $data['default_excluded_forums_ids'] ?? null,
            keywords: $data['keywords'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'forums' => $this->forums !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->forums) : null,
            'excluded_forums_ids' => $this->excludedForumsIds,
            'default_excluded_forums_ids' => $this->defaultExcludedForumsIds,
            'keywords' => $this->keywords,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
