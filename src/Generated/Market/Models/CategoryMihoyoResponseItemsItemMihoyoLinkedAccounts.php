<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryMihoyoResponseItemsItemMihoyoLinkedAccounts implements JsonSerializable
{
    public function __construct(
        public readonly array|null $links = null, // Links
        public readonly bool|null $legacy = null, // Legacy
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            links: $data['links'] ?? null,
            legacy: $data['legacy'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'links' => $this->links,
            'legacy' => $this->legacy,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
