<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ChatboxEditMessageResponseMessageUser implements JsonSerializable
{
    public function __construct(
        public readonly int|null $avatarDate = null, // Avatar
        public readonly int|null $backgroundDate = null, // Background
        public readonly int|null $contestCount = null, // Contest
        public readonly string|null $customTitle = null, // Custom
        public readonly int|null $displayBannerId = null, // Display
        public readonly int|null $displayIconGroupId = null, // Display
        public readonly int|null $displayStyleGroupId = null, // Display
        public readonly bool|null $isAdmin = null, // Is
        public readonly bool|null $isBanned = null, // Is
        public readonly bool|null $isModerator = null, // Is
        public readonly bool|null $isStaff = null, // Is
        public readonly int|null $lastActivity = null, // Last
        public readonly int|null $like2Count = null, // Like
        public readonly int|null $likeCount = null, // Like
        public readonly int|null $messageCount = null, // Message
        public readonly int|null $registerDate = null, // Register
        public readonly \Lolzteam\Generated\Forum\Models\ChatboxEditMessageResponseMessageUserRendered|null $rendered = null, // Rendered
        public readonly string|null $shortLink = null, // Short
        public readonly int|null $trophyPoints = null, // Trophy
        public readonly \Lolzteam\Generated\Forum\Models\ChatboxEditMessageResponseMessageUserUniqBanner|null $uniqBanner = null, // Uniq
        public readonly string|null $uniqUsernameCss = null, // Uniq
        public readonly int|null $userId = null, // User
        public readonly string|null $username = null, // Username
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            avatarDate: $data['avatar_date'] ?? null,
            backgroundDate: $data['background_date'] ?? null,
            contestCount: $data['contest_count'] ?? null,
            customTitle: $data['custom_title'] ?? null,
            displayBannerId: $data['display_banner_id'] ?? null,
            displayIconGroupId: $data['display_icon_group_id'] ?? null,
            displayStyleGroupId: $data['display_style_group_id'] ?? null,
            isAdmin: $data['is_admin'] ?? null,
            isBanned: $data['is_banned'] ?? null,
            isModerator: $data['is_moderator'] ?? null,
            isStaff: $data['is_staff'] ?? null,
            lastActivity: $data['last_activity'] ?? null,
            like2Count: $data['like2_count'] ?? null,
            likeCount: $data['like_count'] ?? null,
            messageCount: $data['message_count'] ?? null,
            registerDate: $data['register_date'] ?? null,
            rendered: isset($data['rendered']) && is_array($data['rendered']) && !empty($data['rendered']) ? \Lolzteam\Generated\Forum\Models\ChatboxEditMessageResponseMessageUserRendered::fromArray($data['rendered']) : null,
            shortLink: $data['short_link'] ?? null,
            trophyPoints: $data['trophy_points'] ?? null,
            uniqBanner: isset($data['uniq_banner']) && is_array($data['uniq_banner']) && !empty($data['uniq_banner']) ? \Lolzteam\Generated\Forum\Models\ChatboxEditMessageResponseMessageUserUniqBanner::fromArray($data['uniq_banner']) : null,
            uniqUsernameCss: $data['uniq_username_css'] ?? null,
            userId: $data['user_id'] ?? null,
            username: $data['username'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'avatar_date' => $this->avatarDate,
            'background_date' => $this->backgroundDate,
            'contest_count' => $this->contestCount,
            'custom_title' => $this->customTitle,
            'display_banner_id' => $this->displayBannerId,
            'display_icon_group_id' => $this->displayIconGroupId,
            'display_style_group_id' => $this->displayStyleGroupId,
            'is_admin' => $this->isAdmin,
            'is_banned' => $this->isBanned,
            'is_moderator' => $this->isModerator,
            'is_staff' => $this->isStaff,
            'last_activity' => $this->lastActivity,
            'like2_count' => $this->like2Count,
            'like_count' => $this->likeCount,
            'message_count' => $this->messageCount,
            'register_date' => $this->registerDate,
            'rendered' => $this->rendered?->toArray(),
            'short_link' => $this->shortLink,
            'trophy_points' => $this->trophyPoints,
            'uniq_banner' => $this->uniqBanner?->toArray(),
            'uniq_username_css' => $this->uniqUsernameCss,
            'user_id' => $this->userId,
            'username' => $this->username,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
