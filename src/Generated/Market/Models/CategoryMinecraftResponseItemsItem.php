<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\CategoryMinecraftResponseItemsItemAccountLinksItem[]|null $accountLinks Account Links
 */
class CategoryMinecraftResponseItemsItem implements JsonSerializable
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
        public readonly int|null $minecraftItemId = null, // Minecraft
        public readonly string|null $minecraftId = null, // Minecraft
        public readonly string|null $minecraftNickname = null, // Minecraft
        public readonly string|null $minecraftCountry = null, // Minecraft
        public readonly string|null $minecraftSkin = null, // Minecraft
        public readonly int|null $minecraftJava = null, // Minecraft
        public readonly int|null $minecraftBedrock = null, // Minecraft
        public readonly int|null $minecraftCanChangeNickname = null, // Minecraft
        public readonly int|null $minecraftCreatedAt = null, // Minecraft
        public readonly string|null $minecraftHypixelRank = null, // Minecraft
        public readonly int|null $minecraftHypixelLevel = null, // Minecraft
        public readonly int|null $minecraftHypixelAchievement = null, // Minecraft
        public readonly int|null $minecraftHypixelLastLogin = null, // Minecraft
        public readonly int|null $minecraftHypixelBan = null, // Minecraft
        public readonly string|null $minecraftHypixelBanReason = null, // Minecraft
        public readonly int|null $minecraftHypixelSkyblockLevel = null, // Minecraft
        public readonly int|null $minecraftHypixelSkyblockNetWorth = null, // Minecraft
        public readonly int|null $minecraftDungeons = null, // Minecraft
        public readonly int|null $minecraftLegends = null, // Minecraft
        public readonly int|null $minecraftCapesCount = null, // Minecraft
        public readonly array|null $minecraftCapes = null, // Minecraft
        public readonly string|null $minecraftSubscriptionName = null, // Minecraft
        public readonly int|null $minecraftSubscriptionEnds = null, // Minecraft
        public readonly int|null $minecraftSubscriptionAutoRenew = null, // Minecraft
        public readonly int|null $minecraftEmailResetDate = null, // Minecraft
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
        public readonly \Lolzteam\Generated\Market\Models\CategoryMinecraftResponseItemsItemBumpSettings|null $bumpSettings = null, // Bump Settings
        public readonly bool|null $canBumpItem = null, // Can Bump Item
        public readonly bool|null $canBuyItem = null, // Can Buy Item
        public readonly int|null $rubPrice = null, // Rub
        public readonly string|null $priceCurrency = null, // Price
        public readonly bool|null $canValidateAccount = null, // Can Validate Account
        public readonly bool|null $canResellItemAfterPurchase = null, // Can Resell Item After Purchase
        public readonly bool|null $minecraftHasPaidLicense = null, // Minecraft Has Paid License
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
        public readonly \Lolzteam\Generated\Market\Models\CategoryMinecraftResponseItemsItemSeller|null $seller = null, // Seller
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
            minecraftItemId: $data['minecraft_item_id'] ?? null,
            minecraftId: $data['minecraft_id'] ?? null,
            minecraftNickname: $data['minecraft_nickname'] ?? null,
            minecraftCountry: $data['minecraft_country'] ?? null,
            minecraftSkin: $data['minecraft_skin'] ?? null,
            minecraftJava: $data['minecraft_java'] ?? null,
            minecraftBedrock: $data['minecraft_bedrock'] ?? null,
            minecraftCanChangeNickname: $data['minecraft_can_change_nickname'] ?? null,
            minecraftCreatedAt: $data['minecraft_created_at'] ?? null,
            minecraftHypixelRank: $data['minecraft_hypixel_rank'] ?? null,
            minecraftHypixelLevel: $data['minecraft_hypixel_level'] ?? null,
            minecraftHypixelAchievement: $data['minecraft_hypixel_achievement'] ?? null,
            minecraftHypixelLastLogin: $data['minecraft_hypixel_last_login'] ?? null,
            minecraftHypixelBan: $data['minecraft_hypixel_ban'] ?? null,
            minecraftHypixelBanReason: $data['minecraft_hypixel_ban_reason'] ?? null,
            minecraftHypixelSkyblockLevel: $data['minecraft_hypixel_skyblock_level'] ?? null,
            minecraftHypixelSkyblockNetWorth: $data['minecraft_hypixel_skyblock_net_worth'] ?? null,
            minecraftDungeons: $data['minecraft_dungeons'] ?? null,
            minecraftLegends: $data['minecraft_legends'] ?? null,
            minecraftCapesCount: $data['minecraft_capes_count'] ?? null,
            minecraftCapes: $data['minecraft_capes'] ?? null,
            minecraftSubscriptionName: $data['minecraft_subscription_name'] ?? null,
            minecraftSubscriptionEnds: $data['minecraft_subscription_ends'] ?? null,
            minecraftSubscriptionAutoRenew: $data['minecraft_subscription_auto_renew'] ?? null,
            minecraftEmailResetDate: $data['minecraft_email_reset_date'] ?? null,
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
            bumpSettings: isset($data['bumpSettings']) && is_array($data['bumpSettings']) && !empty($data['bumpSettings']) ? \Lolzteam\Generated\Market\Models\CategoryMinecraftResponseItemsItemBumpSettings::fromArray($data['bumpSettings']) : null,
            canBumpItem: $data['canBumpItem'] ?? null,
            canBuyItem: $data['canBuyItem'] ?? null,
            rubPrice: $data['rub_price'] ?? null,
            priceCurrency: $data['price_currency'] ?? null,
            canValidateAccount: $data['canValidateAccount'] ?? null,
            canResellItemAfterPurchase: $data['canResellItemAfterPurchase'] ?? null,
            minecraftHasPaidLicense: $data['minecraftHasPaidLicense'] ?? null,
            canViewAccountLink: $data['canViewAccountLink'] ?? null,
            accountLinks: isset($data['accountLinks']) && is_array($data['accountLinks']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryMinecraftResponseItemsItemAccountLinksItem::fromArray($item), $data['accountLinks']) : null,
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
            seller: isset($data['seller']) && is_array($data['seller']) && !empty($data['seller']) ? \Lolzteam\Generated\Market\Models\CategoryMinecraftResponseItemsItemSeller::fromArray($data['seller']) : null,
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
            'minecraft_item_id' => $this->minecraftItemId,
            'minecraft_id' => $this->minecraftId,
            'minecraft_nickname' => $this->minecraftNickname,
            'minecraft_country' => $this->minecraftCountry,
            'minecraft_skin' => $this->minecraftSkin,
            'minecraft_java' => $this->minecraftJava,
            'minecraft_bedrock' => $this->minecraftBedrock,
            'minecraft_can_change_nickname' => $this->minecraftCanChangeNickname,
            'minecraft_created_at' => $this->minecraftCreatedAt,
            'minecraft_hypixel_rank' => $this->minecraftHypixelRank,
            'minecraft_hypixel_level' => $this->minecraftHypixelLevel,
            'minecraft_hypixel_achievement' => $this->minecraftHypixelAchievement,
            'minecraft_hypixel_last_login' => $this->minecraftHypixelLastLogin,
            'minecraft_hypixel_ban' => $this->minecraftHypixelBan,
            'minecraft_hypixel_ban_reason' => $this->minecraftHypixelBanReason,
            'minecraft_hypixel_skyblock_level' => $this->minecraftHypixelSkyblockLevel,
            'minecraft_hypixel_skyblock_net_worth' => $this->minecraftHypixelSkyblockNetWorth,
            'minecraft_dungeons' => $this->minecraftDungeons,
            'minecraft_legends' => $this->minecraftLegends,
            'minecraft_capes_count' => $this->minecraftCapesCount,
            'minecraft_capes' => $this->minecraftCapes,
            'minecraft_subscription_name' => $this->minecraftSubscriptionName,
            'minecraft_subscription_ends' => $this->minecraftSubscriptionEnds,
            'minecraft_subscription_auto_renew' => $this->minecraftSubscriptionAutoRenew,
            'minecraft_email_reset_date' => $this->minecraftEmailResetDate,
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
            'minecraftHasPaidLicense' => $this->minecraftHasPaidLicense,
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
