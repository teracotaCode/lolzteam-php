<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategorySteamResponseItemsItemSteamTransactionsItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $date = null, // Date
        public readonly string|null $product = null, // Product
        public readonly string|null $type = null, // Type
        public readonly string|null $source = null, // Source
        public readonly string|null $amount = null, // Amount
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            date: $data['date'] ?? null,
            product: $data['product'] ?? null,
            type: $data['type'] ?? null,
            source: $data['source'] ?? null,
            amount: $data['amount'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'date' => $this->date,
            'product' => $this->product,
            'type' => $this->type,
            'source' => $this->source,
            'amount' => $this->amount,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
