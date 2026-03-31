<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItem[]|null $systems Systems
 */
class PaymentsPayoutServicesResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $systems = null, // Systems
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            systems: isset($data['systems']) && is_array($data['systems']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItem::fromArray($item), $data['systems']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'systems' => $this->systems !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->systems) : null,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
