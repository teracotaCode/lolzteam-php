<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryParamsResponseParamsItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $name = null, // Name
        public readonly string|null $input = null, // Input
        public readonly string|null $description = null, // Description
        public readonly mixed $values = null, // Values
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            name: $data['name'] ?? null,
            input: $data['input'] ?? null,
            description: $data['description'] ?? null,
            values: $data['values'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'name' => $this->name,
            'input' => $this->input,
            'description' => $this->description,
            'values' => $this->values,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
