<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersTrophiesResponseTrophiesItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $trophyId = null, // Trophy
        public readonly string|null $title = null, // Title
        public readonly string|null $description = null, // Description
        public readonly string|null $trophyUrl = null, // Trophy
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            trophyId: $data['trophy_id'] ?? null,
            title: $data['title'] ?? null,
            description: $data['description'] ?? null,
            trophyUrl: $data['trophy_url'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'trophy_id' => $this->trophyId,
            'title' => $this->title,
            'description' => $this->description,
            'trophy_url' => $this->trophyUrl,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
