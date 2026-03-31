<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingSteamMafileCodeResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\ManagingSteamMafileCodeResponseItem|null $item = null, // Item
        public readonly \Lolzteam\Generated\Market\Models\ManagingSteamMafileCodeResponseCodeData|null $codeData = null, // CodeData
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            item: isset($data['item']) && is_array($data['item']) && !empty($data['item']) ? \Lolzteam\Generated\Market\Models\ManagingSteamMafileCodeResponseItem::fromArray($data['item']) : null,
            codeData: isset($data['codeData']) && is_array($data['codeData']) && !empty($data['codeData']) ? \Lolzteam\Generated\Market\Models\ManagingSteamMafileCodeResponseCodeData::fromArray($data['codeData']) : null,
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
