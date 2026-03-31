<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryFortniteResponseItemsItemBumpSettings implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $canBumpItem = null, // Can Bump Item
        public readonly bool|null $canBumpItemGlobally = null, // Can Bump Item Globally
        public readonly mixed $shortErrorPhrase = null, // Short Error Phrase
        public readonly mixed $errorPhrase = null, // Error Phrase
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            canBumpItem: $data['canBumpItem'] ?? null,
            canBumpItemGlobally: $data['canBumpItemGlobally'] ?? null,
            shortErrorPhrase: $data['shortErrorPhrase'] ?? null,
            errorPhrase: $data['errorPhrase'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'canBumpItem' => $this->canBumpItem,
            'canBumpItemGlobally' => $this->canBumpItemGlobally,
            'shortErrorPhrase' => $this->shortErrorPhrase,
            'errorPhrase' => $this->errorPhrase,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
