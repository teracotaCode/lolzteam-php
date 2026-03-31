<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\UserModelBalancesItem[]|null $balances Balances
 * @property-read \Lolzteam\Generated\Market\Models\UserModelPublicTagsItem[]|null $publicTags Public
 */
class UserModel implements JsonSerializable
{
    public function __construct(
        public readonly int|null $activeItemsCount = null, // Active
        public readonly bool|null $activityVisible = null, // Activity
        public readonly int|null $age = null, // Age
        public readonly string|null $balance = null, // Balance
        public readonly array|null $balances = null, // Balances
        public readonly int|null $bumpItemPeriod = null, // Bump
        public readonly bool|null $canEdit = null, // Can
        public readonly bool|null $canFollow = null, // Can
        public readonly bool|null $canIgnore = null, // Can
        public readonly bool|null $canPostProfile = null, // Can
        public readonly bool|null $canViewProfile = null, // Can
        public readonly bool|null $canViewProfilePosts = null, // Can
        public readonly bool|null $canWarn = null, // Can
        public readonly int|null $contestCount = null, // Contest
        public readonly string|null $convWelcomeMessage = null, // Conv
        public readonly int|null $convertedBalance = null, // Converted Balance
        public readonly int|null $convertedDeposit = null, // Converted Deposit
        public readonly int|null $convertedHold = null, // Converted Hold
        public readonly string|null $currency = null, // Currency
        public readonly string|null $currencyPhrase = null, // Currency Phrase
        public readonly string|null $customAccountDownloadFormat = null, // Custom
        public readonly \Lolzteam\Generated\Market\Models\UserModelCustomFields|null $customFields = null, // Custom
        public readonly string|null $customTitle = null, // Custom
        public readonly int|null $deposit = null, // Deposit
        public readonly \Lolzteam\Generated\Market\Models\UserModelDob|null $dob = null, // Dob
        public readonly mixed $feedbackData = null, // Feedback
        public readonly string|null $hold = null, // Hold
        public readonly string|null $homepage = null, // Homepage
        public readonly mixed $imapData = null, // Imap
        public readonly bool|null $isAdmin = null, // Is
        public readonly bool|null $isBanned = null, // Is
        public readonly bool|null $isFollowed = null, // Is
        public readonly bool|null $isIgnored = null, // Is
        public readonly bool|null $isModerator = null, // Is
        public readonly bool|null $isStaff = null, // Is
        public readonly bool|null $isSuperAdmin = null, // Is
        public readonly int|null $joinedDate = null, // Joined
        public readonly int|null $lastActivity = null, // Last
        public readonly int|null $like2Count = null, // Like
        public readonly int|null $likeCount = null, // Like
        public readonly string|null $location = null, // Location
        public readonly string|null $marketCustomTitle = null, // Market
        public readonly int|null $maxDiscountPercent = null, // Max
        public readonly int|null $messageCount = null, // Message
        public readonly int|null $paidMailLeft = null, // Paid
        public readonly array|null $publicTags = null, // Public
        public readonly int|null $registerDate = null, // Register
        public readonly \Lolzteam\Generated\Market\Models\UserModelRendered|null $rendered = null, // Rendered
        public readonly int|null $restoreCount = null, // Restore
        public readonly mixed $restoreData = null, // Restore
        public readonly string|null $shortLink = null, // Short
        public readonly int|null $soldItemsCount = null, // Sold
        public readonly mixed $tags = null, // Tags
        public readonly mixed $telegramClient = null, // Telegram
        public readonly int|null $trophyPoints = null, // Trophy
        public readonly bool|null $userAllowAskDiscount = null, // User
        public readonly int|null $userId = null, // User
        public readonly string|null $userTitle = null, // User
        public readonly string|null $username = null, // Username
        public readonly string|null $viewUrl = null, // View
        public readonly bool|null $visible = null, // Visible
        public readonly int|null $warningPoints = null, // Warning
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            activeItemsCount: $data['active_items_count'] ?? null,
            activityVisible: $data['activity_visible'] ?? null,
            age: $data['age'] ?? null,
            balance: $data['balance'] ?? null,
            balances: isset($data['balances']) && is_array($data['balances']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\UserModelBalancesItem::fromArray($item), $data['balances']) : null,
            bumpItemPeriod: $data['bump_item_period'] ?? null,
            canEdit: $data['can_edit'] ?? null,
            canFollow: $data['can_follow'] ?? null,
            canIgnore: $data['can_ignore'] ?? null,
            canPostProfile: $data['can_post_profile'] ?? null,
            canViewProfile: $data['can_view_profile'] ?? null,
            canViewProfilePosts: $data['can_view_profile_posts'] ?? null,
            canWarn: $data['can_warn'] ?? null,
            contestCount: $data['contest_count'] ?? null,
            convWelcomeMessage: $data['conv_welcome_message'] ?? null,
            convertedBalance: $data['convertedBalance'] ?? null,
            convertedDeposit: $data['convertedDeposit'] ?? null,
            convertedHold: $data['convertedHold'] ?? null,
            currency: $data['currency'] ?? null,
            currencyPhrase: $data['currencyPhrase'] ?? null,
            customAccountDownloadFormat: $data['custom_account_download_format'] ?? null,
            customFields: isset($data['custom_fields']) && is_array($data['custom_fields']) && !empty($data['custom_fields']) ? \Lolzteam\Generated\Market\Models\UserModelCustomFields::fromArray($data['custom_fields']) : null,
            customTitle: $data['custom_title'] ?? null,
            deposit: $data['deposit'] ?? null,
            dob: isset($data['dob']) && is_array($data['dob']) && !empty($data['dob']) ? \Lolzteam\Generated\Market\Models\UserModelDob::fromArray($data['dob']) : null,
            feedbackData: $data['feedback_data'] ?? null,
            hold: $data['hold'] ?? null,
            homepage: $data['homepage'] ?? null,
            imapData: $data['imap_data'] ?? null,
            isAdmin: $data['is_admin'] ?? null,
            isBanned: $data['is_banned'] ?? null,
            isFollowed: $data['is_followed'] ?? null,
            isIgnored: $data['is_ignored'] ?? null,
            isModerator: $data['is_moderator'] ?? null,
            isStaff: $data['is_staff'] ?? null,
            isSuperAdmin: $data['is_super_admin'] ?? null,
            joinedDate: $data['joined_date'] ?? null,
            lastActivity: $data['last_activity'] ?? null,
            like2Count: $data['like2_count'] ?? null,
            likeCount: $data['like_count'] ?? null,
            location: $data['location'] ?? null,
            marketCustomTitle: $data['market_custom_title'] ?? null,
            maxDiscountPercent: $data['max_discount_percent'] ?? null,
            messageCount: $data['message_count'] ?? null,
            paidMailLeft: $data['paid_mail_left'] ?? null,
            publicTags: isset($data['public_tags']) && is_array($data['public_tags']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\UserModelPublicTagsItem::fromArray($item), $data['public_tags']) : null,
            registerDate: $data['register_date'] ?? null,
            rendered: isset($data['rendered']) && is_array($data['rendered']) && !empty($data['rendered']) ? \Lolzteam\Generated\Market\Models\UserModelRendered::fromArray($data['rendered']) : null,
            restoreCount: $data['restore_count'] ?? null,
            restoreData: $data['restore_data'] ?? null,
            shortLink: $data['short_link'] ?? null,
            soldItemsCount: $data['sold_items_count'] ?? null,
            tags: $data['tags'] ?? null,
            telegramClient: $data['telegram_client'] ?? null,
            trophyPoints: $data['trophy_points'] ?? null,
            userAllowAskDiscount: $data['user_allow_ask_discount'] ?? null,
            userId: $data['user_id'] ?? null,
            userTitle: $data['user_title'] ?? null,
            username: $data['username'] ?? null,
            viewUrl: $data['view_url'] ?? null,
            visible: $data['visible'] ?? null,
            warningPoints: $data['warning_points'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'active_items_count' => $this->activeItemsCount,
            'activity_visible' => $this->activityVisible,
            'age' => $this->age,
            'balance' => $this->balance,
            'balances' => $this->balances !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->balances) : null,
            'bump_item_period' => $this->bumpItemPeriod,
            'can_edit' => $this->canEdit,
            'can_follow' => $this->canFollow,
            'can_ignore' => $this->canIgnore,
            'can_post_profile' => $this->canPostProfile,
            'can_view_profile' => $this->canViewProfile,
            'can_view_profile_posts' => $this->canViewProfilePosts,
            'can_warn' => $this->canWarn,
            'contest_count' => $this->contestCount,
            'conv_welcome_message' => $this->convWelcomeMessage,
            'convertedBalance' => $this->convertedBalance,
            'convertedDeposit' => $this->convertedDeposit,
            'convertedHold' => $this->convertedHold,
            'currency' => $this->currency,
            'currencyPhrase' => $this->currencyPhrase,
            'custom_account_download_format' => $this->customAccountDownloadFormat,
            'custom_fields' => $this->customFields?->toArray(),
            'custom_title' => $this->customTitle,
            'deposit' => $this->deposit,
            'dob' => $this->dob?->toArray(),
            'feedback_data' => $this->feedbackData,
            'hold' => $this->hold,
            'homepage' => $this->homepage,
            'imap_data' => $this->imapData,
            'is_admin' => $this->isAdmin,
            'is_banned' => $this->isBanned,
            'is_followed' => $this->isFollowed,
            'is_ignored' => $this->isIgnored,
            'is_moderator' => $this->isModerator,
            'is_staff' => $this->isStaff,
            'is_super_admin' => $this->isSuperAdmin,
            'joined_date' => $this->joinedDate,
            'last_activity' => $this->lastActivity,
            'like2_count' => $this->like2Count,
            'like_count' => $this->likeCount,
            'location' => $this->location,
            'market_custom_title' => $this->marketCustomTitle,
            'max_discount_percent' => $this->maxDiscountPercent,
            'message_count' => $this->messageCount,
            'paid_mail_left' => $this->paidMailLeft,
            'public_tags' => $this->publicTags !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->publicTags) : null,
            'register_date' => $this->registerDate,
            'rendered' => $this->rendered?->toArray(),
            'restore_count' => $this->restoreCount,
            'restore_data' => $this->restoreData,
            'short_link' => $this->shortLink,
            'sold_items_count' => $this->soldItemsCount,
            'tags' => $this->tags,
            'telegram_client' => $this->telegramClient,
            'trophy_points' => $this->trophyPoints,
            'user_allow_ask_discount' => $this->userAllowAskDiscount,
            'user_id' => $this->userId,
            'user_title' => $this->userTitle,
            'username' => $this->username,
            'view_url' => $this->viewUrl,
            'visible' => $this->visible,
            'warning_points' => $this->warningPoints,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
