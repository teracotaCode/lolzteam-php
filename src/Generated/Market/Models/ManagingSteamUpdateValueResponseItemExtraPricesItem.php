<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingSteamUpdateValueResponseItemExtraPricesItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $currency = null, // Currency
        public readonly string|null $price = null, // Price
        public readonly float|null $priceValue = null, // Price Value
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            currency: $data['currency'] ?? null,
            price: $data['price'] ?? null,
            priceValue: $data['priceValue'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'currency' => $this->currency,
            'price' => $this->price,
            'priceValue' => $this->priceValue,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
