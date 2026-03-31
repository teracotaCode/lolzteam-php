<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryWotResponseItemsItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $itemId = null, // Item
        public readonly string|null $itemState = null, // Item
        public readonly int|null $categoryId = null, // Category
        public readonly int|null $publishedDate = null, // Published
        public readonly string|null $title = null, // Title
        public readonly string|null $description = null, // Description
        public readonly int|null $price = null, // Price
        public readonly int|null $updateStatDate = null, // Update
        public readonly int|null $refreshedDate = null, // Refreshed
        public readonly int|null $editDate = null, // Edit
        public readonly int|null $viewCount = null, // View
        public readonly int|null $isSticky = null, // Is
        public readonly string|null $itemOrigin = null, // Item
        public readonly int|null $extendedGuarantee = null, // Extended
        public readonly int|null $nsb = null, // Nsb
        public readonly int|null $allowAskDiscount = null, // Allow
        public readonly string|null $titleEn = null, // Title
        public readonly string|null $descriptionEn = null, // Description
        public readonly string|null $emailType = null, // Email
        public readonly mixed $emailProvider = null, // Email
        public readonly string|null $itemDomain = null, // Item
        public readonly string|null $resaleItemOrigin = null, // Resale
        public readonly int|null $wotItemId = null, // Wot
        public readonly int|null $wotLastActivity = null, // Wot
        public readonly int|null $wotRegisterDate = null, // Wot
        public readonly int|null $wotMobile = null, // Wot
        public readonly int|null $wotPremium = null, // Wot
        public readonly int|null $wotPremiumExpires = null, // Wot
        public readonly int|null $wotGold = null, // Wot
        public readonly int|null $wotCredits = null, // Wot
        public readonly int|null $wotBattleCount = null, // Wot
        public readonly int|null $wotWinCount = null, // Wot
        public readonly int|null $wotLossCount = null, // Wot
        public readonly int|null $wotWinCountPercents = null, // Wot
        public readonly int|null $wotTopTanks = null, // Wot
        public readonly int|null $wotPremiumTanks = null, // Wot
        public readonly int|null $wotTopPremiumTanks = null, // Wot
        public readonly string|null $wotRegion = null, // Wot
        public readonly int|null $wotBlitz = null, // Wot
        public readonly mixed $feedbackData = null, // Feedback
        public readonly bool|null $isIgnored = null, // Is Ignored
        public readonly float|null $priceWithSellerFee = null, // Price With Seller Fee
        public readonly mixed $guarantee = null, // Guarantee
        public readonly bool|null $canViewLoginData = null, // Can View Login Data
        public readonly bool|null $canUpdateItemStats = null, // Can Update Item Stats
        public readonly bool|null $canReportItem = null, // Can Report Item
        public readonly bool|null $canViewEmailLoginData = null, // Can View Email Login Data
        public readonly bool|null $showGetEmailCodeButton = null, // Show Get Email Code Button
        public readonly bool|null $canOpenItem = null, // Can Open Item
        public readonly bool|null $canCloseItem = null, // Can Close Item
        public readonly bool|null $canEditItem = null, // Can Edit Item
        public readonly bool|null $canDeleteItem = null, // Can Delete Item
        public readonly bool|null $canStickItem = null, // Can Stick Item
        public readonly bool|null $canUnstickItem = null, // Can Unstick Item
        public readonly \Lolzteam\Generated\Market\Models\CategoryWotResponseItemsItemBumpSettings|null $bumpSettings = null, // Bump Settings
        public readonly bool|null $canBumpItem = null, // Can Bump Item
        public readonly bool|null $canBuyItem = null, // Can Buy Item
        public readonly int|null $rubPrice = null, // Rub
        public readonly string|null $priceCurrency = null, // Price
        public readonly bool|null $canValidateAccount = null, // Can Validate Account
        public readonly bool|null $canResellItemAfterPurchase = null, // Can Resell Item After Purchase
        public readonly string|null $wotRegionPhrase = null, // Wot Region Phrase
        public readonly bool|null $isSmallExf = null, // Is Small Exf
        public readonly int|null $accountLastActivity = null, // Account
        public readonly mixed $wotTanks = null, // Wot Tanks
        public readonly int|null $wotPremiumTankCount = null, // Wot Premium Tank Count
        public readonly int|null $wotTankCount = null, // Wot Tank Count
        public readonly string|null $wotLauncherTitle = null, // Wot Launcher Title
        public readonly bool|null $wotHasClan = null, // Wot
        public readonly bool|null $canViewAccountLink = null, // Can View Account Link
        public readonly array|null $accountLinks = null, // Account Links
        public readonly bool|null $canChangePassword = null, // Can Change Password
        public readonly string|null $itemOriginPhrase = null, // Item Origin Phrase
        public readonly int|null $soldItemsCategoryCount = null, // Sold
        public readonly int|null $restoreItemsCategoryCount = null, // Restore
        public readonly mixed $tags = null, // Tags
        public readonly mixed $noteText = null, // Note
        public readonly bool|null $hasPendingAutoBuy = null, // Has Pending Auto Buy
        public readonly string|null $descriptionHtml = null, // Description Html
        public readonly string|null $descriptionEnHtml = null, // Description En Html
        public readonly string|null $descriptionPlain = null, // Description Plain
        public readonly string|null $descriptionEnPlain = null, // Description En Plain
        public readonly \Lolzteam\Generated\Market\Models\CategoryWotResponseItemsItemSeller|null $seller = null, // Seller
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
            editDate: $data['edit_date'] ?? null,
            viewCount: $data['view_count'] ?? null,
            isSticky: $data['is_sticky'] ?? null,
            itemOrigin: $data['item_origin'] ?? null,
            extendedGuarantee: $data['extended_guarantee'] ?? null,
            nsb: $data['nsb'] ?? null,
            allowAskDiscount: $data['allow_ask_discount'] ?? null,
            titleEn: $data['title_en'] ?? null,
            descriptionEn: $data['description_en'] ?? null,
            emailType: $data['email_type'] ?? null,
            emailProvider: $data['email_provider'] ?? null,
            itemDomain: $data['item_domain'] ?? null,
            resaleItemOrigin: $data['resale_item_origin'] ?? null,
            wotItemId: $data['wot_item_id'] ?? null,
            wotLastActivity: $data['wot_last_activity'] ?? null,
            wotRegisterDate: $data['wot_register_date'] ?? null,
            wotMobile: $data['wot_mobile'] ?? null,
            wotPremium: $data['wot_premium'] ?? null,
            wotPremiumExpires: $data['wot_premium_expires'] ?? null,
            wotGold: $data['wot_gold'] ?? null,
            wotCredits: $data['wot_credits'] ?? null,
            wotBattleCount: $data['wot_battle_count'] ?? null,
            wotWinCount: $data['wot_win_count'] ?? null,
            wotLossCount: $data['wot_loss_count'] ?? null,
            wotWinCountPercents: $data['wot_win_count_percents'] ?? null,
            wotTopTanks: $data['wot_top_tanks'] ?? null,
            wotPremiumTanks: $data['wot_premium_tanks'] ?? null,
            wotTopPremiumTanks: $data['wot_top_premium_tanks'] ?? null,
            wotRegion: $data['wot_region'] ?? null,
            wotBlitz: $data['wot_blitz'] ?? null,
            feedbackData: $data['feedback_data'] ?? null,
            isIgnored: $data['isIgnored'] ?? null,
            priceWithSellerFee: $data['priceWithSellerFee'] ?? null,
            guarantee: $data['guarantee'] ?? null,
            canViewLoginData: $data['canViewLoginData'] ?? null,
            canUpdateItemStats: $data['canUpdateItemStats'] ?? null,
            canReportItem: $data['canReportItem'] ?? null,
            canViewEmailLoginData: $data['canViewEmailLoginData'] ?? null,
            showGetEmailCodeButton: $data['showGetEmailCodeButton'] ?? null,
            canOpenItem: $data['canOpenItem'] ?? null,
            canCloseItem: $data['canCloseItem'] ?? null,
            canEditItem: $data['canEditItem'] ?? null,
            canDeleteItem: $data['canDeleteItem'] ?? null,
            canStickItem: $data['canStickItem'] ?? null,
            canUnstickItem: $data['canUnstickItem'] ?? null,
            bumpSettings: isset($data['bumpSettings']) && is_array($data['bumpSettings']) && !empty($data['bumpSettings']) ? \Lolzteam\Generated\Market\Models\CategoryWotResponseItemsItemBumpSettings::fromArray($data['bumpSettings']) : null,
            canBumpItem: $data['canBumpItem'] ?? null,
            canBuyItem: $data['canBuyItem'] ?? null,
            rubPrice: $data['rub_price'] ?? null,
            priceCurrency: $data['price_currency'] ?? null,
            canValidateAccount: $data['canValidateAccount'] ?? null,
            canResellItemAfterPurchase: $data['canResellItemAfterPurchase'] ?? null,
            wotRegionPhrase: $data['wotRegionPhrase'] ?? null,
            isSmallExf: $data['isSmallExf'] ?? null,
            accountLastActivity: $data['account_last_activity'] ?? null,
            wotTanks: $data['wotTanks'] ?? null,
            wotPremiumTankCount: $data['wotPremiumTankCount'] ?? null,
            wotTankCount: $data['wotTankCount'] ?? null,
            wotLauncherTitle: $data['wotLauncherTitle'] ?? null,
            wotHasClan: $data['wot_has_clan'] ?? null,
            canViewAccountLink: $data['canViewAccountLink'] ?? null,
            accountLinks: $data['accountLinks'] ?? null,
            canChangePassword: $data['canChangePassword'] ?? null,
            itemOriginPhrase: $data['itemOriginPhrase'] ?? null,
            soldItemsCategoryCount: $data['sold_items_category_count'] ?? null,
            restoreItemsCategoryCount: $data['restore_items_category_count'] ?? null,
            tags: $data['tags'] ?? null,
            noteText: $data['note_text'] ?? null,
            hasPendingAutoBuy: $data['hasPendingAutoBuy'] ?? null,
            descriptionHtml: $data['descriptionHtml'] ?? null,
            descriptionEnHtml: $data['descriptionEnHtml'] ?? null,
            descriptionPlain: $data['descriptionPlain'] ?? null,
            descriptionEnPlain: $data['descriptionEnPlain'] ?? null,
            seller: isset($data['seller']) && is_array($data['seller']) && !empty($data['seller']) ? \Lolzteam\Generated\Market\Models\CategoryWotResponseItemsItemSeller::fromArray($data['seller']) : null,
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
            'edit_date' => $this->editDate,
            'view_count' => $this->viewCount,
            'is_sticky' => $this->isSticky,
            'item_origin' => $this->itemOrigin,
            'extended_guarantee' => $this->extendedGuarantee,
            'nsb' => $this->nsb,
            'allow_ask_discount' => $this->allowAskDiscount,
            'title_en' => $this->titleEn,
            'description_en' => $this->descriptionEn,
            'email_type' => $this->emailType,
            'email_provider' => $this->emailProvider,
            'item_domain' => $this->itemDomain,
            'resale_item_origin' => $this->resaleItemOrigin,
            'wot_item_id' => $this->wotItemId,
            'wot_last_activity' => $this->wotLastActivity,
            'wot_register_date' => $this->wotRegisterDate,
            'wot_mobile' => $this->wotMobile,
            'wot_premium' => $this->wotPremium,
            'wot_premium_expires' => $this->wotPremiumExpires,
            'wot_gold' => $this->wotGold,
            'wot_credits' => $this->wotCredits,
            'wot_battle_count' => $this->wotBattleCount,
            'wot_win_count' => $this->wotWinCount,
            'wot_loss_count' => $this->wotLossCount,
            'wot_win_count_percents' => $this->wotWinCountPercents,
            'wot_top_tanks' => $this->wotTopTanks,
            'wot_premium_tanks' => $this->wotPremiumTanks,
            'wot_top_premium_tanks' => $this->wotTopPremiumTanks,
            'wot_region' => $this->wotRegion,
            'wot_blitz' => $this->wotBlitz,
            'feedback_data' => $this->feedbackData,
            'isIgnored' => $this->isIgnored,
            'priceWithSellerFee' => $this->priceWithSellerFee,
            'guarantee' => $this->guarantee,
            'canViewLoginData' => $this->canViewLoginData,
            'canUpdateItemStats' => $this->canUpdateItemStats,
            'canReportItem' => $this->canReportItem,
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
            'wotRegionPhrase' => $this->wotRegionPhrase,
            'isSmallExf' => $this->isSmallExf,
            'account_last_activity' => $this->accountLastActivity,
            'wotTanks' => $this->wotTanks,
            'wotPremiumTankCount' => $this->wotPremiumTankCount,
            'wotTankCount' => $this->wotTankCount,
            'wotLauncherTitle' => $this->wotLauncherTitle,
            'wot_has_clan' => $this->wotHasClan,
            'canViewAccountLink' => $this->canViewAccountLink,
            'accountLinks' => $this->accountLinks,
            'canChangePassword' => $this->canChangePassword,
            'itemOriginPhrase' => $this->itemOriginPhrase,
            'sold_items_category_count' => $this->soldItemsCategoryCount,
            'restore_items_category_count' => $this->restoreItemsCategoryCount,
            'tags' => $this->tags,
            'note_text' => $this->noteText,
            'hasPendingAutoBuy' => $this->hasPendingAutoBuy,
            'descriptionHtml' => $this->descriptionHtml,
            'descriptionEnHtml' => $this->descriptionEnHtml,
            'descriptionPlain' => $this->descriptionPlain,
            'descriptionEnPlain' => $this->descriptionEnPlain,
            'seller' => $this->seller?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
