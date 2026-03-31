<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemHonkaiCharactersItem[]|null $honkaiCharacters Honkai Characters
 * @property-read \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemGenshinCharactersItem[]|null $genshinCharacters Genshin Characters
 * @property-read \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemZenlessCharactersItem[]|null $zenlessCharacters Zenless Characters
 * @property-read \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemAccountLinksItem[]|null $accountLinks Account Links
 */
class CategoryMihoyoResponseItemsItem implements JsonSerializable
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
        public readonly int|null $mihoyoItemId = null, // Mihoyo
        public readonly int|null $mihoyoId = null, // Mihoyo
        public readonly int|null $mihoyoEmail = null, // Mihoyo
        public readonly int|null $mihoyoHasLinkedAccounts = null, // Mihoyo
        public readonly string|null $mihoyoRegion = null, // Mihoyo
        public readonly int|null $mihoyoLastActivity = null, // Mihoyo
        public readonly int|null $mihoyoGenshinLevel = null, // Mihoyo
        public readonly int|null $mihoyoGenshinCharacterCount = null, // Mihoyo
        public readonly int|null $mihoyoGenshinAchievementCount = null, // Mihoyo
        public readonly string|null $mihoyoGenshinAbyssProcess = null, // Mihoyo
        public readonly int|null $mihoyoGenshinLegendaryCharactersCount = null, // Mihoyo
        public readonly int|null $mihoyoGenshinConstellationsCount = null, // Mihoyo
        public readonly int|null $mihoyoGenshinLegendaryWeaponsCount = null, // Mihoyo
        public readonly int|null $mihoyoGenshinActivityDays = null, // Mihoyo
        public readonly int|null $mihoyoGenshinCurrency = null, // Mihoyo
        public readonly int|null $mihoyoHonkaiLevel = null, // Mihoyo
        public readonly int|null $mihoyoHonkaiCharacterCount = null, // Mihoyo
        public readonly int|null $mihoyoHonkaiAchievementCount = null, // Mihoyo
        public readonly string|null $mihoyoHonkaiAbyssProcess = null, // Mihoyo
        public readonly int|null $mihoyoHonkaiLegendaryCharactersCount = null, // Mihoyo
        public readonly int|null $mihoyoHonkaiEidolonsCount = null, // Mihoyo
        public readonly int|null $mihoyoHonkaiLegendaryWeaponsCount = null, // Mihoyo
        public readonly int|null $mihoyoHonkaiActivityDays = null, // Mihoyo
        public readonly int|null $mihoyoHonkaiCurrency = null, // Mihoyo
        public readonly int|null $mihoyoZenlessLevel = null, // Mihoyo
        public readonly int|null $mihoyoZenlessCharacterCount = null, // Mihoyo
        public readonly int|null $mihoyoZenlessAchievementCount = null, // Mihoyo
        public readonly string|null $mihoyoZenlessAbyssProcess = null, // Mihoyo
        public readonly int|null $mihoyoZenlessLegendaryCharactersCount = null, // Mihoyo
        public readonly int|null $mihoyoZenlessCinemasCount = null, // Mihoyo
        public readonly int|null $mihoyoZenlessLegendaryWeaponsCount = null, // Mihoyo
        public readonly int|null $mihoyoZenlessActivityDays = null, // Mihoyo
        public readonly int|null $mihoyoZenlessCurrency = null, // Mihoyo
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
        public readonly \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemBumpSettings|null $bumpSettings = null, // Bump Settings
        public readonly bool|null $canBumpItem = null, // Can Bump Item
        public readonly bool|null $canBuyItem = null, // Can Buy Item
        public readonly int|null $rubPrice = null, // Rub
        public readonly string|null $priceCurrency = null, // Price
        public readonly bool|null $canValidateAccount = null, // Can Validate Account
        public readonly bool|null $canResellItemAfterPurchase = null, // Can Resell Item After Purchase
        public readonly string|null $mihoyoRegionPhrase = null, // Mihoyo Region Phrase
        public readonly \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemMihoyoLinkedAccounts|null $mihoyoLinkedAccounts = null, // Mihoyo Linked Accounts
        public readonly string|null $mihoyoLinkedAccountsString = null, // Mihoyo Linked Accounts String
        public readonly array|null $honkaiCharacters = null, // Honkai Characters
        public readonly array|null $genshinCharacters = null, // Genshin Characters
        public readonly array|null $zenlessCharacters = null, // Zenless Characters
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
        public readonly \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemSeller|null $seller = null, // Seller
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
            mihoyoItemId: $data['mihoyo_item_id'] ?? null,
            mihoyoId: $data['mihoyo_id'] ?? null,
            mihoyoEmail: $data['mihoyo_email'] ?? null,
            mihoyoHasLinkedAccounts: $data['mihoyo_has_linked_accounts'] ?? null,
            mihoyoRegion: $data['mihoyo_region'] ?? null,
            mihoyoLastActivity: $data['mihoyo_last_activity'] ?? null,
            mihoyoGenshinLevel: $data['mihoyo_genshin_level'] ?? null,
            mihoyoGenshinCharacterCount: $data['mihoyo_genshin_character_count'] ?? null,
            mihoyoGenshinAchievementCount: $data['mihoyo_genshin_achievement_count'] ?? null,
            mihoyoGenshinAbyssProcess: $data['mihoyo_genshin_abyss_process'] ?? null,
            mihoyoGenshinLegendaryCharactersCount: $data['mihoyo_genshin_legendary_characters_count'] ?? null,
            mihoyoGenshinConstellationsCount: $data['mihoyo_genshin_constellations_count'] ?? null,
            mihoyoGenshinLegendaryWeaponsCount: $data['mihoyo_genshin_legendary_weapons_count'] ?? null,
            mihoyoGenshinActivityDays: $data['mihoyo_genshin_activity_days'] ?? null,
            mihoyoGenshinCurrency: $data['mihoyo_genshin_currency'] ?? null,
            mihoyoHonkaiLevel: $data['mihoyo_honkai_level'] ?? null,
            mihoyoHonkaiCharacterCount: $data['mihoyo_honkai_character_count'] ?? null,
            mihoyoHonkaiAchievementCount: $data['mihoyo_honkai_achievement_count'] ?? null,
            mihoyoHonkaiAbyssProcess: $data['mihoyo_honkai_abyss_process'] ?? null,
            mihoyoHonkaiLegendaryCharactersCount: $data['mihoyo_honkai_legendary_characters_count'] ?? null,
            mihoyoHonkaiEidolonsCount: $data['mihoyo_honkai_eidolons_count'] ?? null,
            mihoyoHonkaiLegendaryWeaponsCount: $data['mihoyo_honkai_legendary_weapons_count'] ?? null,
            mihoyoHonkaiActivityDays: $data['mihoyo_honkai_activity_days'] ?? null,
            mihoyoHonkaiCurrency: $data['mihoyo_honkai_currency'] ?? null,
            mihoyoZenlessLevel: $data['mihoyo_zenless_level'] ?? null,
            mihoyoZenlessCharacterCount: $data['mihoyo_zenless_character_count'] ?? null,
            mihoyoZenlessAchievementCount: $data['mihoyo_zenless_achievement_count'] ?? null,
            mihoyoZenlessAbyssProcess: $data['mihoyo_zenless_abyss_process'] ?? null,
            mihoyoZenlessLegendaryCharactersCount: $data['mihoyo_zenless_legendary_characters_count'] ?? null,
            mihoyoZenlessCinemasCount: $data['mihoyo_zenless_cinemas_count'] ?? null,
            mihoyoZenlessLegendaryWeaponsCount: $data['mihoyo_zenless_legendary_weapons_count'] ?? null,
            mihoyoZenlessActivityDays: $data['mihoyo_zenless_activity_days'] ?? null,
            mihoyoZenlessCurrency: $data['mihoyo_zenless_currency'] ?? null,
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
            bumpSettings: isset($data['bumpSettings']) && is_array($data['bumpSettings']) && !empty($data['bumpSettings']) ? \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemBumpSettings::fromArray($data['bumpSettings']) : null,
            canBumpItem: $data['canBumpItem'] ?? null,
            canBuyItem: $data['canBuyItem'] ?? null,
            rubPrice: $data['rub_price'] ?? null,
            priceCurrency: $data['price_currency'] ?? null,
            canValidateAccount: $data['canValidateAccount'] ?? null,
            canResellItemAfterPurchase: $data['canResellItemAfterPurchase'] ?? null,
            mihoyoRegionPhrase: $data['mihoyoRegionPhrase'] ?? null,
            mihoyoLinkedAccounts: isset($data['mihoyoLinkedAccounts']) && is_array($data['mihoyoLinkedAccounts']) && !empty($data['mihoyoLinkedAccounts']) ? \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemMihoyoLinkedAccounts::fromArray($data['mihoyoLinkedAccounts']) : null,
            mihoyoLinkedAccountsString: $data['mihoyoLinkedAccountsString'] ?? null,
            honkaiCharacters: isset($data['honkaiCharacters']) && is_array($data['honkaiCharacters']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemHonkaiCharactersItem::fromArray($item), $data['honkaiCharacters']) : null,
            genshinCharacters: isset($data['genshinCharacters']) && is_array($data['genshinCharacters']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemGenshinCharactersItem::fromArray($item), $data['genshinCharacters']) : null,
            zenlessCharacters: isset($data['zenlessCharacters']) && is_array($data['zenlessCharacters']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemZenlessCharactersItem::fromArray($item), $data['zenlessCharacters']) : null,
            canViewAccountLink: $data['canViewAccountLink'] ?? null,
            accountLinks: isset($data['accountLinks']) && is_array($data['accountLinks']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemAccountLinksItem::fromArray($item), $data['accountLinks']) : null,
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
            seller: isset($data['seller']) && is_array($data['seller']) && !empty($data['seller']) ? \Lolzteam\Generated\Market\Models\CategoryMihoyoResponseItemsItemSeller::fromArray($data['seller']) : null,
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
            'mihoyo_item_id' => $this->mihoyoItemId,
            'mihoyo_id' => $this->mihoyoId,
            'mihoyo_email' => $this->mihoyoEmail,
            'mihoyo_has_linked_accounts' => $this->mihoyoHasLinkedAccounts,
            'mihoyo_region' => $this->mihoyoRegion,
            'mihoyo_last_activity' => $this->mihoyoLastActivity,
            'mihoyo_genshin_level' => $this->mihoyoGenshinLevel,
            'mihoyo_genshin_character_count' => $this->mihoyoGenshinCharacterCount,
            'mihoyo_genshin_achievement_count' => $this->mihoyoGenshinAchievementCount,
            'mihoyo_genshin_abyss_process' => $this->mihoyoGenshinAbyssProcess,
            'mihoyo_genshin_legendary_characters_count' => $this->mihoyoGenshinLegendaryCharactersCount,
            'mihoyo_genshin_constellations_count' => $this->mihoyoGenshinConstellationsCount,
            'mihoyo_genshin_legendary_weapons_count' => $this->mihoyoGenshinLegendaryWeaponsCount,
            'mihoyo_genshin_activity_days' => $this->mihoyoGenshinActivityDays,
            'mihoyo_genshin_currency' => $this->mihoyoGenshinCurrency,
            'mihoyo_honkai_level' => $this->mihoyoHonkaiLevel,
            'mihoyo_honkai_character_count' => $this->mihoyoHonkaiCharacterCount,
            'mihoyo_honkai_achievement_count' => $this->mihoyoHonkaiAchievementCount,
            'mihoyo_honkai_abyss_process' => $this->mihoyoHonkaiAbyssProcess,
            'mihoyo_honkai_legendary_characters_count' => $this->mihoyoHonkaiLegendaryCharactersCount,
            'mihoyo_honkai_eidolons_count' => $this->mihoyoHonkaiEidolonsCount,
            'mihoyo_honkai_legendary_weapons_count' => $this->mihoyoHonkaiLegendaryWeaponsCount,
            'mihoyo_honkai_activity_days' => $this->mihoyoHonkaiActivityDays,
            'mihoyo_honkai_currency' => $this->mihoyoHonkaiCurrency,
            'mihoyo_zenless_level' => $this->mihoyoZenlessLevel,
            'mihoyo_zenless_character_count' => $this->mihoyoZenlessCharacterCount,
            'mihoyo_zenless_achievement_count' => $this->mihoyoZenlessAchievementCount,
            'mihoyo_zenless_abyss_process' => $this->mihoyoZenlessAbyssProcess,
            'mihoyo_zenless_legendary_characters_count' => $this->mihoyoZenlessLegendaryCharactersCount,
            'mihoyo_zenless_cinemas_count' => $this->mihoyoZenlessCinemasCount,
            'mihoyo_zenless_legendary_weapons_count' => $this->mihoyoZenlessLegendaryWeaponsCount,
            'mihoyo_zenless_activity_days' => $this->mihoyoZenlessActivityDays,
            'mihoyo_zenless_currency' => $this->mihoyoZenlessCurrency,
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
            'mihoyoRegionPhrase' => $this->mihoyoRegionPhrase,
            'mihoyoLinkedAccounts' => $this->mihoyoLinkedAccounts?->toArray(),
            'mihoyoLinkedAccountsString' => $this->mihoyoLinkedAccountsString,
            'honkaiCharacters' => $this->honkaiCharacters !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->honkaiCharacters) : null,
            'genshinCharacters' => $this->genshinCharacters !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->genshinCharacters) : null,
            'zenlessCharacters' => $this->zenlessCharacters !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->zenlessCharacters) : null,
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
