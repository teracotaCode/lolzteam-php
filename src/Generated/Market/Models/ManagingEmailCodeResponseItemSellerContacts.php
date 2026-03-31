<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingEmailCodeResponseItemSellerContacts implements JsonSerializable
{
    public function __construct(
        public readonly string|null $banReason = null, // Ban
        public readonly string|null $telegram = null, // Telegram
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            banReason: $data['ban_reason'] ?? null,
            telegram: $data['telegram'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'ban_reason' => $this->banReason,
            'telegram' => $this->telegram,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
