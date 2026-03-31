<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryRobloxResponseItemsItemRobloxGameDonationsDetailsItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $product = null, // Product
        public readonly int|null $amount = null, // Amount
        public readonly string|null $type = null, // Type
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            product: $data['product'] ?? null,
            amount: $data['amount'] ?? null,
            type: $data['type'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'product' => $this->product,
            'amount' => $this->amount,
            'type' => $this->type,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
