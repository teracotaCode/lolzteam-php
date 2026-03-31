<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PaymentsHistoryResponsePageNavParams implements JsonSerializable
{
    public function __construct(
        public readonly string|null $type = null, // Type
        public readonly string|null $startDate = null, // Start Date
        public readonly string|null $endDate = null, // End Date
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            type: $data['type'] ?? null,
            startDate: $data['startDate'] ?? null,
            endDate: $data['endDate'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'type' => $this->type,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
