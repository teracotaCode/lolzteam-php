<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersSecretAnswerTypesResponseDataItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $saId = null, // Sa
        public readonly string|null $renderedPhrase = null, // Rendered Phrase
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            saId: $data['sa_id'] ?? null,
            renderedPhrase: $data['renderedPhrase'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'sa_id' => $this->saId,
            'renderedPhrase' => $this->renderedPhrase,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
