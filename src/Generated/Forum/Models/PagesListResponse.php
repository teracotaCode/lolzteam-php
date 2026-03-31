<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\PagesListResponsePagesItem[]|null $pages Pages
 */
class PagesListResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $pages = null, // Pages
        public readonly int|null $pagesTotal = null, // Pages
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            pages: isset($data['pages']) && is_array($data['pages']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\PagesListResponsePagesItem::fromArray($item), $data['pages']) : null,
            pagesTotal: $data['pages_total'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'pages' => $this->pages !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->pages) : null,
            'pages_total' => $this->pagesTotal,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
