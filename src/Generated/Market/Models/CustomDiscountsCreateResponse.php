<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CustomDiscountsCreateResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\CustomDiscountsCreateResponseDiscount|null $discount = null,
        public readonly int|null $total = null, // Total
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            discount: isset($data['discount']) && is_array($data['discount']) && !empty($data['discount']) ? \Lolzteam\Generated\Market\Models\CustomDiscountsCreateResponseDiscount::fromArray($data['discount']) : null,
            total: $data['total'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'discount' => $this->discount?->toArray(),
            'total' => $this->total,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
