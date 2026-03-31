<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\PaymentsInvoiceListResponseInvoicesItem[]|null $invoices Invoices
 */
class PaymentsInvoiceListResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $invoices = null, // Invoices
        public readonly int|null $count = null, // Count
        public readonly int|null $page = null, // Page
        public readonly int|null $perPage = null, // Per Page
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            invoices: isset($data['invoices']) && is_array($data['invoices']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\PaymentsInvoiceListResponseInvoicesItem::fromArray($item), $data['invoices']) : null,
            count: $data['count'] ?? null,
            page: $data['page'] ?? null,
            perPage: $data['perPage'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'invoices' => $this->invoices !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->invoices) : null,
            'count' => $this->count,
            'page' => $this->page,
            'perPage' => $this->perPage,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
