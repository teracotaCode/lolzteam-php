<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingGetResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\ManagingGetResponseItem|null $item = null, // Item
        public readonly bool|null $canStickItem = null, // Can Stick Item
        public readonly bool|null $canUnstickItem = null, // Can Unstick Item
        public readonly bool|null $canBuyItem = null, // Can Buy Item
        public readonly string|null $cannotBuyItemError = null, // Cannot Buy Item Error
        public readonly bool|null $canCloseItem = null, // Can Close Item
        public readonly bool|null $canOpenItem = null, // Can Open Item
        public readonly bool|null $canReportItem = null, // Can Report Item
        public readonly bool|null $canEditItem = null, // Can Edit Item
        public readonly bool|null $canDeleteItem = null, // Can Delete Item
        public readonly bool|null $canCancelConfirmedBuy = null, // Can Cancel Confirmed Buy
        public readonly bool|null $canViewItemHistory = null, // Can View Item History
        public readonly bool|null $faveCount = null, // Fave Count
        public readonly bool|null $isVisibleItem = null, // Is Visible Item
        public readonly bool|null $canViewLoginData = null, // Can View Login Data
        public readonly bool|null $showToFavouritesButton = null, // Show To Favourites Button
        public readonly string|null $itemLink = null, // Item Link
        public readonly bool|null $canChangeOwner = null, // Can Change Owner
        public readonly array|null $sameItemsIds = null, // Same Items Ids
        public readonly int|null $sameItemsCount = null, // Same Items Count
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            item: isset($data['item']) && is_array($data['item']) && !empty($data['item']) ? \Lolzteam\Generated\Market\Models\ManagingGetResponseItem::fromArray($data['item']) : null,
            canStickItem: $data['canStickItem'] ?? null,
            canUnstickItem: $data['canUnstickItem'] ?? null,
            canBuyItem: $data['canBuyItem'] ?? null,
            cannotBuyItemError: $data['cannotBuyItemError'] ?? null,
            canCloseItem: $data['canCloseItem'] ?? null,
            canOpenItem: $data['canOpenItem'] ?? null,
            canReportItem: $data['canReportItem'] ?? null,
            canEditItem: $data['canEditItem'] ?? null,
            canDeleteItem: $data['canDeleteItem'] ?? null,
            canCancelConfirmedBuy: $data['canCancelConfirmedBuy'] ?? null,
            canViewItemHistory: $data['canViewItemHistory'] ?? null,
            faveCount: $data['faveCount'] ?? null,
            isVisibleItem: $data['isVisibleItem'] ?? null,
            canViewLoginData: $data['canViewLoginData'] ?? null,
            showToFavouritesButton: $data['showToFavouritesButton'] ?? null,
            itemLink: $data['itemLink'] ?? null,
            canChangeOwner: $data['canChangeOwner'] ?? null,
            sameItemsIds: $data['sameItemsIds'] ?? null,
            sameItemsCount: $data['sameItemsCount'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'item' => $this->item?->toArray(),
            'canStickItem' => $this->canStickItem,
            'canUnstickItem' => $this->canUnstickItem,
            'canBuyItem' => $this->canBuyItem,
            'cannotBuyItemError' => $this->cannotBuyItemError,
            'canCloseItem' => $this->canCloseItem,
            'canOpenItem' => $this->canOpenItem,
            'canReportItem' => $this->canReportItem,
            'canEditItem' => $this->canEditItem,
            'canDeleteItem' => $this->canDeleteItem,
            'canCancelConfirmedBuy' => $this->canCancelConfirmedBuy,
            'canViewItemHistory' => $this->canViewItemHistory,
            'faveCount' => $this->faveCount,
            'isVisibleItem' => $this->isVisibleItem,
            'canViewLoginData' => $this->canViewLoginData,
            'showToFavouritesButton' => $this->showToFavouritesButton,
            'itemLink' => $this->itemLink,
            'canChangeOwner' => $this->canChangeOwner,
            'sameItemsIds' => $this->sameItemsIds,
            'sameItemsCount' => $this->sameItemsCount,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
