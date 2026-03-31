<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ThreadsNavigationResponseElementsItemLinks implements JsonSerializable
{
    public function __construct(
        public readonly string|null $permalink = null, // Permalink
        public readonly string|null $detail = null, // Detail
        public readonly string|null $subCategories = null, // Sub
        public readonly string|null $subForums = null, // Sub
        public readonly string|null $subElements = null, // Sub
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            permalink: $data['permalink'] ?? null,
            detail: $data['detail'] ?? null,
            subCategories: $data['sub-categories'] ?? null,
            subForums: $data['sub-forums'] ?? null,
            subElements: $data['sub-elements'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'permalink' => $this->permalink,
            'detail' => $this->detail,
            'sub-categories' => $this->subCategories,
            'sub-forums' => $this->subForums,
            'sub-elements' => $this->subElements,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
