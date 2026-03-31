<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\CategorySocialClubResponseItemsItem[]|null $items Items
 */
class CategorySocialClubResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $items = null, // Items
        public readonly int|null $totalItems = null, // Total Items
        public readonly mixed $totalItemsPrice = null, // Total Items Price
        public readonly bool|null $hasNextPage = null, // Has Next Page
        public readonly int|null $perPage = null, // Per Page
        public readonly int|null $page = null, // Page
        public readonly bool|null $wasCached = null, // Was Cached
        public readonly int|null $cacheTTL = null, // Cache Ttl
        public readonly int|null $lastModified = null, // Last Modified
        public readonly int|null $serverTime = null, // Server Time
        public readonly string|null $searchUrl = null, // Search Url
        public readonly array|null $stickyItems = null, // Sticky Items
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            items: isset($data['items']) && is_array($data['items']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategorySocialClubResponseItemsItem::fromArray($item), $data['items']) : null,
            totalItems: $data['totalItems'] ?? null,
            totalItemsPrice: $data['totalItemsPrice'] ?? null,
            hasNextPage: $data['hasNextPage'] ?? null,
            perPage: $data['perPage'] ?? null,
            page: $data['page'] ?? null,
            wasCached: $data['wasCached'] ?? null,
            cacheTTL: $data['cacheTTL'] ?? null,
            lastModified: $data['lastModified'] ?? null,
            serverTime: $data['serverTime'] ?? null,
            searchUrl: $data['searchUrl'] ?? null,
            stickyItems: $data['stickyItems'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'items' => $this->items !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->items) : null,
            'totalItems' => $this->totalItems,
            'totalItemsPrice' => $this->totalItemsPrice,
            'hasNextPage' => $this->hasNextPage,
            'perPage' => $this->perPage,
            'page' => $this->page,
            'wasCached' => $this->wasCached,
            'cacheTTL' => $this->cacheTTL,
            'lastModified' => $this->lastModified,
            'serverTime' => $this->serverTime,
            'searchUrl' => $this->searchUrl,
            'stickyItems' => $this->stickyItems,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
