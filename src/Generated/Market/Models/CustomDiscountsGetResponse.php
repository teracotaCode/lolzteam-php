<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\CustomDiscountsGetResponseDiscountsItem[]|null $discounts 
 */
class CustomDiscountsGetResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $discounts = null,
        public readonly int|null $total = null, // Total
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            discounts: isset($data['discounts']) && is_array($data['discounts']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CustomDiscountsGetResponseDiscountsItem::fromArray($item), $data['discounts']) : null,
            total: $data['total'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'discounts' => $this->discounts !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->discounts) : null,
            'total' => $this->total,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
