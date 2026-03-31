<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class SearchResultsResponseDataItemForumForumPrefixesItemGroupPrefixesItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $prefixId = null, // Prefix
        public readonly string|null $prefixTitle = null, // Prefix
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            prefixId: $data['prefix_id'] ?? null,
            prefixTitle: $data['prefix_title'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'prefix_id' => $this->prefixId,
            'prefix_title' => $this->prefixTitle,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
