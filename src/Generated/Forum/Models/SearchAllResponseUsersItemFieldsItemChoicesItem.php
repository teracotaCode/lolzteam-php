<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class SearchAllResponseUsersItemFieldsItemChoicesItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $key = null, // Key
        public readonly string|null $value = null, // Value
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            key: $data['key'] ?? null,
            value: $data['value'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'key' => $this->key,
            'value' => $this->value,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
