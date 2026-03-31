<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\FormsListResponseFormsItem[]|null $forms Forms
 */
class FormsListResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $forms = null, // Forms
        public readonly int|null $formsPerPage = null, // Forms Per Page
        public readonly int|null $page = null, // Page
        public readonly int|null $totalForms = null, // Total Forms
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            forms: isset($data['forms']) && is_array($data['forms']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\FormsListResponseFormsItem::fromArray($item), $data['forms']) : null,
            formsPerPage: $data['formsPerPage'] ?? null,
            page: $data['page'] ?? null,
            totalForms: $data['totalForms'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'forms' => $this->forms !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->forms) : null,
            'formsPerPage' => $this->formsPerPage,
            'page' => $this->page,
            'totalForms' => $this->totalForms,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
