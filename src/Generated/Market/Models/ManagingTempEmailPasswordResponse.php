<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingTempEmailPasswordResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\ManagingTempEmailPasswordResponseItem|null $item = null, // TempEmailPasswordItem
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            item: isset($data['item']) && is_array($data['item']) && !empty($data['item']) ? \Lolzteam\Generated\Market\Models\ManagingTempEmailPasswordResponseItem::fromArray($data['item']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'item' => $this->item?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
