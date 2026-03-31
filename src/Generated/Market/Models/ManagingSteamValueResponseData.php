<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingSteamValueResponseData implements JsonSerializable
{
    public function __construct(
        public readonly mixed $items = null, // Items
        public readonly string|null $steamId = null, // Steam
        public readonly int|null $appId = null, // App id
        public readonly string|null $appTitle = null, // App title
        public readonly float|null $totalValue = null, // Total value
        public readonly int|null $itemCount = null, // Item count
        public readonly int|null $marketableItemCount = null, // Marketable item count
        public readonly string|null $currency = null, // Currency
        public readonly string|null $currencyIcon = null, // Currency icon
        public readonly string|null $language = null, // Language
        public readonly int|null $time = null, // Time
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            items: $data['items'] ?? null,
            steamId: $data['steam_id'] ?? null,
            appId: $data['appId'] ?? null,
            appTitle: $data['appTitle'] ?? null,
            totalValue: $data['totalValue'] ?? null,
            itemCount: $data['itemCount'] ?? null,
            marketableItemCount: $data['marketableItemCount'] ?? null,
            currency: $data['currency'] ?? null,
            currencyIcon: $data['currencyIcon'] ?? null,
            language: $data['language'] ?? null,
            time: $data['time'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'items' => $this->items,
            'steam_id' => $this->steamId,
            'appId' => $this->appId,
            'appTitle' => $this->appTitle,
            'totalValue' => $this->totalValue,
            'itemCount' => $this->itemCount,
            'marketableItemCount' => $this->marketableItemCount,
            'currency' => $this->currency,
            'currencyIcon' => $this->currencyIcon,
            'language' => $this->language,
            'time' => $this->time,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
