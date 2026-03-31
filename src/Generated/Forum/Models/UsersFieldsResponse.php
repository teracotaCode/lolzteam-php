<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\UsersFieldsResponseFieldsItem[]|null $fields Fields
 */
class UsersFieldsResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $fields = null, // Fields
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            fields: isset($data['fields']) && is_array($data['fields']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\UsersFieldsResponseFieldsItem::fromArray($item), $data['fields']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'fields' => $this->fields !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->fields) : null,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
