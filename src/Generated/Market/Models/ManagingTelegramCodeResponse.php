<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingTelegramCodeResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItem|null $item = null, // Item
        public readonly \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseCodes|null $codes = null, // TgCodeData
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            item: isset($data['item']) && is_array($data['item']) && !empty($data['item']) ? \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItem::fromArray($data['item']) : null,
            codes: isset($data['codes']) && is_array($data['codes']) && !empty($data['codes']) ? \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseCodes::fromArray($data['codes']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'item' => $this->item?->toArray(),
            'codes' => $this->codes?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
