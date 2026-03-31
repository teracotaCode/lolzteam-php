<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryParamsResponseCategory implements JsonSerializable
{
    public function __construct(
        public readonly int|null $categoryId = null, // Category
        public readonly int|null $subCategoryId = null, // Sub
        public readonly int|null $categoryOrder = null, // Category
        public readonly string|null $categoryTitle = null, // Category
        public readonly string|null $categoryName = null, // Category
        public readonly string|null $categoryUrl = null, // Category
        public readonly string|null $categoryDescriptionHtml = null, // Category
        public readonly string|null $categoryLoginUrl = null, // Category
        public readonly int|null $addItemAvailable = null, // Add
        public readonly int|null $massUploadItemAvailable = null, // Mass
        public readonly int|null $hasGuarantee = null, // Has
        public readonly int|null $hasAccountLink = null, // Has
        public readonly int|null $requireTempEmail = null, // Require
        public readonly string|null $recoveryLink = null, // Recovery
        public readonly int|null $checkButtonEnabled = null, // Check
        public readonly int|null $checkerEnabled = null, // Checker
        public readonly int|null $supportPersonalProxy = null, // Support
        public readonly int|null $supportEmailLoginData = null, // Support
        public readonly int|null $requireEmailLoginData = null, // Require
        public readonly int|null $displayInList = null, // Display
        public readonly string|null $categoryDescriptionHtmlEn = null, // Category
        public readonly string|null $categoryH1HtmlEn = null, // Category
        public readonly int|null $accountPriceMin = null, // Account
        public readonly int|null $requireVideoRecording = null, // Require
        public readonly string|null $topQueries = null, // Top
        public readonly int|null $requireEldForNativeAccs = null, // Require
        public readonly int|null $canBeResold = null, // Can
        public readonly int|null $supportTempEmail = null, // Support
        public readonly string|null $cookies = null, // Cookies
        public readonly string|null $loginType = null, // Login
        public readonly int|null $guestHidden = null, // Guest
        public readonly int|null $availableTempEmail = null, // Available
        public readonly int|null $resaleDurationLimitDays = null, // Resale
        public readonly int|null $buyWithoutValidation = null, // Buy
        public readonly int|null $maxInvalidUploadTries = null, // Max
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            categoryId: $data['category_id'] ?? null,
            subCategoryId: $data['sub_category_id'] ?? null,
            categoryOrder: $data['category_order'] ?? null,
            categoryTitle: $data['category_title'] ?? null,
            categoryName: $data['category_name'] ?? null,
            categoryUrl: $data['category_url'] ?? null,
            categoryDescriptionHtml: $data['category_description_html'] ?? null,
            categoryLoginUrl: $data['category_login_url'] ?? null,
            addItemAvailable: $data['add_item_available'] ?? null,
            massUploadItemAvailable: $data['mass_upload_item_available'] ?? null,
            hasGuarantee: $data['has_guarantee'] ?? null,
            hasAccountLink: $data['has_account_link'] ?? null,
            requireTempEmail: $data['require_temp_email'] ?? null,
            recoveryLink: $data['recovery_link'] ?? null,
            checkButtonEnabled: $data['check_button_enabled'] ?? null,
            checkerEnabled: $data['checker_enabled'] ?? null,
            supportPersonalProxy: $data['support_personal_proxy'] ?? null,
            supportEmailLoginData: $data['support_email_login_data'] ?? null,
            requireEmailLoginData: $data['require_email_login_data'] ?? null,
            displayInList: $data['display_in_list'] ?? null,
            categoryDescriptionHtmlEn: $data['category_description_html_en'] ?? null,
            categoryH1HtmlEn: $data['category_h1_html_en'] ?? null,
            accountPriceMin: $data['account_price_min'] ?? null,
            requireVideoRecording: $data['require_video_recording'] ?? null,
            topQueries: $data['top_queries'] ?? null,
            requireEldForNativeAccs: $data['require_eld_for_native_accs'] ?? null,
            canBeResold: $data['can_be_resold'] ?? null,
            supportTempEmail: $data['support_temp_email'] ?? null,
            cookies: $data['cookies'] ?? null,
            loginType: $data['login_type'] ?? null,
            guestHidden: $data['guest_hidden'] ?? null,
            availableTempEmail: $data['available_temp_email'] ?? null,
            resaleDurationLimitDays: $data['resale_duration_limit_days'] ?? null,
            buyWithoutValidation: $data['buy_without_validation'] ?? null,
            maxInvalidUploadTries: $data['max_invalid_upload_tries'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'category_id' => $this->categoryId,
            'sub_category_id' => $this->subCategoryId,
            'category_order' => $this->categoryOrder,
            'category_title' => $this->categoryTitle,
            'category_name' => $this->categoryName,
            'category_url' => $this->categoryUrl,
            'category_description_html' => $this->categoryDescriptionHtml,
            'category_login_url' => $this->categoryLoginUrl,
            'add_item_available' => $this->addItemAvailable,
            'mass_upload_item_available' => $this->massUploadItemAvailable,
            'has_guarantee' => $this->hasGuarantee,
            'has_account_link' => $this->hasAccountLink,
            'require_temp_email' => $this->requireTempEmail,
            'recovery_link' => $this->recoveryLink,
            'check_button_enabled' => $this->checkButtonEnabled,
            'checker_enabled' => $this->checkerEnabled,
            'support_personal_proxy' => $this->supportPersonalProxy,
            'support_email_login_data' => $this->supportEmailLoginData,
            'require_email_login_data' => $this->requireEmailLoginData,
            'display_in_list' => $this->displayInList,
            'category_description_html_en' => $this->categoryDescriptionHtmlEn,
            'category_h1_html_en' => $this->categoryH1HtmlEn,
            'account_price_min' => $this->accountPriceMin,
            'require_video_recording' => $this->requireVideoRecording,
            'top_queries' => $this->topQueries,
            'require_eld_for_native_accs' => $this->requireEldForNativeAccs,
            'can_be_resold' => $this->canBeResold,
            'support_temp_email' => $this->supportTempEmail,
            'cookies' => $this->cookies,
            'login_type' => $this->loginType,
            'guest_hidden' => $this->guestHidden,
            'available_temp_email' => $this->availableTempEmail,
            'resale_duration_limit_days' => $this->resaleDurationLimitDays,
            'buy_without_validation' => $this->buyWithoutValidation,
            'max_invalid_upload_tries' => $this->maxInvalidUploadTries,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
