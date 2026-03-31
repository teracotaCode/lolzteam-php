<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UserModelDob implements JsonSerializable
{
    public function __construct(
        public readonly int|null $year = null, // Year
        public readonly int|null $month = null, // Month
        public readonly int|null $day = null, // Day
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            year: $data['year'] ?? null,
            month: $data['month'] ?? null,
            day: $data['day'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'year' => $this->year,
            'month' => $this->month,
            'day' => $this->day,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
