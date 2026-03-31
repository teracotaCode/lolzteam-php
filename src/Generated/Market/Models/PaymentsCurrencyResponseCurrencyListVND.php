<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PaymentsCurrencyResponseCurrencyListVND implements JsonSerializable
{
    public function __construct(
        public readonly string|null $title = null, // Title
        public readonly float|null $rate = null, // Rate
        public readonly string|null $formattedRate = null, // Formatted Rate
        public readonly string|null $symbol = null, // Symbol
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            title: $data['title'] ?? null,
            rate: $data['rate'] ?? null,
            formattedRate: $data['formattedRate'] ?? null,
            symbol: $data['symbol'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'title' => $this->title,
            'rate' => $this->rate,
            'formattedRate' => $this->formattedRate,
            'symbol' => $this->symbol,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
