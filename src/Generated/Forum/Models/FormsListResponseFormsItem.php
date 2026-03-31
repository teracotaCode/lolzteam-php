<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\FormsListResponseFormsItemFieldsItem[]|null $fields Fields
 */
class FormsListResponseFormsItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $formId = null, // Form
        public readonly string|null $title = null, // Title
        public readonly string|null $description = null, // Description
        public readonly array|null $fields = null, // Fields
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            formId: $data['form_id'] ?? null,
            title: $data['title'] ?? null,
            description: $data['description'] ?? null,
            fields: isset($data['fields']) && is_array($data['fields']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\FormsListResponseFormsItemFieldsItem::fromArray($item), $data['fields']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'form_id' => $this->formId,
            'title' => $this->title,
            'description' => $this->description,
            'fields' => $this->fields !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->fields) : null,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
