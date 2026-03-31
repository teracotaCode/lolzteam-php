<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PaymentsFeeResponse implements JsonSerializable
{
    public function __construct(
        public readonly int|null $commissionPercentage = null, // Commission
        public readonly int|null $spentCurrentMonth = null, // Spent Current Month
        public readonly \Lolzteam\Generated\Market\Models\PaymentsFeeResponseCalculator|null $calculator = null, // Calculator
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            commissionPercentage: $data['commission_percentage'] ?? null,
            spentCurrentMonth: $data['spentCurrentMonth'] ?? null,
            calculator: isset($data['calculator']) && is_array($data['calculator']) && !empty($data['calculator']) ? \Lolzteam\Generated\Market\Models\PaymentsFeeResponseCalculator::fromArray($data['calculator']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'commission_percentage' => $this->commissionPercentage,
            'spentCurrentMonth' => $this->spentCurrentMonth,
            'calculator' => $this->calculator?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
