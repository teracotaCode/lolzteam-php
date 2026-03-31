<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryMihoyoResponseItemsItemHonkaiCharactersItemRelicsItemPropertiesItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $propertyType = null, // Property
        public readonly string|null $value = null, // Value
        public readonly int|null $times = null, // Times
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            propertyType: $data['property_type'] ?? null,
            value: $data['value'] ?? null,
            times: $data['times'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'property_type' => $this->propertyType,
            'value' => $this->value,
            'times' => $this->times,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
