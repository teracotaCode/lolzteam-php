<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class RespSystemInfo implements JsonSerializable
{
    public function __construct(
        public readonly int|null $visitorId = null,
        public readonly int|null $time = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            visitorId: $data['visitor_id'] ?? null,
            time: $data['time'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'visitor_id' => $this->visitorId,
            'time' => $this->time,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
