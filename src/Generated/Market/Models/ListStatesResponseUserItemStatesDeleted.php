<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ListStatesResponseUserItemStatesDeleted implements JsonSerializable
{
    public function __construct(
        public readonly int|null $itemCount = null, // Item
        public readonly string|null $itemState = null, // Item
        public readonly string|null $title = null, // Title
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            itemCount: $data['item_count'] ?? null,
            itemState: $data['item_state'] ?? null,
            title: $data['title'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'item_count' => $this->itemCount,
            'item_state' => $this->itemState,
            'title' => $this->title,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
