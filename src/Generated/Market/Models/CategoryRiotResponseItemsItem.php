<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\CategoryRiotResponseItemsItemAccountLinksItem[]|null $accountLinks Account Links
 */
class CategoryRiotResponseItemsItem implements JsonSerializable
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
        public readonly int|null $riotItemId = null, // Riot
        public readonly string|null $riotId = null, // Riot
        public readonly int|null $riotAccountVerified = null, // Riot
        public readonly int|null $riotEmailVerified = null, // Riot
        public readonly string|null $riotCountry = null, // Riot
        public readonly int|null $riotPasswordChange = null, // Riot
        public readonly int|null $riotPhoneVerified = null, // Riot
        public readonly int|null $riotLastActivity = null, // Riot
        public readonly int|null $riotValorantWalletVp = null, // Riot
        public readonly int|null $riotValorantWalletRp = null, // Riot
        public readonly int|null $riotValorantWalletFa = null, // Riot
        public readonly int|null $riotValorantLevel = null, // Riot
        public readonly string|null $riotUsername = null, // Riot
        public readonly int|null $riotValorantRank = null, // Riot
        public readonly string|null $riotValorantRegion = null, // Riot
        public readonly int|null $riotValorantSkinCount = null, // Riot
        public readonly int|null $riotValorantAgentCount = null, // Riot
        public readonly int|null $riotValorantPreviousRank = null, // Riot
        public readonly int|null $riotValorantLastRank = null, // Riot
        public readonly string|null $riotValorantRankType = null, // Riot
        public readonly int|null $riotValorantInventoryValue = null, // Riot
        public readonly int|null $riotValorantKnife = null, // Riot
        public readonly string|null $riotLolRegion = null, // Riot
        public readonly int|null $riotLolSkinCount = null, // Riot
        public readonly int|null $riotLolChampionCount = null, // Riot
        public readonly int|null $riotLolLevel = null, // Riot
        public readonly int|null $riotLolWalletBlue = null, // Riot
        public readonly int|null $riotLolWalletOrange = null, // Riot
        public readonly int|null $riotLolWalletMythic = null, // Riot
        public readonly int|null $riotLolWalletRiot = null, // Riot
        public readonly string|null $riotLolRank = null, // Riot
        public readonly int|null $riotLolRankWinRate = null, // Riot
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
        public readonly \Lolzteam\Generated\Market\Models\CategoryRiotResponseItemsItemBumpSettings|null $bumpSettings = null, // Bump Settings
        public readonly bool|null $canBumpItem = null, // Can Bump Item
        public readonly bool|null $canBuyItem = null, // Can Buy Item
        public readonly int|null $rubPrice = null, // Rub
        public readonly string|null $priceCurrency = null, // Price
        public readonly bool|null $canValidateAccount = null, // Can Validate Account
        public readonly bool|null $canResellItemAfterPurchase = null, // Can Resell Item After Purchase
        public readonly string|null $valorantRegionPhrase = null, // Valorant Region Phrase
        public readonly string|null $valorantRankTitle = null, // Valorant Rank Title
        public readonly string|null $valorantRankImgPath = null, // Valorant Rank Img Path
        public readonly string|null $valorantPreviousRankTitle = null, // Valorant Previous Rank Title
        public readonly string|null $valorantLastRankTitle = null, // Valorant Last Rank Title
        public readonly string|null $lolRegionPhrase = null, // Lol Region Phrase
        public readonly bool|null $isSmallExf = null, // Is Small Exf
        public readonly int|null $accountLastActivity = null, // Account
        public readonly \Lolzteam\Generated\Market\Models\CategoryRiotResponseItemsItemValorantInventory|null $valorantInventory = null, // Valorant Inventory
        public readonly \Lolzteam\Generated\Market\Models\CategoryRiotResponseItemsItemLolInventory|null $lolInventory = null, // Lol Inventory
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
        public readonly \Lolzteam\Generated\Market\Models\CategoryRiotResponseItemsItemSeller|null $seller = null, // Seller
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
            riotItemId: $data['riot_item_id'] ?? null,
            riotId: $data['riot_id'] ?? null,
            riotAccountVerified: $data['riot_account_verified'] ?? null,
            riotEmailVerified: $data['riot_email_verified'] ?? null,
            riotCountry: $data['riot_country'] ?? null,
            riotPasswordChange: $data['riot_password_change'] ?? null,
            riotPhoneVerified: $data['riot_phone_verified'] ?? null,
            riotLastActivity: $data['riot_last_activity'] ?? null,
            riotValorantWalletVp: $data['riot_valorant_wallet_vp'] ?? null,
            riotValorantWalletRp: $data['riot_valorant_wallet_rp'] ?? null,
            riotValorantWalletFa: $data['riot_valorant_wallet_fa'] ?? null,
            riotValorantLevel: $data['riot_valorant_level'] ?? null,
            riotUsername: $data['riot_username'] ?? null,
            riotValorantRank: $data['riot_valorant_rank'] ?? null,
            riotValorantRegion: $data['riot_valorant_region'] ?? null,
            riotValorantSkinCount: $data['riot_valorant_skin_count'] ?? null,
            riotValorantAgentCount: $data['riot_valorant_agent_count'] ?? null,
            riotValorantPreviousRank: $data['riot_valorant_previous_rank'] ?? null,
            riotValorantLastRank: $data['riot_valorant_last_rank'] ?? null,
            riotValorantRankType: $data['riot_valorant_rank_type'] ?? null,
            riotValorantInventoryValue: $data['riot_valorant_inventory_value'] ?? null,
            riotValorantKnife: $data['riot_valorant_knife'] ?? null,
            riotLolRegion: $data['riot_lol_region'] ?? null,
            riotLolSkinCount: $data['riot_lol_skin_count'] ?? null,
            riotLolChampionCount: $data['riot_lol_champion_count'] ?? null,
            riotLolLevel: $data['riot_lol_level'] ?? null,
            riotLolWalletBlue: $data['riot_lol_wallet_blue'] ?? null,
            riotLolWalletOrange: $data['riot_lol_wallet_orange'] ?? null,
            riotLolWalletMythic: $data['riot_lol_wallet_mythic'] ?? null,
            riotLolWalletRiot: $data['riot_lol_wallet_riot'] ?? null,
            riotLolRank: $data['riot_lol_rank'] ?? null,
            riotLolRankWinRate: $data['riot_lol_rank_win_rate'] ?? null,
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
            bumpSettings: isset($data['bumpSettings']) && is_array($data['bumpSettings']) && !empty($data['bumpSettings']) ? \Lolzteam\Generated\Market\Models\CategoryRiotResponseItemsItemBumpSettings::fromArray($data['bumpSettings']) : null,
            canBumpItem: $data['canBumpItem'] ?? null,
            canBuyItem: $data['canBuyItem'] ?? null,
            rubPrice: $data['rub_price'] ?? null,
            priceCurrency: $data['price_currency'] ?? null,
            canValidateAccount: $data['canValidateAccount'] ?? null,
            canResellItemAfterPurchase: $data['canResellItemAfterPurchase'] ?? null,
            valorantRegionPhrase: $data['valorantRegionPhrase'] ?? null,
            valorantRankTitle: $data['valorantRankTitle'] ?? null,
            valorantRankImgPath: $data['valorantRankImgPath'] ?? null,
            valorantPreviousRankTitle: $data['valorantPreviousRankTitle'] ?? null,
            valorantLastRankTitle: $data['valorantLastRankTitle'] ?? null,
            lolRegionPhrase: $data['lolRegionPhrase'] ?? null,
            isSmallExf: $data['isSmallExf'] ?? null,
            accountLastActivity: $data['account_last_activity'] ?? null,
            valorantInventory: isset($data['valorantInventory']) && is_array($data['valorantInventory']) && !empty($data['valorantInventory']) ? \Lolzteam\Generated\Market\Models\CategoryRiotResponseItemsItemValorantInventory::fromArray($data['valorantInventory']) : null,
            lolInventory: isset($data['lolInventory']) && is_array($data['lolInventory']) && !empty($data['lolInventory']) ? \Lolzteam\Generated\Market\Models\CategoryRiotResponseItemsItemLolInventory::fromArray($data['lolInventory']) : null,
            canViewAccountLink: $data['canViewAccountLink'] ?? null,
            accountLinks: isset($data['accountLinks']) && is_array($data['accountLinks']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryRiotResponseItemsItemAccountLinksItem::fromArray($item), $data['accountLinks']) : null,
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
            seller: isset($data['seller']) && is_array($data['seller']) && !empty($data['seller']) ? \Lolzteam\Generated\Market\Models\CategoryRiotResponseItemsItemSeller::fromArray($data['seller']) : null,
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
            'riot_item_id' => $this->riotItemId,
            'riot_id' => $this->riotId,
            'riot_account_verified' => $this->riotAccountVerified,
            'riot_email_verified' => $this->riotEmailVerified,
            'riot_country' => $this->riotCountry,
            'riot_password_change' => $this->riotPasswordChange,
            'riot_phone_verified' => $this->riotPhoneVerified,
            'riot_last_activity' => $this->riotLastActivity,
            'riot_valorant_wallet_vp' => $this->riotValorantWalletVp,
            'riot_valorant_wallet_rp' => $this->riotValorantWalletRp,
            'riot_valorant_wallet_fa' => $this->riotValorantWalletFa,
            'riot_valorant_level' => $this->riotValorantLevel,
            'riot_username' => $this->riotUsername,
            'riot_valorant_rank' => $this->riotValorantRank,
            'riot_valorant_region' => $this->riotValorantRegion,
            'riot_valorant_skin_count' => $this->riotValorantSkinCount,
            'riot_valorant_agent_count' => $this->riotValorantAgentCount,
            'riot_valorant_previous_rank' => $this->riotValorantPreviousRank,
            'riot_valorant_last_rank' => $this->riotValorantLastRank,
            'riot_valorant_rank_type' => $this->riotValorantRankType,
            'riot_valorant_inventory_value' => $this->riotValorantInventoryValue,
            'riot_valorant_knife' => $this->riotValorantKnife,
            'riot_lol_region' => $this->riotLolRegion,
            'riot_lol_skin_count' => $this->riotLolSkinCount,
            'riot_lol_champion_count' => $this->riotLolChampionCount,
            'riot_lol_level' => $this->riotLolLevel,
            'riot_lol_wallet_blue' => $this->riotLolWalletBlue,
            'riot_lol_wallet_orange' => $this->riotLolWalletOrange,
            'riot_lol_wallet_mythic' => $this->riotLolWalletMythic,
            'riot_lol_wallet_riot' => $this->riotLolWalletRiot,
            'riot_lol_rank' => $this->riotLolRank,
            'riot_lol_rank_win_rate' => $this->riotLolRankWinRate,
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
            'valorantRegionPhrase' => $this->valorantRegionPhrase,
            'valorantRankTitle' => $this->valorantRankTitle,
            'valorantRankImgPath' => $this->valorantRankImgPath,
            'valorantPreviousRankTitle' => $this->valorantPreviousRankTitle,
            'valorantLastRankTitle' => $this->valorantLastRankTitle,
            'lolRegionPhrase' => $this->lolRegionPhrase,
            'isSmallExf' => $this->isSmallExf,
            'account_last_activity' => $this->accountLastActivity,
            'valorantInventory' => $this->valorantInventory?->toArray(),
            'lolInventory' => $this->lolInventory?->toArray(),
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
