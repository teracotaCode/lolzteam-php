<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\LinksListResponseLinkForumsItem[]|null $linkForums Link
 */
class LinksListResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $linkForums = null, // Link
        public readonly int|null $linkForumsTotal = null, // Link
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            linkForums: isset($data['link-forums']) && is_array($data['link-forums']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\LinksListResponseLinkForumsItem::fromArray($item), $data['link-forums']) : null,
            linkForumsTotal: $data['link-forums_total'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'link-forums' => $this->linkForums !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->linkForums) : null,
            'link-forums_total' => $this->linkForumsTotal,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
