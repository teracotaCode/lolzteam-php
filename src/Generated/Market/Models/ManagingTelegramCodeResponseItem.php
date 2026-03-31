<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItemAccountLinksItem[]|null $accountLinks Account Links
 * @property-read \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItemExtraPricesItem[]|null $extraPrices Extra Prices
 */
class ManagingTelegramCodeResponseItem implements JsonSerializable
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
        public readonly int|null $pendingDeletionDate = null, // Pending
        public readonly string|null $login = null, // Login
        public readonly string|null $tempEmail = null, // Temp
        public readonly int|null $viewCount = null, // View
        public readonly int|null $isSticky = null, // Is
        public readonly string|null $information = null, // Information
        public readonly string|null $itemOrigin = null, // Item
        public readonly int|null $extendedGuarantee = null, // Extended
        public readonly int|null $nsb = null, // Nsb
        public readonly int|null $allowAskDiscount = null, // Allow
        public readonly string|null $titleEn = null, // Title
        public readonly string|null $descriptionEn = null, // Description
        public readonly string|null $informationEn = null, // Information
        public readonly string|null $emailType = null, // Email
        public readonly string|null $emailProvider = null, // Email
        public readonly string|null $itemDomain = null, // Item
        public readonly string|null $resaleItemOrigin = null, // Resale
        public readonly string|null $noteText = null, // Note
        public readonly mixed $contentType = null, // Content
        public readonly mixed $contentId = null, // Content
        public readonly int|null $deleteDate = null, // Delete
        public readonly int|null $deleteUserId = null, // Delete
        public readonly string|null $deleteUsername = null, // Delete
        public readonly string|null $deleteReason = null, // Delete
        public readonly int|null $userAllowAskDiscount = null, // User
        public readonly int|null $maxDiscountPercent = null, // Max
        public readonly string|null $marketCustomTitle = null, // Market
        public readonly mixed $feedbackData = null, // Feedback
        public readonly int|null $buyerDisplayIconGroupId = null, // Buyer
        public readonly string|null $buyerUniqBanner = null, // Buyer
        public readonly int|null $buyerAvatarDate = null, // Buyer
        public readonly int|null $buyerUserGroupId = null, // Buyer
        public readonly mixed $isFave = null, // Is
        public readonly mixed $inCart = null, // In
        public readonly mixed $cartPrice = null, // Cart
        public readonly bool|null $canResellItem = null, // Can Resell Item
        public readonly float|null $priceWithSellerFee = null, // Price With Seller Fee
        public readonly mixed $guarantee = null, // Guarantee
        public readonly bool|null $canViewLoginData = null, // Can View Login Data
        public readonly bool|null $canUpdateItemStats = null, // Can Update Item Stats
        public readonly bool|null $canReportItem = null, // Can Report Item
        public readonly bool|null $canViewItemViews = null, // Can View Item Views
        public readonly \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItemLoginData|null $loginData = null, // Login Data
        public readonly bool|null $canViewEmailLoginData = null, // Can View Email Login Data
        public readonly \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItemCopyFormatData|null $copyFormatData = null, // Copy Format Data
        public readonly bool|null $showGetEmailCodeButton = null, // Show Get Email Code Button
        public readonly mixed $getEmailCodeDisplayLogin = null, // Get Email Code Display Login
        public readonly \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItemBuyer|null $buyer = null, // Buyer
        public readonly bool|null $isPersonalAccount = null, // Is Personal Account
        public readonly int|null $rubPrice = null, // Rub
        public readonly string|null $priceCurrency = null, // Price
        public readonly string|null $priceWithSellerFeeLabel = null, // Price With Seller Fee Label
        public readonly bool|null $canValidateAccount = null, // Can Validate Account
        public readonly bool|null $canResellItemAfterPurchase = null, // Can Resell Item After Purchase
        public readonly bool|null $isSmallExf = null, // Is Small Exf
        public readonly int|null $accountLastActivity = null, // Account
        public readonly bool|null $canViewAccountLink = null, // Can View Account Link
        public readonly array|null $accountLinks = null, // Account Links
        public readonly string|null $accountLink = null, // Account Link
        public readonly array|null $imagePreviewLinks = null, // Image Preview Links
        public readonly bool|null $canChangePassword = null, // Can Change Password
        public readonly bool|null $canChangeEmailPassword = null, // Can Change Email Password
        public readonly bool|null $uniqueKeyExists = null, // Unique Key Exists
        public readonly string|null $itemOriginPhrase = null, // Item Origin Phrase
        public readonly bool|null $visitorIsAuthor = null, // Visitor Is Author
        public readonly bool|null $canAskDiscount = null, // Can Ask Discount
        public readonly mixed $tags = null, // Tags
        public readonly \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItemCustomFields|null $customFields = null, // Custom Fields
        public readonly array|null $externalAuth = null, // External Auth
        public readonly bool|null $isTrusted = null, // Is Trusted
        public readonly bool|null $isBirthdayToday = null, // Is Birthday Today
        public readonly bool|null $isIgnored = null, // Is Ignored
        public readonly int|null $deposit = null, // Deposit
        public readonly array|null $extraPrices = null, // Extra Prices
        public readonly bool|null $canViewAccountLoginAndTempEmail = null, // Can View Account Login And Temp Email
        public readonly \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItemBumpSettings|null $bumpSettings = null, // Bump Settings
        public readonly bool|null $canCheckGuarantee = null, // Can Check Guarantee
        public readonly bool|null $canShareItem = null, // Can Share Item
        public readonly bool|null $canCheckAiPrice = null, // Can Check Ai Price
        public readonly int|null $aiPrice = null, // Ai Price
        public readonly int|null $aiPriceCheckDate = null, // Ai Price Check Date
        public readonly bool|null $needToRequireVideoToViewLoginData = null, // Need To Require Video To View Login Data
        public readonly bool|null $canCheckAutoBuyPrice = null, // Can Check Auto Buy Price
        public readonly int|null $autoBuyPrice = null, // Auto Buy Price
        public readonly int|null $autoBuyPriceCheckDate = null, // Auto Buy Price Check Date
        public readonly string|null $descriptionHtml = null, // Description Html
        public readonly string|null $descriptionEnHtml = null, // Description En Html
        public readonly string|null $descriptionPlain = null, // Description Plain
        public readonly string|null $descriptionEnPlain = null, // Description En Plain
        public readonly \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItemSeller|null $seller = null, // Seller
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
            pendingDeletionDate: $data['pending_deletion_date'] ?? null,
            login: $data['login'] ?? null,
            tempEmail: $data['temp_email'] ?? null,
            viewCount: $data['view_count'] ?? null,
            isSticky: $data['is_sticky'] ?? null,
            information: $data['information'] ?? null,
            itemOrigin: $data['item_origin'] ?? null,
            extendedGuarantee: $data['extended_guarantee'] ?? null,
            nsb: $data['nsb'] ?? null,
            allowAskDiscount: $data['allow_ask_discount'] ?? null,
            titleEn: $data['title_en'] ?? null,
            descriptionEn: $data['description_en'] ?? null,
            informationEn: $data['information_en'] ?? null,
            emailType: $data['email_type'] ?? null,
            emailProvider: $data['email_provider'] ?? null,
            itemDomain: $data['item_domain'] ?? null,
            resaleItemOrigin: $data['resale_item_origin'] ?? null,
            noteText: $data['note_text'] ?? null,
            contentType: $data['content_type'] ?? null,
            contentId: $data['content_id'] ?? null,
            deleteDate: $data['delete_date'] ?? null,
            deleteUserId: $data['delete_user_id'] ?? null,
            deleteUsername: $data['delete_username'] ?? null,
            deleteReason: $data['delete_reason'] ?? null,
            userAllowAskDiscount: $data['user_allow_ask_discount'] ?? null,
            maxDiscountPercent: $data['max_discount_percent'] ?? null,
            marketCustomTitle: $data['market_custom_title'] ?? null,
            feedbackData: $data['feedback_data'] ?? null,
            buyerDisplayIconGroupId: $data['buyer_display_icon_group_id'] ?? null,
            buyerUniqBanner: $data['buyer_uniq_banner'] ?? null,
            buyerAvatarDate: $data['buyer_avatar_date'] ?? null,
            buyerUserGroupId: $data['buyer_user_group_id'] ?? null,
            isFave: $data['is_fave'] ?? null,
            inCart: $data['in_cart'] ?? null,
            cartPrice: $data['cart_price'] ?? null,
            canResellItem: $data['canResellItem'] ?? null,
            priceWithSellerFee: $data['priceWithSellerFee'] ?? null,
            guarantee: $data['guarantee'] ?? null,
            canViewLoginData: $data['canViewLoginData'] ?? null,
            canUpdateItemStats: $data['canUpdateItemStats'] ?? null,
            canReportItem: $data['canReportItem'] ?? null,
            canViewItemViews: $data['canViewItemViews'] ?? null,
            loginData: isset($data['loginData']) && is_array($data['loginData']) && !empty($data['loginData']) ? \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItemLoginData::fromArray($data['loginData']) : null,
            canViewEmailLoginData: $data['canViewEmailLoginData'] ?? null,
            copyFormatData: isset($data['copyFormatData']) && is_array($data['copyFormatData']) && !empty($data['copyFormatData']) ? \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItemCopyFormatData::fromArray($data['copyFormatData']) : null,
            showGetEmailCodeButton: $data['showGetEmailCodeButton'] ?? null,
            getEmailCodeDisplayLogin: $data['getEmailCodeDisplayLogin'] ?? null,
            buyer: isset($data['buyer']) && is_array($data['buyer']) && !empty($data['buyer']) ? \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItemBuyer::fromArray($data['buyer']) : null,
            isPersonalAccount: $data['isPersonalAccount'] ?? null,
            rubPrice: $data['rub_price'] ?? null,
            priceCurrency: $data['price_currency'] ?? null,
            priceWithSellerFeeLabel: $data['priceWithSellerFeeLabel'] ?? null,
            canValidateAccount: $data['canValidateAccount'] ?? null,
            canResellItemAfterPurchase: $data['canResellItemAfterPurchase'] ?? null,
            isSmallExf: $data['isSmallExf'] ?? null,
            accountLastActivity: $data['account_last_activity'] ?? null,
            canViewAccountLink: $data['canViewAccountLink'] ?? null,
            accountLinks: isset($data['accountLinks']) && is_array($data['accountLinks']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItemAccountLinksItem::fromArray($item), $data['accountLinks']) : null,
            accountLink: $data['accountLink'] ?? null,
            imagePreviewLinks: $data['imagePreviewLinks'] ?? null,
            canChangePassword: $data['canChangePassword'] ?? null,
            canChangeEmailPassword: $data['canChangeEmailPassword'] ?? null,
            uniqueKeyExists: $data['uniqueKeyExists'] ?? null,
            itemOriginPhrase: $data['itemOriginPhrase'] ?? null,
            visitorIsAuthor: $data['visitorIsAuthor'] ?? null,
            canAskDiscount: $data['canAskDiscount'] ?? null,
            tags: $data['tags'] ?? null,
            customFields: isset($data['customFields']) && is_array($data['customFields']) && !empty($data['customFields']) ? \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItemCustomFields::fromArray($data['customFields']) : null,
            externalAuth: $data['externalAuth'] ?? null,
            isTrusted: $data['isTrusted'] ?? null,
            isBirthdayToday: $data['isBirthdayToday'] ?? null,
            isIgnored: $data['isIgnored'] ?? null,
            deposit: $data['deposit'] ?? null,
            extraPrices: isset($data['extraPrices']) && is_array($data['extraPrices']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItemExtraPricesItem::fromArray($item), $data['extraPrices']) : null,
            canViewAccountLoginAndTempEmail: $data['canViewAccountLoginAndTempEmail'] ?? null,
            bumpSettings: isset($data['bumpSettings']) && is_array($data['bumpSettings']) && !empty($data['bumpSettings']) ? \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItemBumpSettings::fromArray($data['bumpSettings']) : null,
            canCheckGuarantee: $data['canCheckGuarantee'] ?? null,
            canShareItem: $data['canShareItem'] ?? null,
            canCheckAiPrice: $data['canCheckAiPrice'] ?? null,
            aiPrice: $data['aiPrice'] ?? null,
            aiPriceCheckDate: $data['aiPriceCheckDate'] ?? null,
            needToRequireVideoToViewLoginData: $data['needToRequireVideoToViewLoginData'] ?? null,
            canCheckAutoBuyPrice: $data['canCheckAutoBuyPrice'] ?? null,
            autoBuyPrice: $data['autoBuyPrice'] ?? null,
            autoBuyPriceCheckDate: $data['autoBuyPriceCheckDate'] ?? null,
            descriptionHtml: $data['descriptionHtml'] ?? null,
            descriptionEnHtml: $data['descriptionEnHtml'] ?? null,
            descriptionPlain: $data['descriptionPlain'] ?? null,
            descriptionEnPlain: $data['descriptionEnPlain'] ?? null,
            seller: isset($data['seller']) && is_array($data['seller']) && !empty($data['seller']) ? \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponseItemSeller::fromArray($data['seller']) : null,
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
            'pending_deletion_date' => $this->pendingDeletionDate,
            'login' => $this->login,
            'temp_email' => $this->tempEmail,
            'view_count' => $this->viewCount,
            'is_sticky' => $this->isSticky,
            'information' => $this->information,
            'item_origin' => $this->itemOrigin,
            'extended_guarantee' => $this->extendedGuarantee,
            'nsb' => $this->nsb,
            'allow_ask_discount' => $this->allowAskDiscount,
            'title_en' => $this->titleEn,
            'description_en' => $this->descriptionEn,
            'information_en' => $this->informationEn,
            'email_type' => $this->emailType,
            'email_provider' => $this->emailProvider,
            'item_domain' => $this->itemDomain,
            'resale_item_origin' => $this->resaleItemOrigin,
            'note_text' => $this->noteText,
            'content_type' => $this->contentType,
            'content_id' => $this->contentId,
            'delete_date' => $this->deleteDate,
            'delete_user_id' => $this->deleteUserId,
            'delete_username' => $this->deleteUsername,
            'delete_reason' => $this->deleteReason,
            'user_allow_ask_discount' => $this->userAllowAskDiscount,
            'max_discount_percent' => $this->maxDiscountPercent,
            'market_custom_title' => $this->marketCustomTitle,
            'feedback_data' => $this->feedbackData,
            'buyer_display_icon_group_id' => $this->buyerDisplayIconGroupId,
            'buyer_uniq_banner' => $this->buyerUniqBanner,
            'buyer_avatar_date' => $this->buyerAvatarDate,
            'buyer_user_group_id' => $this->buyerUserGroupId,
            'is_fave' => $this->isFave,
            'in_cart' => $this->inCart,
            'cart_price' => $this->cartPrice,
            'canResellItem' => $this->canResellItem,
            'priceWithSellerFee' => $this->priceWithSellerFee,
            'guarantee' => $this->guarantee,
            'canViewLoginData' => $this->canViewLoginData,
            'canUpdateItemStats' => $this->canUpdateItemStats,
            'canReportItem' => $this->canReportItem,
            'canViewItemViews' => $this->canViewItemViews,
            'loginData' => $this->loginData?->toArray(),
            'canViewEmailLoginData' => $this->canViewEmailLoginData,
            'copyFormatData' => $this->copyFormatData?->toArray(),
            'showGetEmailCodeButton' => $this->showGetEmailCodeButton,
            'getEmailCodeDisplayLogin' => $this->getEmailCodeDisplayLogin,
            'buyer' => $this->buyer?->toArray(),
            'isPersonalAccount' => $this->isPersonalAccount,
            'rub_price' => $this->rubPrice,
            'price_currency' => $this->priceCurrency,
            'priceWithSellerFeeLabel' => $this->priceWithSellerFeeLabel,
            'canValidateAccount' => $this->canValidateAccount,
            'canResellItemAfterPurchase' => $this->canResellItemAfterPurchase,
            'isSmallExf' => $this->isSmallExf,
            'account_last_activity' => $this->accountLastActivity,
            'canViewAccountLink' => $this->canViewAccountLink,
            'accountLinks' => $this->accountLinks !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->accountLinks) : null,
            'accountLink' => $this->accountLink,
            'imagePreviewLinks' => $this->imagePreviewLinks,
            'canChangePassword' => $this->canChangePassword,
            'canChangeEmailPassword' => $this->canChangeEmailPassword,
            'uniqueKeyExists' => $this->uniqueKeyExists,
            'itemOriginPhrase' => $this->itemOriginPhrase,
            'visitorIsAuthor' => $this->visitorIsAuthor,
            'canAskDiscount' => $this->canAskDiscount,
            'tags' => $this->tags,
            'customFields' => $this->customFields?->toArray(),
            'externalAuth' => $this->externalAuth,
            'isTrusted' => $this->isTrusted,
            'isBirthdayToday' => $this->isBirthdayToday,
            'isIgnored' => $this->isIgnored,
            'deposit' => $this->deposit,
            'extraPrices' => $this->extraPrices !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->extraPrices) : null,
            'canViewAccountLoginAndTempEmail' => $this->canViewAccountLoginAndTempEmail,
            'bumpSettings' => $this->bumpSettings?->toArray(),
            'canCheckGuarantee' => $this->canCheckGuarantee,
            'canShareItem' => $this->canShareItem,
            'canCheckAiPrice' => $this->canCheckAiPrice,
            'aiPrice' => $this->aiPrice,
            'aiPriceCheckDate' => $this->aiPriceCheckDate,
            'needToRequireVideoToViewLoginData' => $this->needToRequireVideoToViewLoginData,
            'canCheckAutoBuyPrice' => $this->canCheckAutoBuyPrice,
            'autoBuyPrice' => $this->autoBuyPrice,
            'autoBuyPriceCheckDate' => $this->autoBuyPriceCheckDate,
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
