<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\UsersGetResponseUserFieldsItemChoicesItem[]|null $choices Choices
 */
class UsersGetResponseUserFieldsItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $id = null, // Id
        public readonly string|null $title = null, // Title
        public readonly string|null $description = null, // Description
        public readonly string|null $position = null, // Position
        public readonly bool|null $isRequired = null, // Is
        public readonly string|null $value = null, // Value
        public readonly bool|null $isMultiChoice = null, // Is
        public readonly array|null $choices = null, // Choices
        public readonly mixed $values = null, // Values
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            id: $data['id'] ?? null,
            title: $data['title'] ?? null,
            description: $data['description'] ?? null,
            position: $data['position'] ?? null,
            isRequired: $data['is_required'] ?? null,
            value: $data['value'] ?? null,
            isMultiChoice: $data['is_multi_choice'] ?? null,
            choices: isset($data['choices']) && is_array($data['choices']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\UsersGetResponseUserFieldsItemChoicesItem::fromArray($item), $data['choices']) : null,
            values: $data['values'] ?? null,
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
            'value' => $this->value,
            'is_multi_choice' => $this->isMultiChoice,
            'choices' => $this->choices !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->choices) : null,
            'values' => $this->values,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
