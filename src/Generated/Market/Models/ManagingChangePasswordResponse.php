<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingChangePasswordResponse implements JsonSerializable
{
    public function __construct(
        public readonly string|null $status = null, // Status
        public readonly string|null $message = null, // Message
        public readonly string|null $newPassword = null, // New Password
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            status: $data['status'] ?? null,
            message: $data['message'] ?? null,
            newPassword: $data['new_password'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'status' => $this->status,
            'message' => $this->message,
            'new_password' => $this->newPassword,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
