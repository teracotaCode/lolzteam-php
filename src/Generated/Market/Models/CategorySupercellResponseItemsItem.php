<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\CategorySupercellResponseItemsItemAccountLinksItem[]|null $accountLinks Account Links
 */
class CategorySupercellResponseItemsItem implements JsonSerializable
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
        public readonly int|null $supercellItemId = null, // Supercell
        public readonly string|null $supercellId = null, // Supercell
        public readonly string|null $supercellArena = null, // Supercell
        public readonly int|null $supercellBrawlerCount = null, // Supercell
        public readonly int|null $supercellLastActivity = null, // Supercell
        public readonly int|null $supercellLegendaryBrawlerCount = null, // Supercell
        public readonly int|null $supercellTownHallLevel = null, // Supercell
        public readonly int|null $supercellBuilderHallLevel = null, // Supercell
        public readonly int|null $supercellBuilderHallCupCount = null, // Supercell
        public readonly int|null $supercellPhone = null, // Supercell
        public readonly int|null $supercellLaserLevel = null, // Supercell
        public readonly int|null $supercellScrollLevel = null, // Supercell
        public readonly int|null $supercellMagicLevel = null, // Supercell
        public readonly int|null $supercellLaserTrophies = null, // Supercell
        public readonly int|null $supercellScrollTrophies = null, // Supercell
        public readonly int|null $supercellMagicTrophies = null, // Supercell
        public readonly int|null $supercellLaserVictories = null, // Supercell
        public readonly int|null $supercellScrollVictories = null, // Supercell
        public readonly int|null $supercellMagicVictories = null, // Supercell
        public readonly int|null $supercellLaserBattlePass = null, // Supercell
        public readonly int|null $supercellScrollBattlePass = null, // Supercell
        public readonly int|null $supercellMagicBattlePass = null, // Supercell
        public readonly string|null $supercellSystems = null, // Supercell
        public readonly int|null $supercellKingLevel = null, // Supercell
        public readonly int|null $supercellTotalHeroesLevel = null, // Supercell
        public readonly int|null $supercellTotalTroopsLevel = null, // Supercell
        public readonly int|null $supercellTotalSpellsLevel = null, // Supercell
        public readonly int|null $supercellTotalBuilderHeroesLevel = null, // Supercell
        public readonly int|null $supercellTotalBuilderTroopsLevel = null, // Supercell
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
        public readonly \Lolzteam\Generated\Market\Models\CategorySupercellResponseItemsItemBumpSettings|null $bumpSettings = null, // Bump Settings
        public readonly bool|null $canBumpItem = null, // Can Bump Item
        public readonly bool|null $canBuyItem = null, // Can Buy Item
        public readonly int|null $rubPrice = null, // Rub
        public readonly string|null $priceCurrency = null, // Price
        public readonly bool|null $canValidateAccount = null, // Can Validate Account
        public readonly bool|null $canResellItemAfterPurchase = null, // Can Resell Item After Purchase
        public readonly bool|null $isSmallExf = null, // Is Small Exf
        public readonly mixed $supercellBrawlers = null, // Supercell Brawlers
        public readonly bool|null $canViewAccountLink = null, // Can View Account Link
        public readonly array|null $accountLinks = null, // Account Links
        public readonly string|null $accountLink = null, // Account Link
        public readonly string|null $emailLoginUrl = null, // Email Login Url
        public readonly bool|null $canChangePassword = null, // Can Change Password
        public readonly string|null $itemOriginPhrase = null, // Item Origin Phrase
        public readonly mixed $tags = null, // Tags
        public readonly mixed $noteText = null, // Note
        public readonly bool|null $hasPendingAutoBuy = null, // Has Pending Auto Buy
        public readonly string|null $descriptionHtml = null, // Description Html
        public readonly string|null $descriptionEnHtml = null, // Description En Html
        public readonly string|null $descriptionPlain = null, // Description Plain
        public readonly string|null $descriptionEnPlain = null, // Description En Plain
        public readonly \Lolzteam\Generated\Market\Models\CategorySupercellResponseItemsItemSeller|null $seller = null, // Seller
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
            supercellItemId: $data['supercell_item_id'] ?? null,
            supercellId: $data['supercell_id'] ?? null,
            supercellArena: $data['supercell_arena'] ?? null,
            supercellBrawlerCount: $data['supercell_brawler_count'] ?? null,
            supercellLastActivity: $data['supercell_last_activity'] ?? null,
            supercellLegendaryBrawlerCount: $data['supercell_legendary_brawler_count'] ?? null,
            supercellTownHallLevel: $data['supercell_town_hall_level'] ?? null,
            supercellBuilderHallLevel: $data['supercell_builder_hall_level'] ?? null,
            supercellBuilderHallCupCount: $data['supercell_builder_hall_cup_count'] ?? null,
            supercellPhone: $data['supercell_phone'] ?? null,
            supercellLaserLevel: $data['supercell_laser_level'] ?? null,
            supercellScrollLevel: $data['supercell_scroll_level'] ?? null,
            supercellMagicLevel: $data['supercell_magic_level'] ?? null,
            supercellLaserTrophies: $data['supercell_laser_trophies'] ?? null,
            supercellScrollTrophies: $data['supercell_scroll_trophies'] ?? null,
            supercellMagicTrophies: $data['supercell_magic_trophies'] ?? null,
            supercellLaserVictories: $data['supercell_laser_victories'] ?? null,
            supercellScrollVictories: $data['supercell_scroll_victories'] ?? null,
            supercellMagicVictories: $data['supercell_magic_victories'] ?? null,
            supercellLaserBattlePass: $data['supercell_laser_battle_pass'] ?? null,
            supercellScrollBattlePass: $data['supercell_scroll_battle_pass'] ?? null,
            supercellMagicBattlePass: $data['supercell_magic_battle_pass'] ?? null,
            supercellSystems: $data['supercell_systems'] ?? null,
            supercellKingLevel: $data['supercell_king_level'] ?? null,
            supercellTotalHeroesLevel: $data['supercell_total_heroes_level'] ?? null,
            supercellTotalTroopsLevel: $data['supercell_total_troops_level'] ?? null,
            supercellTotalSpellsLevel: $data['supercell_total_spells_level'] ?? null,
            supercellTotalBuilderHeroesLevel: $data['supercell_total_builder_heroes_level'] ?? null,
            supercellTotalBuilderTroopsLevel: $data['supercell_total_builder_troops_level'] ?? null,
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
            bumpSettings: isset($data['bumpSettings']) && is_array($data['bumpSettings']) && !empty($data['bumpSettings']) ? \Lolzteam\Generated\Market\Models\CategorySupercellResponseItemsItemBumpSettings::fromArray($data['bumpSettings']) : null,
            canBumpItem: $data['canBumpItem'] ?? null,
            canBuyItem: $data['canBuyItem'] ?? null,
            rubPrice: $data['rub_price'] ?? null,
            priceCurrency: $data['price_currency'] ?? null,
            canValidateAccount: $data['canValidateAccount'] ?? null,
            canResellItemAfterPurchase: $data['canResellItemAfterPurchase'] ?? null,
            isSmallExf: $data['isSmallExf'] ?? null,
            supercellBrawlers: $data['supercellBrawlers'] ?? null,
            canViewAccountLink: $data['canViewAccountLink'] ?? null,
            accountLinks: isset($data['accountLinks']) && is_array($data['accountLinks']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategorySupercellResponseItemsItemAccountLinksItem::fromArray($item), $data['accountLinks']) : null,
            accountLink: $data['accountLink'] ?? null,
            emailLoginUrl: $data['emailLoginUrl'] ?? null,
            canChangePassword: $data['canChangePassword'] ?? null,
            itemOriginPhrase: $data['itemOriginPhrase'] ?? null,
            tags: $data['tags'] ?? null,
            noteText: $data['note_text'] ?? null,
            hasPendingAutoBuy: $data['hasPendingAutoBuy'] ?? null,
            descriptionHtml: $data['descriptionHtml'] ?? null,
            descriptionEnHtml: $data['descriptionEnHtml'] ?? null,
            descriptionPlain: $data['descriptionPlain'] ?? null,
            descriptionEnPlain: $data['descriptionEnPlain'] ?? null,
            seller: isset($data['seller']) && is_array($data['seller']) && !empty($data['seller']) ? \Lolzteam\Generated\Market\Models\CategorySupercellResponseItemsItemSeller::fromArray($data['seller']) : null,
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
            'supercell_item_id' => $this->supercellItemId,
            'supercell_id' => $this->supercellId,
            'supercell_arena' => $this->supercellArena,
            'supercell_brawler_count' => $this->supercellBrawlerCount,
            'supercell_last_activity' => $this->supercellLastActivity,
            'supercell_legendary_brawler_count' => $this->supercellLegendaryBrawlerCount,
            'supercell_town_hall_level' => $this->supercellTownHallLevel,
            'supercell_builder_hall_level' => $this->supercellBuilderHallLevel,
            'supercell_builder_hall_cup_count' => $this->supercellBuilderHallCupCount,
            'supercell_phone' => $this->supercellPhone,
            'supercell_laser_level' => $this->supercellLaserLevel,
            'supercell_scroll_level' => $this->supercellScrollLevel,
            'supercell_magic_level' => $this->supercellMagicLevel,
            'supercell_laser_trophies' => $this->supercellLaserTrophies,
            'supercell_scroll_trophies' => $this->supercellScrollTrophies,
            'supercell_magic_trophies' => $this->supercellMagicTrophies,
            'supercell_laser_victories' => $this->supercellLaserVictories,
            'supercell_scroll_victories' => $this->supercellScrollVictories,
            'supercell_magic_victories' => $this->supercellMagicVictories,
            'supercell_laser_battle_pass' => $this->supercellLaserBattlePass,
            'supercell_scroll_battle_pass' => $this->supercellScrollBattlePass,
            'supercell_magic_battle_pass' => $this->supercellMagicBattlePass,
            'supercell_systems' => $this->supercellSystems,
            'supercell_king_level' => $this->supercellKingLevel,
            'supercell_total_heroes_level' => $this->supercellTotalHeroesLevel,
            'supercell_total_troops_level' => $this->supercellTotalTroopsLevel,
            'supercell_total_spells_level' => $this->supercellTotalSpellsLevel,
            'supercell_total_builder_heroes_level' => $this->supercellTotalBuilderHeroesLevel,
            'supercell_total_builder_troops_level' => $this->supercellTotalBuilderTroopsLevel,
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
            'isSmallExf' => $this->isSmallExf,
            'supercellBrawlers' => $this->supercellBrawlers,
            'canViewAccountLink' => $this->canViewAccountLink,
            'accountLinks' => $this->accountLinks !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->accountLinks) : null,
            'accountLink' => $this->accountLink,
            'emailLoginUrl' => $this->emailLoginUrl,
            'canChangePassword' => $this->canChangePassword,
            'itemOriginPhrase' => $this->itemOriginPhrase,
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
