<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemUserGroupsItem[]|null $userGroups User
 * @property-read \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemFieldsItem[]|null $fields Fields
 * @property-read \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemUserExternalAuthenticationsItem[]|null $userExternalAuthentications User
 */
class SearchAllResponseUsersItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $userId = null, // User
        public readonly string|null $username = null, // Username
        public readonly string|null $usernameHtml = null, // Username
        public readonly int|null $userMessageCount = null, // User
        public readonly int|null $userRegisterDate = null, // User
        public readonly int|null $userLikeCount = null, // User
        public readonly int|null $userLike2Count = null, // User
        public readonly int|null $contestCount = null, // Contest
        public readonly int|null $trophyCount = null, // Trophy
        public readonly string|null $shortLink = null, // Short
        public readonly string|null $customTitle = null, // Custom
        public readonly int|null $isBanned = null, // Is
        public readonly int|null $displayBannerId = null, // Display
        public readonly int|null $displayIconGroupId = null, // Display
        public readonly string|null $balance = null, // Balance
        public readonly string|null $hold = null, // Hold
        public readonly string|null $currency = null, // Currency
        public readonly string|null $userEmail = null, // User
        public readonly int|null $userUnreadNotificationCount = null, // User
        public readonly int|null $userUnreadConversationCount = null, // User
        public readonly string|null $convWelcomeMessage = null, // Conv
        public readonly string|null $userTitle = null, // User
        public readonly int|null $userDeposit = null, // User
        public readonly bool|null $userIsValid = null, // User
        public readonly bool|null $userIsVerified = null, // User
        public readonly bool|null $userIsFollowed = null, // User
        public readonly int|null $userLastSeenDate = null, // User
        public readonly \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemLinks|null $links = null, // Links
        public readonly \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemPermissions|null $permissions = null, // Permissions
        public readonly bool|null $userIsIgnored = null, // User
        public readonly bool|null $userIsVisitor = null, // User
        public readonly int|null $userGroupId = null, // User
        public readonly array|null $curatorTitles = null, // Curator
        public readonly array|null $userGroups = null, // User
        public readonly array|null $fields = null, // Fields
        public readonly int|null $userTimezoneOffset = null, // User
        public readonly array|null $userExternalAuthentications = null, // User
        public readonly \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemSelfPermissions|null $selfPermissions = null, // Self
        public readonly \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemEditPermissions|null $editPermissions = null, // Edit
        public readonly \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemBirthday|null $birthday = null, // Birthday
        public readonly string|null $secretAnswerRendered = null, // Secret
        public readonly string|null $secretAnswerFirstLetter = null, // Secret
        public readonly \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemUserFollowing|null $userFollowing = null, // User
        public readonly \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemUserFollowers|null $userFollowers = null, // User
        public readonly string|null $banner = null, // Banner
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            userId: $data['user_id'] ?? null,
            username: $data['username'] ?? null,
            usernameHtml: $data['username_html'] ?? null,
            userMessageCount: $data['user_message_count'] ?? null,
            userRegisterDate: $data['user_register_date'] ?? null,
            userLikeCount: $data['user_like_count'] ?? null,
            userLike2Count: $data['user_like2_count'] ?? null,
            contestCount: $data['contest_count'] ?? null,
            trophyCount: $data['trophy_count'] ?? null,
            shortLink: $data['short_link'] ?? null,
            customTitle: $data['custom_title'] ?? null,
            isBanned: $data['is_banned'] ?? null,
            displayBannerId: $data['display_banner_id'] ?? null,
            displayIconGroupId: $data['display_icon_group_id'] ?? null,
            balance: $data['balance'] ?? null,
            hold: $data['hold'] ?? null,
            currency: $data['currency'] ?? null,
            userEmail: $data['user_email'] ?? null,
            userUnreadNotificationCount: $data['user_unread_notification_count'] ?? null,
            userUnreadConversationCount: $data['user_unread_conversation_count'] ?? null,
            convWelcomeMessage: $data['conv_welcome_message'] ?? null,
            userTitle: $data['user_title'] ?? null,
            userDeposit: $data['user_deposit'] ?? null,
            userIsValid: $data['user_is_valid'] ?? null,
            userIsVerified: $data['user_is_verified'] ?? null,
            userIsFollowed: $data['user_is_followed'] ?? null,
            userLastSeenDate: $data['user_last_seen_date'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemPermissions::fromArray($data['permissions']) : null,
            userIsIgnored: $data['user_is_ignored'] ?? null,
            userIsVisitor: $data['user_is_visitor'] ?? null,
            userGroupId: $data['user_group_id'] ?? null,
            curatorTitles: $data['curator_titles'] ?? null,
            userGroups: isset($data['user_groups']) && is_array($data['user_groups']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemUserGroupsItem::fromArray($item), $data['user_groups']) : null,
            fields: isset($data['fields']) && is_array($data['fields']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemFieldsItem::fromArray($item), $data['fields']) : null,
            userTimezoneOffset: $data['user_timezone_offset'] ?? null,
            userExternalAuthentications: isset($data['user_external_authentications']) && is_array($data['user_external_authentications']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemUserExternalAuthenticationsItem::fromArray($item), $data['user_external_authentications']) : null,
            selfPermissions: isset($data['self_permissions']) && is_array($data['self_permissions']) && !empty($data['self_permissions']) ? \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemSelfPermissions::fromArray($data['self_permissions']) : null,
            editPermissions: isset($data['edit_permissions']) && is_array($data['edit_permissions']) && !empty($data['edit_permissions']) ? \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemEditPermissions::fromArray($data['edit_permissions']) : null,
            birthday: isset($data['birthday']) && is_array($data['birthday']) && !empty($data['birthday']) ? \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemBirthday::fromArray($data['birthday']) : null,
            secretAnswerRendered: $data['secret_answer_rendered'] ?? null,
            secretAnswerFirstLetter: $data['secret_answer_first_letter'] ?? null,
            userFollowing: isset($data['user_following']) && is_array($data['user_following']) && !empty($data['user_following']) ? \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemUserFollowing::fromArray($data['user_following']) : null,
            userFollowers: isset($data['user_followers']) && is_array($data['user_followers']) && !empty($data['user_followers']) ? \Lolzteam\Generated\Forum\Models\SearchAllResponseUsersItemUserFollowers::fromArray($data['user_followers']) : null,
            banner: $data['banner'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'user_id' => $this->userId,
            'username' => $this->username,
            'username_html' => $this->usernameHtml,
            'user_message_count' => $this->userMessageCount,
            'user_register_date' => $this->userRegisterDate,
            'user_like_count' => $this->userLikeCount,
            'user_like2_count' => $this->userLike2Count,
            'contest_count' => $this->contestCount,
            'trophy_count' => $this->trophyCount,
            'short_link' => $this->shortLink,
            'custom_title' => $this->customTitle,
            'is_banned' => $this->isBanned,
            'display_banner_id' => $this->displayBannerId,
            'display_icon_group_id' => $this->displayIconGroupId,
            'balance' => $this->balance,
            'hold' => $this->hold,
            'currency' => $this->currency,
            'user_email' => $this->userEmail,
            'user_unread_notification_count' => $this->userUnreadNotificationCount,
            'user_unread_conversation_count' => $this->userUnreadConversationCount,
            'conv_welcome_message' => $this->convWelcomeMessage,
            'user_title' => $this->userTitle,
            'user_deposit' => $this->userDeposit,
            'user_is_valid' => $this->userIsValid,
            'user_is_verified' => $this->userIsVerified,
            'user_is_followed' => $this->userIsFollowed,
            'user_last_seen_date' => $this->userLastSeenDate,
            'links' => $this->links?->toArray(),
            'permissions' => $this->permissions?->toArray(),
            'user_is_ignored' => $this->userIsIgnored,
            'user_is_visitor' => $this->userIsVisitor,
            'user_group_id' => $this->userGroupId,
            'curator_titles' => $this->curatorTitles,
            'user_groups' => $this->userGroups !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->userGroups) : null,
            'fields' => $this->fields !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->fields) : null,
            'user_timezone_offset' => $this->userTimezoneOffset,
            'user_external_authentications' => $this->userExternalAuthentications !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->userExternalAuthentications) : null,
            'self_permissions' => $this->selfPermissions?->toArray(),
            'edit_permissions' => $this->editPermissions?->toArray(),
            'birthday' => $this->birthday?->toArray(),
            'secret_answer_rendered' => $this->secretAnswerRendered,
            'secret_answer_first_letter' => $this->secretAnswerFirstLetter,
            'user_following' => $this->userFollowing?->toArray(),
            'user_followers' => $this->userFollowers?->toArray(),
            'banner' => $this->banner,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
