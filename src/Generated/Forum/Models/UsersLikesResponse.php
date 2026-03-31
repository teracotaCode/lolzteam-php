<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersLikesResponse implements JsonSerializable
{
    public function __construct(
        public readonly int|null $page = null, // Page
        public readonly int|null $perPage = null, // Per Page
        public readonly string|null $contentType = null, // Content Type
        public readonly int|null $totalLikes = null, // Total Likes
        public readonly mixed $likes = null, // Likes
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            page: $data['page'] ?? null,
            perPage: $data['perPage'] ?? null,
            contentType: $data['contentType'] ?? null,
            totalLikes: $data['totalLikes'] ?? null,
            likes: $data['likes'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'page' => $this->page,
            'perPage' => $this->perPage,
            'contentType' => $this->contentType,
            'totalLikes' => $this->totalLikes,
            'likes' => $this->likes,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
