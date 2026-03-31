<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingCheckGuaranteeResponse implements JsonSerializable
{
    public function __construct(
        public readonly string|null $message = null, // Message
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            message: $data['message'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'message' => $this->message,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
