<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class FormsListResponseFormsItemFieldsItemFieldChoices implements JsonSerializable
{
    public function __construct(
        public readonly string|null $buy = null, // Buy
        public readonly string|null $sell = null, // Sell
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            buy: $data['buy'] ?? null,
            sell: $data['sell'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'buy' => $this->buy,
            'sell' => $this->sell,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
