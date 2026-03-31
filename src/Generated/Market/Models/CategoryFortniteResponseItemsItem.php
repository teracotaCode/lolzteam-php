<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemFortniteSkinsItem[]|null $fortniteSkins Fortnite Skins
 * @property-read \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemFortnitePickaxeItem[]|null $fortnitePickaxe Fortnite Pickaxe
 * @property-read \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemFortniteDanceItem[]|null $fortniteDance Fortnite Dance
 * @property-read \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemFortniteGlidersItem[]|null $fortniteGliders Fortnite Gliders
 * @property-read \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemFortnitePastSeasonsItem[]|null $fortnitePastSeasons Fortnite Past Seasons
 * @property-read \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemFortniteTransactionsItem[]|null $fortniteTransactions Fortnite Transactions
 */
class CategoryFortniteResponseItemsItem implements JsonSerializable
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
        public readonly int|null $fortniteItemId = null, // Fortnite
        public readonly string|null $fortnitePlatform = null, // Fortnite
        public readonly int|null $fortniteRegisterDate = null, // Fortnite
        public readonly int|null $fortniteLastActivity = null, // Fortnite
        public readonly int|null $fortniteBookLevel = null, // Fortnite
        public readonly int|null $fortniteLifetimeWins = null, // Fortnite
        public readonly int|null $fortniteLevel = null, // Fortnite
        public readonly int|null $fortniteSeasonNum = null, // Fortnite
        public readonly int|null $fortniteBooksPurchased = null, // Fortnite
        public readonly int|null $fortniteBalance = null, // Fortnite
        public readonly int|null $fortniteSkinCount = null, // Fortnite
        public readonly int|null $fortniteChangeEmail = null, // Fortnite
        public readonly int|null $fortniteRlPurchases = null, // Fortnite
        public readonly int|null $fortniteNextChangeEmailDate = null, // Fortnite
        public readonly int|null $fortniteLastTransDate = null, // Fortnite
        public readonly int|null $fortniteXboxLinkable = null, // Fortnite
        public readonly int|null $fortnitePsnLinkable = null, // Fortnite
        public readonly int|null $fortniteShopSkinsCount = null, // Fortnite
        public readonly int|null $fortniteShopPickaxesCount = null, // Fortnite
        public readonly int|null $fortniteShopDancesCount = null, // Fortnite
        public readonly int|null $fortniteShopGlidersCount = null, // Fortnite
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
        public readonly \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemBumpSettings|null $bumpSettings = null, // Bump Settings
        public readonly bool|null $canBumpItem = null, // Can Bump Item
        public readonly bool|null $canBuyItem = null, // Can Buy Item
        public readonly int|null $rubPrice = null, // Rub
        public readonly string|null $priceCurrency = null, // Price
        public readonly bool|null $canValidateAccount = null, // Can Validate Account
        public readonly bool|null $canResellItemAfterPurchase = null, // Can Resell Item After Purchase
        public readonly array|null $fortniteSkins = null, // Fortnite Skins
        public readonly array|null $fortnitePickaxe = null, // Fortnite Pickaxe
        public readonly array|null $fortniteDance = null, // Fortnite Dance
        public readonly array|null $fortniteGliders = null, // Fortnite Gliders
        public readonly int|null $fortnitePickaxeCount = null, // Fortnite
        public readonly int|null $fortniteDanceCount = null, // Fortnite
        public readonly int|null $fortniteGliderCount = null, // Fortnite
        public readonly array|null $fortnitePastSeasons = null, // Fortnite Past Seasons
        public readonly bool|null $isSmallExf = null, // Is Small Exf
        public readonly int|null $accountLastActivity = null, // Account
        public readonly array|null $fortniteTransactions = null, // Fortnite Transactions
        public readonly string|null $domain = null, // Domain
        public readonly \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemShopCounts|null $shopCounts = null, // Shop Counts
        public readonly bool|null $canViewAccountLink = null, // Can View Account Link
        public readonly array|null $accountLinks = null, // Account Links
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
        public readonly \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemSeller|null $seller = null, // Seller
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
            fortniteItemId: $data['fortnite_item_id'] ?? null,
            fortnitePlatform: $data['fortnite_platform'] ?? null,
            fortniteRegisterDate: $data['fortnite_register_date'] ?? null,
            fortniteLastActivity: $data['fortnite_last_activity'] ?? null,
            fortniteBookLevel: $data['fortnite_book_level'] ?? null,
            fortniteLifetimeWins: $data['fortnite_lifetime_wins'] ?? null,
            fortniteLevel: $data['fortnite_level'] ?? null,
            fortniteSeasonNum: $data['fortnite_season_num'] ?? null,
            fortniteBooksPurchased: $data['fortnite_books_purchased'] ?? null,
            fortniteBalance: $data['fortnite_balance'] ?? null,
            fortniteSkinCount: $data['fortnite_skin_count'] ?? null,
            fortniteChangeEmail: $data['fortnite_change_email'] ?? null,
            fortniteRlPurchases: $data['fortnite_rl_purchases'] ?? null,
            fortniteNextChangeEmailDate: $data['fortnite_next_change_email_date'] ?? null,
            fortniteLastTransDate: $data['fortnite_last_trans_date'] ?? null,
            fortniteXboxLinkable: $data['fortnite_xbox_linkable'] ?? null,
            fortnitePsnLinkable: $data['fortnite_psn_linkable'] ?? null,
            fortniteShopSkinsCount: $data['fortnite_shop_skins_count'] ?? null,
            fortniteShopPickaxesCount: $data['fortnite_shop_pickaxes_count'] ?? null,
            fortniteShopDancesCount: $data['fortnite_shop_dances_count'] ?? null,
            fortniteShopGlidersCount: $data['fortnite_shop_gliders_count'] ?? null,
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
            bumpSettings: isset($data['bumpSettings']) && is_array($data['bumpSettings']) && !empty($data['bumpSettings']) ? \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemBumpSettings::fromArray($data['bumpSettings']) : null,
            canBumpItem: $data['canBumpItem'] ?? null,
            canBuyItem: $data['canBuyItem'] ?? null,
            rubPrice: $data['rub_price'] ?? null,
            priceCurrency: $data['price_currency'] ?? null,
            canValidateAccount: $data['canValidateAccount'] ?? null,
            canResellItemAfterPurchase: $data['canResellItemAfterPurchase'] ?? null,
            fortniteSkins: isset($data['fortniteSkins']) && is_array($data['fortniteSkins']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemFortniteSkinsItem::fromArray($item), $data['fortniteSkins']) : null,
            fortnitePickaxe: isset($data['fortnitePickaxe']) && is_array($data['fortnitePickaxe']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemFortnitePickaxeItem::fromArray($item), $data['fortnitePickaxe']) : null,
            fortniteDance: isset($data['fortniteDance']) && is_array($data['fortniteDance']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemFortniteDanceItem::fromArray($item), $data['fortniteDance']) : null,
            fortniteGliders: isset($data['fortniteGliders']) && is_array($data['fortniteGliders']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemFortniteGlidersItem::fromArray($item), $data['fortniteGliders']) : null,
            fortnitePickaxeCount: $data['fortnite_pickaxe_count'] ?? null,
            fortniteDanceCount: $data['fortnite_dance_count'] ?? null,
            fortniteGliderCount: $data['fortnite_glider_count'] ?? null,
            fortnitePastSeasons: isset($data['fortnitePastSeasons']) && is_array($data['fortnitePastSeasons']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemFortnitePastSeasonsItem::fromArray($item), $data['fortnitePastSeasons']) : null,
            isSmallExf: $data['isSmallExf'] ?? null,
            accountLastActivity: $data['account_last_activity'] ?? null,
            fortniteTransactions: isset($data['fortniteTransactions']) && is_array($data['fortniteTransactions']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemFortniteTransactionsItem::fromArray($item), $data['fortniteTransactions']) : null,
            domain: $data['domain'] ?? null,
            shopCounts: isset($data['shopCounts']) && is_array($data['shopCounts']) && !empty($data['shopCounts']) ? \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemShopCounts::fromArray($data['shopCounts']) : null,
            canViewAccountLink: $data['canViewAccountLink'] ?? null,
            accountLinks: $data['accountLinks'] ?? null,
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
            seller: isset($data['seller']) && is_array($data['seller']) && !empty($data['seller']) ? \Lolzteam\Generated\Market\Models\CategoryFortniteResponseItemsItemSeller::fromArray($data['seller']) : null,
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
            'fortnite_item_id' => $this->fortniteItemId,
            'fortnite_platform' => $this->fortnitePlatform,
            'fortnite_register_date' => $this->fortniteRegisterDate,
            'fortnite_last_activity' => $this->fortniteLastActivity,
            'fortnite_book_level' => $this->fortniteBookLevel,
            'fortnite_lifetime_wins' => $this->fortniteLifetimeWins,
            'fortnite_level' => $this->fortniteLevel,
            'fortnite_season_num' => $this->fortniteSeasonNum,
            'fortnite_books_purchased' => $this->fortniteBooksPurchased,
            'fortnite_balance' => $this->fortniteBalance,
            'fortnite_skin_count' => $this->fortniteSkinCount,
            'fortnite_change_email' => $this->fortniteChangeEmail,
            'fortnite_rl_purchases' => $this->fortniteRlPurchases,
            'fortnite_next_change_email_date' => $this->fortniteNextChangeEmailDate,
            'fortnite_last_trans_date' => $this->fortniteLastTransDate,
            'fortnite_xbox_linkable' => $this->fortniteXboxLinkable,
            'fortnite_psn_linkable' => $this->fortnitePsnLinkable,
            'fortnite_shop_skins_count' => $this->fortniteShopSkinsCount,
            'fortnite_shop_pickaxes_count' => $this->fortniteShopPickaxesCount,
            'fortnite_shop_dances_count' => $this->fortniteShopDancesCount,
            'fortnite_shop_gliders_count' => $this->fortniteShopGlidersCount,
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
            'fortniteSkins' => $this->fortniteSkins !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->fortniteSkins) : null,
            'fortnitePickaxe' => $this->fortnitePickaxe !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->fortnitePickaxe) : null,
            'fortniteDance' => $this->fortniteDance !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->fortniteDance) : null,
            'fortniteGliders' => $this->fortniteGliders !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->fortniteGliders) : null,
            'fortnite_pickaxe_count' => $this->fortnitePickaxeCount,
            'fortnite_dance_count' => $this->fortniteDanceCount,
            'fortnite_glider_count' => $this->fortniteGliderCount,
            'fortnitePastSeasons' => $this->fortnitePastSeasons !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->fortnitePastSeasons) : null,
            'isSmallExf' => $this->isSmallExf,
            'account_last_activity' => $this->accountLastActivity,
            'fortniteTransactions' => $this->fortniteTransactions !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->fortniteTransactions) : null,
            'domain' => $this->domain,
            'shopCounts' => $this->shopCounts?->toArray(),
            'canViewAccountLink' => $this->canViewAccountLink,
            'accountLinks' => $this->accountLinks,
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
