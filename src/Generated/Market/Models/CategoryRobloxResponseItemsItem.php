<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\CategoryRobloxResponseItemsItemRobloxGameDonationsDetailsItem[]|null $robloxGameDonationsDetails Roblox Game Donations Details
 * @property-read \Lolzteam\Generated\Market\Models\CategoryRobloxResponseItemsItemAccountLinksItem[]|null $accountLinks Account Links
 */
class CategoryRobloxResponseItemsItem implements JsonSerializable
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
        public readonly int|null $robloxItemId = null, // Roblox
        public readonly int|null $robloxId = null, // Roblox
        public readonly int|null $robloxEmailVerified = null, // Roblox
        public readonly int|null $robloxRobux = null, // Roblox
        public readonly string|null $robloxUsername = null, // Roblox
        public readonly string|null $robloxCountry = null, // Roblox
        public readonly int|null $robloxRegisterDate = null, // Roblox
        public readonly int|null $robloxFriends = null, // Roblox
        public readonly int|null $robloxFollowers = null, // Roblox
        public readonly string|null $robloxSubscription = null, // Roblox
        public readonly int|null $robloxSubscriptionEndDate = null, // Roblox
        public readonly int|null $robloxXboxConnected = null, // Roblox
        public readonly int|null $robloxIncomingRobuxTotal = null, // Roblox
        public readonly int|null $robloxLimitedPrice = null, // Roblox
        public readonly int|null $robloxVerified = null, // Roblox
        public readonly int|null $robloxAgeVerified = null, // Roblox
        public readonly int|null $robloxPsnConnected = null, // Roblox
        public readonly int|null $robloxSubscriptionAutoRenew = null, // Roblox
        public readonly int|null $robloxGamePassTotalRobux = null, // Roblox
        public readonly string|null $robloxGameDonations = null, // Roblox
        public readonly int|null $robloxInventoryPrice = null, // Roblox
        public readonly int|null $robloxUgcLimitedPrice = null, // Roblox
        public readonly float|null $robloxCreditBalance = null, // Roblox
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
        public readonly \Lolzteam\Generated\Market\Models\CategoryRobloxResponseItemsItemBumpSettings|null $bumpSettings = null, // Bump Settings
        public readonly bool|null $canBumpItem = null, // Can Bump Item
        public readonly bool|null $canBuyItem = null, // Can Buy Item
        public readonly int|null $rubPrice = null, // Rub
        public readonly string|null $priceCurrency = null, // Price
        public readonly bool|null $canValidateAccount = null, // Can Validate Account
        public readonly bool|null $canResellItemAfterPurchase = null, // Can Resell Item After Purchase
        public readonly string|null $robloxLinkedAccounts = null, // Roblox Linked Accounts
        public readonly string|null $creditBalance = null, // Credit Balance
        public readonly array|null $robloxGameDonationsDetails = null, // Roblox Game Donations Details
        public readonly bool|null $canViewAccountLink = null, // Can View Account Link
        public readonly array|null $accountLinks = null, // Account Links
        public readonly string|null $accountLink = null, // Account Link
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
        public readonly \Lolzteam\Generated\Market\Models\CategoryRobloxResponseItemsItemSeller|null $seller = null, // Seller
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
            robloxItemId: $data['roblox_item_id'] ?? null,
            robloxId: $data['roblox_id'] ?? null,
            robloxEmailVerified: $data['roblox_email_verified'] ?? null,
            robloxRobux: $data['roblox_robux'] ?? null,
            robloxUsername: $data['roblox_username'] ?? null,
            robloxCountry: $data['roblox_country'] ?? null,
            robloxRegisterDate: $data['roblox_register_date'] ?? null,
            robloxFriends: $data['roblox_friends'] ?? null,
            robloxFollowers: $data['roblox_followers'] ?? null,
            robloxSubscription: $data['roblox_subscription'] ?? null,
            robloxSubscriptionEndDate: $data['roblox_subscription_end_date'] ?? null,
            robloxXboxConnected: $data['roblox_xbox_connected'] ?? null,
            robloxIncomingRobuxTotal: $data['roblox_incoming_robux_total'] ?? null,
            robloxLimitedPrice: $data['roblox_limited_price'] ?? null,
            robloxVerified: $data['roblox_verified'] ?? null,
            robloxAgeVerified: $data['roblox_age_verified'] ?? null,
            robloxPsnConnected: $data['roblox_psn_connected'] ?? null,
            robloxSubscriptionAutoRenew: $data['roblox_subscription_auto_renew'] ?? null,
            robloxGamePassTotalRobux: $data['roblox_game_pass_total_robux'] ?? null,
            robloxGameDonations: $data['roblox_game_donations'] ?? null,
            robloxInventoryPrice: $data['roblox_inventory_price'] ?? null,
            robloxUgcLimitedPrice: $data['roblox_ugc_limited_price'] ?? null,
            robloxCreditBalance: $data['roblox_credit_balance'] ?? null,
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
            bumpSettings: isset($data['bumpSettings']) && is_array($data['bumpSettings']) && !empty($data['bumpSettings']) ? \Lolzteam\Generated\Market\Models\CategoryRobloxResponseItemsItemBumpSettings::fromArray($data['bumpSettings']) : null,
            canBumpItem: $data['canBumpItem'] ?? null,
            canBuyItem: $data['canBuyItem'] ?? null,
            rubPrice: $data['rub_price'] ?? null,
            priceCurrency: $data['price_currency'] ?? null,
            canValidateAccount: $data['canValidateAccount'] ?? null,
            canResellItemAfterPurchase: $data['canResellItemAfterPurchase'] ?? null,
            robloxLinkedAccounts: $data['robloxLinkedAccounts'] ?? null,
            creditBalance: $data['creditBalance'] ?? null,
            robloxGameDonationsDetails: isset($data['robloxGameDonationsDetails']) && is_array($data['robloxGameDonationsDetails']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryRobloxResponseItemsItemRobloxGameDonationsDetailsItem::fromArray($item), $data['robloxGameDonationsDetails']) : null,
            canViewAccountLink: $data['canViewAccountLink'] ?? null,
            accountLinks: isset($data['accountLinks']) && is_array($data['accountLinks']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryRobloxResponseItemsItemAccountLinksItem::fromArray($item), $data['accountLinks']) : null,
            accountLink: $data['accountLink'] ?? null,
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
            seller: isset($data['seller']) && is_array($data['seller']) && !empty($data['seller']) ? \Lolzteam\Generated\Market\Models\CategoryRobloxResponseItemsItemSeller::fromArray($data['seller']) : null,
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
            'roblox_item_id' => $this->robloxItemId,
            'roblox_id' => $this->robloxId,
            'roblox_email_verified' => $this->robloxEmailVerified,
            'roblox_robux' => $this->robloxRobux,
            'roblox_username' => $this->robloxUsername,
            'roblox_country' => $this->robloxCountry,
            'roblox_register_date' => $this->robloxRegisterDate,
            'roblox_friends' => $this->robloxFriends,
            'roblox_followers' => $this->robloxFollowers,
            'roblox_subscription' => $this->robloxSubscription,
            'roblox_subscription_end_date' => $this->robloxSubscriptionEndDate,
            'roblox_xbox_connected' => $this->robloxXboxConnected,
            'roblox_incoming_robux_total' => $this->robloxIncomingRobuxTotal,
            'roblox_limited_price' => $this->robloxLimitedPrice,
            'roblox_verified' => $this->robloxVerified,
            'roblox_age_verified' => $this->robloxAgeVerified,
            'roblox_psn_connected' => $this->robloxPsnConnected,
            'roblox_subscription_auto_renew' => $this->robloxSubscriptionAutoRenew,
            'roblox_game_pass_total_robux' => $this->robloxGamePassTotalRobux,
            'roblox_game_donations' => $this->robloxGameDonations,
            'roblox_inventory_price' => $this->robloxInventoryPrice,
            'roblox_ugc_limited_price' => $this->robloxUgcLimitedPrice,
            'roblox_credit_balance' => $this->robloxCreditBalance,
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
            'robloxLinkedAccounts' => $this->robloxLinkedAccounts,
            'creditBalance' => $this->creditBalance,
            'robloxGameDonationsDetails' => $this->robloxGameDonationsDetails !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->robloxGameDonationsDetails) : null,
            'canViewAccountLink' => $this->canViewAccountLink,
            'accountLinks' => $this->accountLinks !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->accountLinks) : null,
            'accountLink' => $this->accountLink,
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
