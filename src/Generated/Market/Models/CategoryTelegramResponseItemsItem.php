<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryTelegramResponseItemsItem implements JsonSerializable
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
        public readonly int|null $telegramItemId = null, // Telegram
        public readonly string|null $telegramCountry = null, // Telegram
        public readonly int|null $telegramLastSeen = null, // Telegram
        public readonly int|null $telegramPremium = null, // Telegram
        public readonly int|null $telegramStarsCount = null, // Telegram
        public readonly int|null $telegramBirthday = null, // Telegram
        public readonly int|null $telegramPassword = null, // Telegram
        public readonly int|null $telegramPremiumExpires = null, // Telegram
        public readonly mixed $telegramSpamBlock = null, // Telegram
        public readonly int|null $telegramChannelsCount = null, // Telegram
        public readonly int|null $telegramChatsCount = null, // Telegram
        public readonly int|null $telegramAdminCount = null, // Telegram
        public readonly int|null $telegramAdminSubsCount = null, // Telegram
        public readonly int|null $telegramConversationsCount = null, // Telegram
        public readonly int|null $telegramIdCount = null, // Telegram
        public readonly int|null $telegramContactsCount = null, // Telegram
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
        public readonly \Lolzteam\Generated\Market\Models\CategoryTelegramResponseItemsItemBumpSettings|null $bumpSettings = null, // Bump Settings
        public readonly bool|null $canBumpItem = null, // Can Bump Item
        public readonly bool|null $canBuyItem = null, // Can Buy Item
        public readonly int|null $rubPrice = null, // Rub
        public readonly string|null $priceCurrency = null, // Price
        public readonly bool|null $canValidateAccount = null, // Can Validate Account
        public readonly bool|null $canResellItemAfterPurchase = null, // Can Resell Item After Purchase
        public readonly \Lolzteam\Generated\Market\Models\CategoryTelegramResponseItemsItemTelegramGroupCounters|null $telegramGroupCounters = null, // Telegram
        public readonly bool|null $canViewAccountLink = null, // Can View Account Link
        public readonly array|null $accountLinks = null, // Account Links
        public readonly bool|null $canChangePassword = null, // Can Change Password
        public readonly string|null $itemOriginPhrase = null, // Item Origin Phrase
        public readonly mixed $tags = null, // Tags
        public readonly mixed $noteText = null, // Note
        public readonly bool|null $hasPendingAutoBuy = null, // Has Pending Auto Buy
        public readonly string|null $descriptionHtml = null, // Description Html
        public readonly string|null $descriptionEnHtml = null, // Description En Html
        public readonly string|null $descriptionPlain = null, // Description Plain
        public readonly string|null $descriptionEnPlain = null, // Description En Plain
        public readonly \Lolzteam\Generated\Market\Models\CategoryTelegramResponseItemsItemSeller|null $seller = null, // Seller
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
            telegramItemId: $data['telegram_item_id'] ?? null,
            telegramCountry: $data['telegram_country'] ?? null,
            telegramLastSeen: $data['telegram_last_seen'] ?? null,
            telegramPremium: $data['telegram_premium'] ?? null,
            telegramStarsCount: $data['telegram_stars_count'] ?? null,
            telegramBirthday: $data['telegram_birthday'] ?? null,
            telegramPassword: $data['telegram_password'] ?? null,
            telegramPremiumExpires: $data['telegram_premium_expires'] ?? null,
            telegramSpamBlock: $data['telegram_spam_block'] ?? null,
            telegramChannelsCount: $data['telegram_channels_count'] ?? null,
            telegramChatsCount: $data['telegram_chats_count'] ?? null,
            telegramAdminCount: $data['telegram_admin_count'] ?? null,
            telegramAdminSubsCount: $data['telegram_admin_subs_count'] ?? null,
            telegramConversationsCount: $data['telegram_conversations_count'] ?? null,
            telegramIdCount: $data['telegram_id_count'] ?? null,
            telegramContactsCount: $data['telegram_contacts_count'] ?? null,
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
            bumpSettings: isset($data['bumpSettings']) && is_array($data['bumpSettings']) && !empty($data['bumpSettings']) ? \Lolzteam\Generated\Market\Models\CategoryTelegramResponseItemsItemBumpSettings::fromArray($data['bumpSettings']) : null,
            canBumpItem: $data['canBumpItem'] ?? null,
            canBuyItem: $data['canBuyItem'] ?? null,
            rubPrice: $data['rub_price'] ?? null,
            priceCurrency: $data['price_currency'] ?? null,
            canValidateAccount: $data['canValidateAccount'] ?? null,
            canResellItemAfterPurchase: $data['canResellItemAfterPurchase'] ?? null,
            telegramGroupCounters: isset($data['telegram_group_counters']) && is_array($data['telegram_group_counters']) && !empty($data['telegram_group_counters']) ? \Lolzteam\Generated\Market\Models\CategoryTelegramResponseItemsItemTelegramGroupCounters::fromArray($data['telegram_group_counters']) : null,
            canViewAccountLink: $data['canViewAccountLink'] ?? null,
            accountLinks: $data['accountLinks'] ?? null,
            canChangePassword: $data['canChangePassword'] ?? null,
            itemOriginPhrase: $data['itemOriginPhrase'] ?? null,
            tags: $data['tags'] ?? null,
            noteText: $data['note_text'] ?? null,
            hasPendingAutoBuy: $data['hasPendingAutoBuy'] ?? null,
            descriptionHtml: $data['descriptionHtml'] ?? null,
            descriptionEnHtml: $data['descriptionEnHtml'] ?? null,
            descriptionPlain: $data['descriptionPlain'] ?? null,
            descriptionEnPlain: $data['descriptionEnPlain'] ?? null,
            seller: isset($data['seller']) && is_array($data['seller']) && !empty($data['seller']) ? \Lolzteam\Generated\Market\Models\CategoryTelegramResponseItemsItemSeller::fromArray($data['seller']) : null,
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
            'telegram_item_id' => $this->telegramItemId,
            'telegram_country' => $this->telegramCountry,
            'telegram_last_seen' => $this->telegramLastSeen,
            'telegram_premium' => $this->telegramPremium,
            'telegram_stars_count' => $this->telegramStarsCount,
            'telegram_birthday' => $this->telegramBirthday,
            'telegram_password' => $this->telegramPassword,
            'telegram_premium_expires' => $this->telegramPremiumExpires,
            'telegram_spam_block' => $this->telegramSpamBlock,
            'telegram_channels_count' => $this->telegramChannelsCount,
            'telegram_chats_count' => $this->telegramChatsCount,
            'telegram_admin_count' => $this->telegramAdminCount,
            'telegram_admin_subs_count' => $this->telegramAdminSubsCount,
            'telegram_conversations_count' => $this->telegramConversationsCount,
            'telegram_id_count' => $this->telegramIdCount,
            'telegram_contacts_count' => $this->telegramContactsCount,
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
            'telegram_group_counters' => $this->telegramGroupCounters?->toArray(),
            'canViewAccountLink' => $this->canViewAccountLink,
            'accountLinks' => $this->accountLinks,
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
