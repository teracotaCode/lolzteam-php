<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryMihoyoResponseItemsItemZenlessCharactersItemWeaponMainPropertiesItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $propertyName = null, // Property
        public readonly int|null $propertyId = null, // Property
        public readonly string|null $base = null, // Base
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            propertyName: $data['property_name'] ?? null,
            propertyId: $data['property_id'] ?? null,
            base: $data['base'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'property_name' => $this->propertyName,
            'property_id' => $this->propertyId,
            'base' => $this->base,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
