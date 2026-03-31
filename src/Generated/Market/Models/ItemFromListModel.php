<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ItemFromListModel implements JsonSerializable
{
    public function __construct(
        public readonly int|null $itemId = null,
        public readonly string|null $itemState = null,
        public readonly int|null $categoryId = null,
        public readonly int|null $publishedDate = null,
        public readonly string|null $title = null,
        public readonly string|null $description = null,
        public readonly int|null $price = null,
        public readonly int|null $updateStatDate = null,
        public readonly int|null $refreshedDate = null,
        public readonly int|null $viewCount = null,
        public readonly int|null $isSticky = null,
        public readonly string|null $itemOrigin = null,
        public readonly int|null $extendedGuarantee = null,
        public readonly int|null $nsb = null,
        public readonly int|null $allowAskDiscount = null,
        public readonly string|null $titleEn = null,
        public readonly string|null $descriptionEn = null,
        public readonly string|null $itemDomain = null,
        public readonly string|null $resaleItemOrigin = null,
        public readonly int|null $isIgnored = null,
        public readonly mixed $guarantee = null,
        public readonly bool|null $canViewLoginData = null,
        public readonly bool|null $canUpdateItemStats = null,
        public readonly bool|null $canViewEmailLoginData = null,
        public readonly bool|null $showGetEmailCodeButton = null,
        public readonly bool|null $canOpenItem = null,
        public readonly bool|null $canCloseItem = null,
        public readonly bool|null $canEditItem = null,
        public readonly bool|null $canDeleteItem = null,
        public readonly bool|null $canStickItem = null,
        public readonly bool|null $canUnstickItem = null,
        public readonly \Lolzteam\Generated\Market\Models\ItemFromListModelBumpSettings|null $bumpSettings = null,
        public readonly bool|null $canBumpItem = null,
        public readonly bool|null $canBuyItem = null,
        public readonly int|null $rubPrice = null,
        public readonly string|null $priceCurrency = null,
        public readonly bool|null $canValidateAccount = null,
        public readonly bool|null $canResellItemAfterPurchase = null,
        public readonly bool|null $canViewAccountLink = null,
        public readonly string|null $itemOriginPhrase = null,
        public readonly mixed $tags = null,
        public readonly string|null $noteText = null,
        public readonly string|null $descriptionHtml = null,
        public readonly string|null $descriptionHtmlEn = null,
        public readonly \Lolzteam\Generated\Market\Models\ItemFromListModelSeller|null $seller = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            itemId: $data['item_id'] ?? null,
            itemState: $data['item_state'] ?? null,
            categoryId: $data['category_id'] ?? null,
            publishedDate: $data['published_date'] ?? null,
            title: $data['title'] ?? null,
            description: $data['description'] ?? null,
            price: $data['price'] ?? null,
            updateStatDate: $data['update_stat_date'] ?? null,
            refreshedDate: $data['refreshed_date'] ?? null,
            viewCount: $data['view_count'] ?? null,
            isSticky: $data['is_sticky'] ?? null,
            itemOrigin: $data['item_origin'] ?? null,
            extendedGuarantee: $data['extended_guarantee'] ?? null,
            nsb: $data['nsb'] ?? null,
            allowAskDiscount: $data['allow_ask_discount'] ?? null,
            titleEn: $data['title_en'] ?? null,
            descriptionEn: $data['description_en'] ?? null,
            itemDomain: $data['item_domain'] ?? null,
            resaleItemOrigin: $data['resale_item_origin'] ?? null,
            isIgnored: $data['isIgnored'] ?? null,
            guarantee: $data['guarantee'] ?? null,
            canViewLoginData: $data['canViewLoginData'] ?? null,
            canUpdateItemStats: $data['canUpdateItemStats'] ?? null,
            canViewEmailLoginData: $data['canViewEmailLoginData'] ?? null,
            showGetEmailCodeButton: $data['showGetEmailCodeButton'] ?? null,
            canOpenItem: $data['canOpenItem'] ?? null,
            canCloseItem: $data['canCloseItem'] ?? null,
            canEditItem: $data['canEditItem'] ?? null,
            canDeleteItem: $data['canDeleteItem'] ?? null,
            canStickItem: $data['canStickItem'] ?? null,
            canUnstickItem: $data['canUnstickItem'] ?? null,
            bumpSettings: isset($data['bumpSettings']) && is_array($data['bumpSettings']) && !empty($data['bumpSettings']) ? \Lolzteam\Generated\Market\Models\ItemFromListModelBumpSettings::fromArray($data['bumpSettings']) : null,
            canBumpItem: $data['canBumpItem'] ?? null,
            canBuyItem: $data['canBuyItem'] ?? null,
            rubPrice: $data['rub_price'] ?? null,
            priceCurrency: $data['price_currency'] ?? null,
            canValidateAccount: $data['canValidateAccount'] ?? null,
            canResellItemAfterPurchase: $data['canResellItemAfterPurchase'] ?? null,
            canViewAccountLink: $data['canViewAccountLink'] ?? null,
            itemOriginPhrase: $data['itemOriginPhrase'] ?? null,
            tags: $data['tags'] ?? null,
            noteText: $data['note_text'] ?? null,
            descriptionHtml: $data['description_html'] ?? null,
            descriptionHtmlEn: $data['description_html_en'] ?? null,
            seller: isset($data['seller']) && is_array($data['seller']) && !empty($data['seller']) ? \Lolzteam\Generated\Market\Models\ItemFromListModelSeller::fromArray($data['seller']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'item_id' => $this->itemId,
            'item_state' => $this->itemState,
            'category_id' => $this->categoryId,
            'published_date' => $this->publishedDate,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'update_stat_date' => $this->updateStatDate,
            'refreshed_date' => $this->refreshedDate,
            'view_count' => $this->viewCount,
            'is_sticky' => $this->isSticky,
            'item_origin' => $this->itemOrigin,
            'extended_guarantee' => $this->extendedGuarantee,
            'nsb' => $this->nsb,
            'allow_ask_discount' => $this->allowAskDiscount,
            'title_en' => $this->titleEn,
            'description_en' => $this->descriptionEn,
            'item_domain' => $this->itemDomain,
            'resale_item_origin' => $this->resaleItemOrigin,
            'isIgnored' => $this->isIgnored,
            'guarantee' => $this->guarantee,
            'canViewLoginData' => $this->canViewLoginData,
            'canUpdateItemStats' => $this->canUpdateItemStats,
            'canViewEmailLoginData' => $this->canViewEmailLoginData,
            'showGetEmailCodeButton' => $this->showGetEmailCodeButton,
            'canOpenItem' => $this->canOpenItem,
            'canCloseItem' => $this->canCloseItem,
            'canEditItem' => $this->canEditItem,
            'canDeleteItem' => $this->canDeleteItem,
            'canStickItem' => $this->canStickItem,
            'canUnstickItem' => $this->canUnstickItem,
            'bumpSettings' => $this->bumpSettings?->toArray(),
            'canBumpItem' => $this->canBumpItem,
            'canBuyItem' => $this->canBuyItem,
            'rub_price' => $this->rubPrice,
            'price_currency' => $this->priceCurrency,
            'canValidateAccount' => $this->canValidateAccount,
            'canResellItemAfterPurchase' => $this->canResellItemAfterPurchase,
            'canViewAccountLink' => $this->canViewAccountLink,
            'itemOriginPhrase' => $this->itemOriginPhrase,
            'tags' => $this->tags,
            'note_text' => $this->noteText,
            'description_html' => $this->descriptionHtml,
            'description_html_en' => $this->descriptionHtmlEn,
            'seller' => $this->seller?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
