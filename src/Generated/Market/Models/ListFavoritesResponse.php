<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ListFavoritesResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $items = null,
        public readonly int|null $totalItems = null, // Total Items
        public readonly mixed $totalItemsPrice = null, // Total Items Price
        public readonly bool|null $hasNextPage = null, // Has Next Page
        public readonly int|null $perPage = null, // Per Page
        public readonly int|null $page = null, // Page
        public readonly string|null $searchUrl = null, // Search Url
        public readonly array|null $stickyItems = null,
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            items: $data['items'] ?? null,
            totalItems: $data['totalItems'] ?? null,
            totalItemsPrice: $data['totalItemsPrice'] ?? null,
            hasNextPage: $data['hasNextPage'] ?? null,
            perPage: $data['perPage'] ?? null,
            page: $data['page'] ?? null,
            searchUrl: $data['searchUrl'] ?? null,
            stickyItems: $data['stickyItems'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'items' => $this->items,
            'totalItems' => $this->totalItems,
            'totalItemsPrice' => $this->totalItemsPrice,
            'hasNextPage' => $this->hasNextPage,
            'perPage' => $this->perPage,
            'page' => $this->page,
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
