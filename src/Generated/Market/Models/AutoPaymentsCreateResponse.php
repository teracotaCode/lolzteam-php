<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class AutoPaymentsCreateResponse implements JsonSerializable
{
    public function __construct(
        public readonly string|null $status = null, // Status
        public readonly string|null $message = null, // Message
        public readonly int|null $autoPaymentId = null, // Auto
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            status: $data['status'] ?? null,
            message: $data['message'] ?? null,
            autoPaymentId: $data['auto_payment_id'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'status' => $this->status,
            'message' => $this->message,
            'auto_payment_id' => $this->autoPaymentId,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
