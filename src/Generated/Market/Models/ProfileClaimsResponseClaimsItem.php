<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ProfileClaimsResponseClaimsItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $threadId = null, // Thread
        public readonly int|null $claimDate = null, // Claim
        public readonly string|null $claimState = null, // Claim
        public readonly string|null $messageBody = null, // Message
        public readonly string|null $amountFormatted = null, // Amount
        public readonly \Lolzteam\Generated\Market\Models\ProfileClaimsResponseClaimsItemAuthor|null $author = null, // Author
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            threadId: $data['thread_id'] ?? null,
            claimDate: $data['claim_date'] ?? null,
            claimState: $data['claim_state'] ?? null,
            messageBody: $data['message_body'] ?? null,
            amountFormatted: $data['amount_formatted'] ?? null,
            author: isset($data['author']) && is_array($data['author']) && !empty($data['author']) ? \Lolzteam\Generated\Market\Models\ProfileClaimsResponseClaimsItemAuthor::fromArray($data['author']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'thread_id' => $this->threadId,
            'claim_date' => $this->claimDate,
            'claim_state' => $this->claimState,
            'message_body' => $this->messageBody,
            'amount_formatted' => $this->amountFormatted,
            'author' => $this->author?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
