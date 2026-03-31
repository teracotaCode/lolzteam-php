<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ForumsListResponseForumsItem[]|null $forums Forums
 * @property-read \Lolzteam\Generated\Forum\Models\ForumsListResponseTabsItem[]|null $tabs Tabs
 */
class ForumsListResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $forums = null, // Forums
        public readonly int|null $forumsTotal = null, // Forums
        public readonly array|null $tabs = null, // Tabs
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            forums: isset($data['forums']) && is_array($data['forums']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ForumsListResponseForumsItem::fromArray($item), $data['forums']) : null,
            forumsTotal: $data['forums_total'] ?? null,
            tabs: isset($data['tabs']) && is_array($data['tabs']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ForumsListResponseTabsItem::fromArray($item), $data['tabs']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'forums' => $this->forums !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->forums) : null,
            'forums_total' => $this->forumsTotal,
            'tabs' => $this->tabs !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->tabs) : null,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
