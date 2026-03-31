<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ListStatesResponseUserItemStatesPreActive implements JsonSerializable
{
    public function __construct(
        public readonly string|null $itemState = null, // Item
        public readonly int|null $itemCount = null, // Item
        public readonly string|null $title = null, // Title
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            itemState: $data['item_state'] ?? null,
            itemCount: $data['item_count'] ?? null,
            title: $data['title'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'item_state' => $this->itemState,
            'item_count' => $this->itemCount,
            'title' => $this->title,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
