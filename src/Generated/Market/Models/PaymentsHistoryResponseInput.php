<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PaymentsHistoryResponseInput implements JsonSerializable
{
    public function __construct(
        public readonly int|null $userId = null, // User
        public readonly string|null $type = null, // Type
        public readonly string|null $startDate = null, // Start Date
        public readonly string|null $endDate = null, // End Date
        public readonly int|null $page = null, // Page
        public readonly string|null $periodLabel = null, // Period
        public readonly string|null $receiver = null, // Receiver
        public readonly string|null $sender = null, // Sender
        public readonly string|null $comment = null, // Comment
        public readonly string|null $pmin = null, // Pmin
        public readonly string|null $pmax = null, // Pmax
        public readonly int|null $categoryId = null, // Category
        public readonly string|null $wallet = null, // Wallet
        public readonly bool|null $isHold = null, // Is
        public readonly string|null $currency = null, // Currency
        public readonly int|null $operationIdLt = null, // Operation
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            userId: $data['user_id'] ?? null,
            type: $data['type'] ?? null,
            startDate: $data['startDate'] ?? null,
            endDate: $data['endDate'] ?? null,
            page: $data['page'] ?? null,
            periodLabel: $data['period_label'] ?? null,
            receiver: $data['receiver'] ?? null,
            sender: $data['sender'] ?? null,
            comment: $data['comment'] ?? null,
            pmin: $data['pmin'] ?? null,
            pmax: $data['pmax'] ?? null,
            categoryId: $data['category_id'] ?? null,
            wallet: $data['wallet'] ?? null,
            isHold: $data['is_hold'] ?? null,
            currency: $data['currency'] ?? null,
            operationIdLt: $data['operation_id_lt'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'user_id' => $this->userId,
            'type' => $this->type,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate,
            'page' => $this->page,
            'period_label' => $this->periodLabel,
            'receiver' => $this->receiver,
            'sender' => $this->sender,
            'comment' => $this->comment,
            'pmin' => $this->pmin,
            'pmax' => $this->pmax,
            'category_id' => $this->categoryId,
            'wallet' => $this->wallet,
            'is_hold' => $this->isHold,
            'currency' => $this->currency,
            'operation_id_lt' => $this->operationIdLt,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
