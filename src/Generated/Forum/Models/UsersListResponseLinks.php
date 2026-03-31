<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersListResponseLinks implements JsonSerializable
{
    public function __construct(
        public readonly int|null $pages = null, // Pages
        public readonly int|null $page = null, // Page
        public readonly string|null $next = null, // Next
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            pages: $data['pages'] ?? null,
            page: $data['page'] ?? null,
            next: $data['next'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'pages' => $this->pages,
            'page' => $this->page,
            'next' => $this->next,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
