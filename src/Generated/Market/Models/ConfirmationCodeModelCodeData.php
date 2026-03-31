<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ConfirmationCodeModelCodeData implements JsonSerializable
{
    public function __construct(
        public readonly string|null $code = null, // Code
        public readonly int|null $date = null, // Date
        public readonly string|null $textPlain = null, // Textplain
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            code: $data['code'] ?? null,
            date: $data['date'] ?? null,
            textPlain: $data['textPlain'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'code' => $this->code,
            'date' => $this->date,
            'textPlain' => $this->textPlain,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
