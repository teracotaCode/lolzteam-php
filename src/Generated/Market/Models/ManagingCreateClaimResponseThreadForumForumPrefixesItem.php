<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadForumForumPrefixesItemGroupPrefixesItem[]|null $groupPrefixes Group Prefixes
 */
class ManagingCreateClaimResponseThreadForumForumPrefixesItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $groupTitle = null, // Group Title
        public readonly array|null $groupPrefixes = null, // Group Prefixes
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            groupTitle: $data['group_title'] ?? null,
            groupPrefixes: isset($data['group_prefixes']) && is_array($data['group_prefixes']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadForumForumPrefixesItemGroupPrefixesItem::fromArray($item), $data['group_prefixes']) : null,
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
