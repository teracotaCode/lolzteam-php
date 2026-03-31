<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class SearchAllResponseDataItemForumLinks implements JsonSerializable
{
    public function __construct(
        public readonly string|null $permalink = null, // Permalink
        public readonly string|null $detail = null, // Detail
        public readonly string|null $subCategories = null, // Sub
        public readonly string|null $subForums = null, // Sub
        public readonly string|null $threads = null, // Threads
        public readonly string|null $followers = null, // Followers
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            permalink: $data['permalink'] ?? null,
            detail: $data['detail'] ?? null,
            subCategories: $data['sub-categories'] ?? null,
            subForums: $data['sub-forums'] ?? null,
            threads: $data['threads'] ?? null,
            followers: $data['followers'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'permalink' => $this->permalink,
            'detail' => $this->detail,
            'sub-categories' => $this->subCategories,
            'sub-forums' => $this->subForums,
            'threads' => $this->threads,
            'followers' => $this->followers,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
