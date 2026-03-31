<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class FormsListResponseFormsItemFieldsItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $fieldId = null, // Field
        public readonly string|null $title = null, // Title
        public readonly \Lolzteam\Generated\Forum\Models\FormsListResponseFormsItemFieldsItemFieldChoices|null $fieldChoices = null, // Field Choices
        public readonly int|null $required = null, // Required
        public readonly int|null $maxLength = null, // Max
        public readonly string|null $defaultValue = null, // Default
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            fieldId: $data['field_id'] ?? null,
            title: $data['title'] ?? null,
            fieldChoices: isset($data['fieldChoices']) && is_array($data['fieldChoices']) && !empty($data['fieldChoices']) ? \Lolzteam\Generated\Forum\Models\FormsListResponseFormsItemFieldsItemFieldChoices::fromArray($data['fieldChoices']) : null,
            required: $data['required'] ?? null,
            maxLength: $data['max_length'] ?? null,
            defaultValue: $data['default_value'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'field_id' => $this->fieldId,
            'title' => $this->title,
            'fieldChoices' => $this->fieldChoices?->toArray(),
            'required' => $this->required,
            'max_length' => $this->maxLength,
            'default_value' => $this->defaultValue,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
