<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersListResponseUsersItemBirthdayTimeStamp implements JsonSerializable
{
    public function __construct(
        public readonly string|null $date = null, // Date
        public readonly int|null $timezoneType = null, // Timezone
        public readonly string|null $timezone = null, // Timezone
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            date: $data['date'] ?? null,
            timezoneType: $data['timezone_type'] ?? null,
            timezone: $data['timezone'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'date' => $this->date,
            'timezone_type' => $this->timezoneType,
            'timezone' => $this->timezone,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
