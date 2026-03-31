<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PaymentsFeeResponseCalculator implements JsonSerializable
{
    public function __construct(
        public readonly int|null $inputAmount = null, // Input Amount
        public readonly int|null $commissionAmount = null, // Commission Amount
        public readonly int|null $totalOutputAmount = null, // Total Output Amount
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            inputAmount: $data['inputAmount'] ?? null,
            commissionAmount: $data['commissionAmount'] ?? null,
            totalOutputAmount: $data['totalOutputAmount'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'inputAmount' => $this->inputAmount,
            'commissionAmount' => $this->commissionAmount,
            'totalOutputAmount' => $this->totalOutputAmount,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
