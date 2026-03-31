<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PaymentsInvoiceCreateResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\PaymentsInvoiceCreateResponseInvoice|null $invoice = null,
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            invoice: isset($data['invoice']) && is_array($data['invoice']) && !empty($data['invoice']) ? \Lolzteam\Generated\Market\Models\PaymentsInvoiceCreateResponseInvoice::fromArray($data['invoice']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'invoice' => $this->invoice?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
