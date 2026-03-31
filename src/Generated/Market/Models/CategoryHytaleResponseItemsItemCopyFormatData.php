<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryHytaleResponseItemsItemCopyFormatData implements JsonSerializable
{
    public function __construct(
        public readonly string|null $titleLink = null, // Title
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            titleLink: $data['title_link'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'title_link' => $this->titleLink,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
