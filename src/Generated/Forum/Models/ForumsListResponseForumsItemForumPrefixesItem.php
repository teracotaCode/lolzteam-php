<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ForumsListResponseForumsItemForumPrefixesItemGroupPrefixesItem[]|null $groupPrefixes Group
 */
class ForumsListResponseForumsItemForumPrefixesItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $groupTitle = null, // Group
        public readonly array|null $groupPrefixes = null, // Group
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            groupTitle: $data['group_title'] ?? null,
            groupPrefixes: isset($data['group_prefixes']) && is_array($data['group_prefixes']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ForumsListResponseForumsItemForumPrefixesItemGroupPrefixesItem::fromArray($item), $data['group_prefixes']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'group_title' => $this->groupTitle,
            'group_prefixes' => $this->groupPrefixes !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->groupPrefixes) : null,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
