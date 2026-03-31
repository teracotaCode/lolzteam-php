<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersClaimsResponseClaimsItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $threadId = null, // Thread
        public readonly int|null $claimDate = null, // Claim
        public readonly string|null $claimState = null, // Claim
        public readonly string|null $messageBody = null, // Message
        public readonly string|null $messageBodyHtml = null, // Message
        public readonly string|null $messageBodyPlainText = null, // Message
        public readonly int|null $amount = null, // Amount
        public readonly string|null $amountFormatted = null, // Amount
        public readonly \Lolzteam\Generated\Forum\Models\UsersClaimsResponseClaimsItemAuthor|null $author = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            threadId: $data['thread_id'] ?? null,
            claimDate: $data['claim_date'] ?? null,
            claimState: $data['claim_state'] ?? null,
            messageBody: $data['message_body'] ?? null,
            messageBodyHtml: $data['message_body_html'] ?? null,
            messageBodyPlainText: $data['message_body_plain_text'] ?? null,
            amount: $data['amount'] ?? null,
            amountFormatted: $data['amount_formatted'] ?? null,
            author: isset($data['author']) && is_array($data['author']) && !empty($data['author']) ? \Lolzteam\Generated\Forum\Models\UsersClaimsResponseClaimsItemAuthor::fromArray($data['author']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'thread_id' => $this->threadId,
            'claim_date' => $this->claimDate,
            'claim_state' => $this->claimState,
            'message_body' => $this->messageBody,
            'message_body_html' => $this->messageBodyHtml,
            'message_body_plain_text' => $this->messageBodyPlainText,
            'amount' => $this->amount,
            'amount_formatted' => $this->amountFormatted,
            'author' => $this->author?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
