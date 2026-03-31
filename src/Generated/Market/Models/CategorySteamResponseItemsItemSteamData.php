<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategorySteamResponseItemsItemSteamData implements JsonSerializable
{
    public function __construct(
        public readonly array|null $steamBanTypeId = null, // Steam
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            steamBanTypeId: $data['steam_ban_type_id'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'steam_ban_type_id' => $this->steamBanTypeId,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
