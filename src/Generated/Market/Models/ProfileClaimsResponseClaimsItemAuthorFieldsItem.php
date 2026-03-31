<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ProfileClaimsResponseClaimsItemAuthorFieldsItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $id = null, // Id
        public readonly string|null $title = null, // Title
        public readonly string|null $description = null, // Description
        public readonly string|null $position = null, // Position
        public readonly bool|null $isRequired = null, // Is
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            id: $data['id'] ?? null,
            title: $data['title'] ?? null,
            description: $data['description'] ?? null,
            position: $data['position'] ?? null,
            isRequired: $data['is_required'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'position' => $this->position,
            'is_required' => $this->isRequired,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
