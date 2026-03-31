<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersSAResetResponse implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $success = null, // Success
        public readonly string|null $waitingTime = null, // Waiting
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            success: $data['success'] ?? null,
            waitingTime: $data['waiting_time'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'success' => $this->success,
            'waiting_time' => $this->waitingTime,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
