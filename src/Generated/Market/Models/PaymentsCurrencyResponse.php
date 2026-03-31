<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PaymentsCurrencyResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyList|null $currencyList = null, // Currency List
        public readonly int|null $lastUpdate = null, // Last Update
        public readonly string|null $visitorCurrency = null, // Visitor Currency
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            currencyList: isset($data['currencyList']) && is_array($data['currencyList']) && !empty($data['currencyList']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyList::fromArray($data['currencyList']) : null,
            lastUpdate: $data['lastUpdate'] ?? null,
            visitorCurrency: $data['visitorCurrency'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'currencyList' => $this->currencyList?->toArray(),
            'lastUpdate' => $this->lastUpdate,
            'visitorCurrency' => $this->visitorCurrency,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
