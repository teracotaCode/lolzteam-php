<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ConfirmationCodeModel implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\ConfirmationCodeModelItem|null $item = null, // Item
        public readonly \Lolzteam\Generated\Market\Models\ConfirmationCodeModelCodeData|null $codeData = null, // CodeData
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            item: isset($data['item']) && is_array($data['item']) && !empty($data['item']) ? \Lolzteam\Generated\Market\Models\ConfirmationCodeModelItem::fromArray($data['item']) : null,
            codeData: isset($data['codeData']) && is_array($data['codeData']) && !empty($data['codeData']) ? \Lolzteam\Generated\Market\Models\ConfirmationCodeModelCodeData::fromArray($data['codeData']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'item' => $this->item?->toArray(),
            'codeData' => $this->codeData?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
