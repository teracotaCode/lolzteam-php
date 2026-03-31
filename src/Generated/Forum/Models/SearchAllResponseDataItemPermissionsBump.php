<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class SearchAllResponseDataItemPermissionsBump implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $can = null, // Can
        public readonly int|null $availableCount = null, // Available
        public readonly mixed $error = null, // Error
        public readonly mixed $nextAvailableTime = null, // Next
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            can: $data['can'] ?? null,
            availableCount: $data['available_count'] ?? null,
            error: $data['error'] ?? null,
            nextAvailableTime: $data['next_available_time'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'can' => $this->can,
            'available_count' => $this->availableCount,
            'error' => $this->error,
            'next_available_time' => $this->nextAvailableTime,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
