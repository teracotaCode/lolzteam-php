<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingGetLetters2ResponseLettersItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $textHtml = null, // Text Html
        public readonly string|null $textPlain = null, // Text Plain
        public readonly string|null $from = null, // From
        public readonly int|null $date = null, // Date
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            textHtml: $data['textHtml'] ?? null,
            textPlain: $data['textPlain'] ?? null,
            from: $data['from'] ?? null,
            date: $data['date'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'textHtml' => $this->textHtml,
            'textPlain' => $this->textPlain,
            'from' => $this->from,
            'date' => $this->date,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
