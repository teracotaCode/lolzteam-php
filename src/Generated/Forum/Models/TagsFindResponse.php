<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class TagsFindResponse implements JsonSerializable
{
    public function __construct(
        public readonly mixed $tags = null, // Tags
        public readonly array|null $ids = null, // Ids
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            tags: $data['tags'] ?? null,
            ids: $data['ids'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'tags' => $this->tags,
            'ids' => $this->ids,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
