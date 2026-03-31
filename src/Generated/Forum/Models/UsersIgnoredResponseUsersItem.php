<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersIgnoredResponseUsersItem implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $canEdit = null, // Can
        public readonly bool|null $canFollow = null, // Can
        public readonly bool|null $canIgnore = null, // Can
        public readonly bool|null $canPostProfile = null, // Can
        public readonly bool|null $canViewProfile = null, // Can
        public readonly bool|null $canViewProfilePosts = null, // Can
        public readonly bool|null $canWarn = null, // Can
        public readonly int|null $contestCount = null, // Contest
        public readonly string|null $convWelcomeMessage = null, // Conv
        public readonly int|null $convertedDeposit = null, // Converted Deposit
        public readonly \Lolzteam\Generated\Forum\Models\UsersIgnoredResponseUsersItemCustomFields|null $customFields = null, // Custom
        public readonly int|null $deposit = null, // Deposit
        public readonly string|null $homepage = null, // Homepage
        public readonly \Lolzteam\Generated\Forum\Models\UsersIgnoredResponseUsersItemIgnoredInfo|null $ignoredInfo = null, // Ignored
        public readonly bool|null $isAdmin = null, // Is
        public readonly bool|null $isBanned = null, // Is
        public readonly bool|null $isFollowed = null, // Is
        public readonly bool|null $isIgnored = null, // Is
        public readonly bool|null $isModerator = null, // Is
        public readonly bool|null $isStaff = null, // Is
        public readonly int|null $lastActivity = null, // Last
        public readonly int|null $like2Count = null, // Like
        public readonly int|null $likeCount = null, // Like
        public readonly string|null $location = null, // Location
        public readonly int|null $messageCount = null, // Message
        public readonly int|null $registerDate = null, // Register
        public readonly \Lolzteam\Generated\Forum\Models\UsersIgnoredResponseUsersItemRendered|null $rendered = null, // Rendered
        public readonly string|null $shortLink = null, // Short
        public readonly int|null $trophyPoints = null, // Trophy
        public readonly int|null $userId = null, // User
        public readonly string|null $userTitle = null, // User
        public readonly string|null $username = null, // Username
        public readonly string|null $viewUrl = null, // View
        public readonly int|null $warningPoints = null, // Warning
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            canEdit: $data['can_edit'] ?? null,
            canFollow: $data['can_follow'] ?? null,
            canIgnore: $data['can_ignore'] ?? null,
            canPostProfile: $data['can_post_profile'] ?? null,
            canViewProfile: $data['can_view_profile'] ?? null,
            canViewProfilePosts: $data['can_view_profile_posts'] ?? null,
            canWarn: $data['can_warn'] ?? null,
            contestCount: $data['contest_count'] ?? null,
            convWelcomeMessage: $data['conv_welcome_message'] ?? null,
            convertedDeposit: $data['convertedDeposit'] ?? null,
            customFields: isset($data['custom_fields']) && is_array($data['custom_fields']) && !empty($data['custom_fields']) ? \Lolzteam\Generated\Forum\Models\UsersIgnoredResponseUsersItemCustomFields::fromArray($data['custom_fields']) : null,
            deposit: $data['deposit'] ?? null,
            homepage: $data['homepage'] ?? null,
            ignoredInfo: isset($data['ignored_info']) && is_array($data['ignored_info']) && !empty($data['ignored_info']) ? \Lolzteam\Generated\Forum\Models\UsersIgnoredResponseUsersItemIgnoredInfo::fromArray($data['ignored_info']) : null,
            isAdmin: $data['is_admin'] ?? null,
            isBanned: $data['is_banned'] ?? null,
            isFollowed: $data['is_followed'] ?? null,
            isIgnored: $data['is_ignored'] ?? null,
            isModerator: $data['is_moderator'] ?? null,
            isStaff: $data['is_staff'] ?? null,
            lastActivity: $data['last_activity'] ?? null,
            like2Count: $data['like2_count'] ?? null,
            likeCount: $data['like_count'] ?? null,
            location: $data['location'] ?? null,
            messageCount: $data['message_count'] ?? null,
            registerDate: $data['register_date'] ?? null,
            rendered: isset($data['rendered']) && is_array($data['rendered']) && !empty($data['rendered']) ? \Lolzteam\Generated\Forum\Models\UsersIgnoredResponseUsersItemRendered::fromArray($data['rendered']) : null,
            shortLink: $data['short_link'] ?? null,
            trophyPoints: $data['trophy_points'] ?? null,
            userId: $data['user_id'] ?? null,
            userTitle: $data['user_title'] ?? null,
            username: $data['username'] ?? null,
            viewUrl: $data['view_url'] ?? null,
            warningPoints: $data['warning_points'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'can_edit' => $this->canEdit,
            'can_follow' => $this->canFollow,
            'can_ignore' => $this->canIgnore,
            'can_post_profile' => $this->canPostProfile,
            'can_view_profile' => $this->canViewProfile,
            'can_view_profile_posts' => $this->canViewProfilePosts,
            'can_warn' => $this->canWarn,
            'contest_count' => $this->contestCount,
            'conv_welcome_message' => $this->convWelcomeMessage,
            'convertedDeposit' => $this->convertedDeposit,
            'custom_fields' => $this->customFields?->toArray(),
            'deposit' => $this->deposit,
            'homepage' => $this->homepage,
            'ignored_info' => $this->ignoredInfo?->toArray(),
            'is_admin' => $this->isAdmin,
            'is_banned' => $this->isBanned,
            'is_followed' => $this->isFollowed,
            'is_ignored' => $this->isIgnored,
            'is_moderator' => $this->isModerator,
            'is_staff' => $this->isStaff,
            'last_activity' => $this->lastActivity,
            'like2_count' => $this->like2Count,
            'like_count' => $this->likeCount,
            'location' => $this->location,
            'message_count' => $this->messageCount,
            'register_date' => $this->registerDate,
            'rendered' => $this->rendered?->toArray(),
            'short_link' => $this->shortLink,
            'trophy_points' => $this->trophyPoints,
            'user_id' => $this->userId,
            'user_title' => $this->userTitle,
            'username' => $this->username,
            'view_url' => $this->viewUrl,
            'warning_points' => $this->warningPoints,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
