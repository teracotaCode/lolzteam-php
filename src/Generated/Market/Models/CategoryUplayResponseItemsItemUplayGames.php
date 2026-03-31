<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryUplayResponseItemsItemUplayGames implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\CategoryUplayResponseItemsItemUplayGamesFfffffffFfffFfffFfffFfffffffffff|null $ffffffffFfffFfffFfffFfffffffffff = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            ffffffffFfffFfffFfffFfffffffffff: isset($data['ffffffff-ffff-ffff-ffff-ffffffffffff']) && is_array($data['ffffffff-ffff-ffff-ffff-ffffffffffff']) && !empty($data['ffffffff-ffff-ffff-ffff-ffffffffffff']) ? \Lolzteam\Generated\Market\Models\CategoryUplayResponseItemsItemUplayGamesFfffffffFfffFfffFfffFfffffffffff::fromArray($data['ffffffff-ffff-ffff-ffff-ffffffffffff']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'ffffffff-ffff-ffff-ffff-ffffffffffff' => $this->ffffffffFfffFfffFfffFfffffffffff?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
