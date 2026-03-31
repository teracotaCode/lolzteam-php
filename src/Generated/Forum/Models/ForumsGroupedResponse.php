<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ForumsGroupedResponseTabsItem[]|null $tabs Tabs
 */
class ForumsGroupedResponse implements JsonSerializable
{
    public function __construct(
        public readonly mixed $data = null, // Data
        public readonly array|null $tabs = null, // Tabs
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            data: $data['data'] ?? null,
            tabs: isset($data['tabs']) && is_array($data['tabs']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ForumsGroupedResponseTabsItem::fromArray($item), $data['tabs']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'data' => $this->data,
            'tabs' => $this->tabs !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->tabs) : null,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
