<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingBulkGetResponse implements JsonSerializable
{
    public function __construct(
        public readonly mixed $items = null, // Items
        public readonly array|null $leftItemId = null, // Left
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            items: $data['items'] ?? null,
            leftItemId: $data['left_item_id'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'items' => $this->items,
            'left_item_id' => $this->leftItemId,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
