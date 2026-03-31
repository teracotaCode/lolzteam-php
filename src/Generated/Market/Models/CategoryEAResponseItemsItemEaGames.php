<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryEAResponseItemsItemEaGames implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\CategoryEAResponseItemsItemEaGamesApexLegends|null $apexLegends = null, // Apex
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            apexLegends: isset($data['apex-legends']) && is_array($data['apex-legends']) && !empty($data['apex-legends']) ? \Lolzteam\Generated\Market\Models\CategoryEAResponseItemsItemEaGamesApexLegends::fromArray($data['apex-legends']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'apex-legends' => $this->apexLegends?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
