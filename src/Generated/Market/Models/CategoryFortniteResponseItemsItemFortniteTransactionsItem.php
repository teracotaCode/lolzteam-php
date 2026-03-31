<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryFortniteResponseItemsItemFortniteTransactionsItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $date = null, // Date
        public readonly string|null $title = null, // Title
        public readonly string|null $presentmentTotal = null, // Presentment Total
        public readonly string|null $orderType = null, // Order Type
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            date: $data['date'] ?? null,
            title: $data['title'] ?? null,
            presentmentTotal: $data['presentmentTotal'] ?? null,
            orderType: $data['orderType'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'date' => $this->date,
            'title' => $this->title,
            'presentmentTotal' => $this->presentmentTotal,
            'orderType' => $this->orderType,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
