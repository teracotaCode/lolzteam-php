<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class BalanceModel implements JsonSerializable
{
    public function __construct(
        public readonly string|null $balance = null, // Balance
        public readonly int|null $balanceId = null, // Balance
        public readonly mixed $customTitle = null, // Custom
        public readonly string|null $fullTitle = null, // Full Title
        public readonly int|null $merchantId = null, // Merchant
        public readonly string|null $title = null, // Title
        public readonly string|null $type = null, // Type
        public readonly int|null $userId = null, // User
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            balance: $data['balance'] ?? null,
            balanceId: $data['balance_id'] ?? null,
            customTitle: $data['custom_title'] ?? null,
            fullTitle: $data['fullTitle'] ?? null,
            merchantId: $data['merchant_id'] ?? null,
            title: $data['title'] ?? null,
            type: $data['type'] ?? null,
            userId: $data['user_id'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'balance' => $this->balance,
            'balance_id' => $this->balanceId,
            'custom_title' => $this->customTitle,
            'fullTitle' => $this->fullTitle,
            'merchant_id' => $this->merchantId,
            'title' => $this->title,
            'type' => $this->type,
            'user_id' => $this->userId,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
