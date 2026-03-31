<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingTelegramCodeResponseCodes implements JsonSerializable
{
    public function __construct(
        public readonly string|null $code = null, // Code
        public readonly int|null $date = null, // Date
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            code: $data['code'] ?? null,
            date: $data['date'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'code' => $this->code,
            'date' => $this->date,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
