<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\CategoryUplayResponseItemsItemR6OperatorsItem[]|null $r6Operators Operators
 */
class CategoryUplayResponseItemsItem implements JsonSerializable
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
        public readonly string|null $emailProvider = null, // Email
        public readonly string|null $itemDomain = null, // Item
        public readonly string|null $resaleItemOrigin = null, // Resale
        public readonly int|null $uplayItemId = null, // Uplay
        public readonly int|null $uplayLastActivity = null, // Uplay
        public readonly string|null $uplayCountry = null, // Uplay
        public readonly int|null $uplayCreatedDate = null, // Uplay
        public readonly \Lolzteam\Generated\Market\Models\CategoryUplayResponseItemsItemUplayGames|null $uplayGames = null, // Uplay
        public readonly int|null $uplayGameCount = null, // Uplay
        public readonly int|null $uplayR6Level = null, // Uplay
        public readonly int|null $uplayR6Ban = null, // Uplay
        public readonly string|null $uplayR6Operators = null, // Uplay
        public readonly int|null $uplayR6OperatorsCount = null, // Uplay
        public readonly string|null $uplayR6Skins = null, // Uplay
        public readonly int|null $uplayR6SkinsCount = null, // Uplay
        public readonly string|null $uplaySubscription = null, // Uplay
        public readonly int|null $uplaySubscriptionEndDate = null, // Uplay
        public readonly int|null $uplayXboxConnected = null, // Uplay
        public readonly int|null $uplayPsnConnected = null, // Uplay
        public readonly int|null $uplaySteamConnected = null, // Uplay
        public readonly int|null $uplayR6Rank = null, // Uplay
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
        public readonly \Lolzteam\Generated\Market\Models\CategoryUplayResponseItemsItemBumpSettings|null $bumpSettings = null, // Bump Settings
        public readonly bool|null $canBumpItem = null, // Can Bump Item
        public readonly bool|null $canBuyItem = null, // Can Buy Item
        public readonly int|null $rubPrice = null, // Rub
        public readonly string|null $priceCurrency = null, // Price
        public readonly bool|null $canValidateAccount = null, // Can Validate Account
        public readonly bool|null $canResellItemAfterPurchase = null, // Can Resell Item After Purchase
        public readonly string|null $uplayLinkedAccounts = null, // Uplay Linked Accounts
        public readonly bool|null $uplayR6SteamWarning = null, // Uplay
        public readonly bool|null $uplayR6ExternalWarning = null, // Uplay
        public readonly bool|null $uplayR6 = null, // Uplay
        public readonly bool|null $uplayR6BanActive = null, // Uplay
        public readonly bool|null $isSmallExf = null, // Is Small Exf
        public readonly int|null $accountLastActivity = null, // Account
        public readonly mixed $r6Skins = null, // Skins
        public readonly array|null $r6Operators = null, // Operators
        public readonly bool|null $canViewAccountLink = null, // Can View Account Link
        public readonly string|null $emailLoginUrl = null, // Email Login Url
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
        public readonly \Lolzteam\Generated\Market\Models\CategoryUplayResponseItemsItemSeller|null $seller = null, // Seller
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
            uplayItemId: $data['uplay_item_id'] ?? null,
            uplayLastActivity: $data['uplay_last_activity'] ?? null,
            uplayCountry: $data['uplay_country'] ?? null,
            uplayCreatedDate: $data['uplay_created_date'] ?? null,
            uplayGames: isset($data['uplay_games']) && is_array($data['uplay_games']) && !empty($data['uplay_games']) ? \Lolzteam\Generated\Market\Models\CategoryUplayResponseItemsItemUplayGames::fromArray($data['uplay_games']) : null,
            uplayGameCount: $data['uplay_game_count'] ?? null,
            uplayR6Level: $data['uplay_r6_level'] ?? null,
            uplayR6Ban: $data['uplay_r6_ban'] ?? null,
            uplayR6Operators: $data['uplay_r6_operators'] ?? null,
            uplayR6OperatorsCount: $data['uplay_r6_operators_count'] ?? null,
            uplayR6Skins: $data['uplay_r6_skins'] ?? null,
            uplayR6SkinsCount: $data['uplay_r6_skins_count'] ?? null,
            uplaySubscription: $data['uplay_subscription'] ?? null,
            uplaySubscriptionEndDate: $data['uplay_subscription_end_date'] ?? null,
            uplayXboxConnected: $data['uplay_xbox_connected'] ?? null,
            uplayPsnConnected: $data['uplay_psn_connected'] ?? null,
            uplaySteamConnected: $data['uplay_steam_connected'] ?? null,
            uplayR6Rank: $data['uplay_r6_rank'] ?? null,
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
            bumpSettings: isset($data['bumpSettings']) && is_array($data['bumpSettings']) && !empty($data['bumpSettings']) ? \Lolzteam\Generated\Market\Models\CategoryUplayResponseItemsItemBumpSettings::fromArray($data['bumpSettings']) : null,
            canBumpItem: $data['canBumpItem'] ?? null,
            canBuyItem: $data['canBuyItem'] ?? null,
            rubPrice: $data['rub_price'] ?? null,
            priceCurrency: $data['price_currency'] ?? null,
            canValidateAccount: $data['canValidateAccount'] ?? null,
            canResellItemAfterPurchase: $data['canResellItemAfterPurchase'] ?? null,
            uplayLinkedAccounts: $data['uplayLinkedAccounts'] ?? null,
            uplayR6SteamWarning: $data['uplay_r6_steam_warning'] ?? null,
            uplayR6ExternalWarning: $data['uplay_r6_external_warning'] ?? null,
            uplayR6: $data['uplay_r6'] ?? null,
            uplayR6BanActive: $data['uplay_r6_ban_active'] ?? null,
            isSmallExf: $data['isSmallExf'] ?? null,
            accountLastActivity: $data['account_last_activity'] ?? null,
            r6Skins: $data['r6Skins'] ?? null,
            r6Operators: isset($data['r6Operators']) && is_array($data['r6Operators']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryUplayResponseItemsItemR6OperatorsItem::fromArray($item), $data['r6Operators']) : null,
            canViewAccountLink: $data['canViewAccountLink'] ?? null,
            emailLoginUrl: $data['emailLoginUrl'] ?? null,
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
            seller: isset($data['seller']) && is_array($data['seller']) && !empty($data['seller']) ? \Lolzteam\Generated\Market\Models\CategoryUplayResponseItemsItemSeller::fromArray($data['seller']) : null,
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
            'uplay_item_id' => $this->uplayItemId,
            'uplay_last_activity' => $this->uplayLastActivity,
            'uplay_country' => $this->uplayCountry,
            'uplay_created_date' => $this->uplayCreatedDate,
            'uplay_games' => $this->uplayGames?->toArray(),
            'uplay_game_count' => $this->uplayGameCount,
            'uplay_r6_level' => $this->uplayR6Level,
            'uplay_r6_ban' => $this->uplayR6Ban,
            'uplay_r6_operators' => $this->uplayR6Operators,
            'uplay_r6_operators_count' => $this->uplayR6OperatorsCount,
            'uplay_r6_skins' => $this->uplayR6Skins,
            'uplay_r6_skins_count' => $this->uplayR6SkinsCount,
            'uplay_subscription' => $this->uplaySubscription,
            'uplay_subscription_end_date' => $this->uplaySubscriptionEndDate,
            'uplay_xbox_connected' => $this->uplayXboxConnected,
            'uplay_psn_connected' => $this->uplayPsnConnected,
            'uplay_steam_connected' => $this->uplaySteamConnected,
            'uplay_r6_rank' => $this->uplayR6Rank,
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
            'uplayLinkedAccounts' => $this->uplayLinkedAccounts,
            'uplay_r6_steam_warning' => $this->uplayR6SteamWarning,
            'uplay_r6_external_warning' => $this->uplayR6ExternalWarning,
            'uplay_r6' => $this->uplayR6,
            'uplay_r6_ban_active' => $this->uplayR6BanActive,
            'isSmallExf' => $this->isSmallExf,
            'account_last_activity' => $this->accountLastActivity,
            'r6Skins' => $this->r6Skins,
            'r6Operators' => $this->r6Operators !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->r6Operators) : null,
            'canViewAccountLink' => $this->canViewAccountLink,
            'emailLoginUrl' => $this->emailLoginUrl,
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
