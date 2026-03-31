<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\ManagingGetLetters2ResponseLettersItem[]|null $letters Letters
 */
class ManagingGetLetters2Response implements JsonSerializable
{
    public function __construct(
        public readonly string|null $email = null, // Email
        public readonly array|null $letters = null, // Letters
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            email: $data['email'] ?? null,
            letters: isset($data['letters']) && is_array($data['letters']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\ManagingGetLetters2ResponseLettersItem::fromArray($item), $data['letters']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'email' => $this->email,
            'letters' => $this->letters !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->letters) : null,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
