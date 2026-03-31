<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersClaimsResponseStatsMarket implements JsonSerializable
{
    public function __construct(
        public readonly int|null $total = null, // Total
        public readonly int|null $solved = null, // Solved
        public readonly int|null $settled = null, // Settled
        public readonly int|null $rejected = null, // Rejected
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            total: $data['total'] ?? null,
            solved: $data['solved'] ?? null,
            settled: $data['settled'] ?? null,
            rejected: $data['rejected'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'total' => $this->total,
            'solved' => $this->solved,
            'settled' => $this->settled,
            'rejected' => $this->rejected,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
