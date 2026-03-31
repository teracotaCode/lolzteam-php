<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingSteamUpdateValueResponse implements JsonSerializable
{
    public function __construct(
        public readonly string|null $status = null,
        public readonly \Lolzteam\Generated\Market\Models\ManagingSteamUpdateValueResponseItem|null $item = null, // Item
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            status: $data['status'] ?? null,
            item: isset($data['item']) && is_array($data['item']) && !empty($data['item']) ? \Lolzteam\Generated\Market\Models\ManagingSteamUpdateValueResponseItem::fromArray($data['item']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'status' => $this->status,
            'item' => $this->item?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
