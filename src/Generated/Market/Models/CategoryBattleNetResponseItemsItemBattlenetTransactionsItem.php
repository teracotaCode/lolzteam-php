<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryBattleNetResponseItemsItemBattlenetTransactionsItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $date = null, // Date
        public readonly string|null $productTitle = null, // Product Title
        public readonly string|null $formattedTotal = null, // Formatted Total
        public readonly string|null $total = null, // Total
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            date: $data['date'] ?? null,
            productTitle: $data['productTitle'] ?? null,
            formattedTotal: $data['formattedTotal'] ?? null,
            total: $data['total'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'date' => $this->date,
            'productTitle' => $this->productTitle,
            'formattedTotal' => $this->formattedTotal,
            'total' => $this->total,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
