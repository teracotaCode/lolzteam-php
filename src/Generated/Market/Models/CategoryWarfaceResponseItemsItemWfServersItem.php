<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryWarfaceResponseItemsItemWfServersItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $id = null, // Id
        public readonly int|null $rank = null, // Rank
        public readonly string|null $title = null, // Title
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            id: $data['id'] ?? null,
            rank: $data['rank'] ?? null,
            title: $data['title'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'id' => $this->id,
            'rank' => $this->rank,
            'title' => $this->title,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
