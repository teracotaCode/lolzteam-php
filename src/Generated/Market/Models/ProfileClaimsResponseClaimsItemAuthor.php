<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\ProfileClaimsResponseClaimsItemAuthorFieldsItem[]|null $fields Fields
 */
class ProfileClaimsResponseClaimsItemAuthor implements JsonSerializable
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
        public readonly string|null $customTitle = null, // Custom
        public readonly int|null $isBanned = null, // Is
        public readonly string|null $userTitle = null, // User
        public readonly bool|null $userIsValid = null, // User
        public readonly bool|null $userIsVerified = null, // User
        public readonly bool|null $userIsFollowed = null, // User
        public readonly int|null $userLastSeenDate = null, // User
        public readonly \Lolzteam\Generated\Market\Models\ProfileClaimsResponseClaimsItemAuthorLinks|null $links = null, // Links
        public readonly \Lolzteam\Generated\Market\Models\ProfileClaimsResponseClaimsItemAuthorPermissions|null $permissions = null, // Permissions
        public readonly bool|null $userIsIgnored = null, // User
        public readonly bool|null $userIsVisitor = null, // User
        public readonly int|null $userGroupId = null, // User
        public readonly string|null $banReason = null, // Ban
        public readonly array|null $fields = null, // Fields
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
            customTitle: $data['custom_title'] ?? null,
            isBanned: $data['is_banned'] ?? null,
            userTitle: $data['user_title'] ?? null,
            userIsValid: $data['user_is_valid'] ?? null,
            userIsVerified: $data['user_is_verified'] ?? null,
            userIsFollowed: $data['user_is_followed'] ?? null,
            userLastSeenDate: $data['user_last_seen_date'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Market\Models\ProfileClaimsResponseClaimsItemAuthorLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Market\Models\ProfileClaimsResponseClaimsItemAuthorPermissions::fromArray($data['permissions']) : null,
            userIsIgnored: $data['user_is_ignored'] ?? null,
            userIsVisitor: $data['user_is_visitor'] ?? null,
            userGroupId: $data['user_group_id'] ?? null,
            banReason: $data['ban_reason'] ?? null,
            fields: isset($data['fields']) && is_array($data['fields']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\ProfileClaimsResponseClaimsItemAuthorFieldsItem::fromArray($item), $data['fields']) : null,
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
            'custom_title' => $this->customTitle,
            'is_banned' => $this->isBanned,
            'user_title' => $this->userTitle,
            'user_is_valid' => $this->userIsValid,
            'user_is_verified' => $this->userIsVerified,
            'user_is_followed' => $this->userIsFollowed,
            'user_last_seen_date' => $this->userLastSeenDate,
            'links' => $this->links?->toArray(),
            'permissions' => $this->permissions?->toArray(),
            'user_is_ignored' => $this->userIsIgnored,
            'user_is_visitor' => $this->userIsVisitor,
            'user_group_id' => $this->userGroupId,
            'ban_reason' => $this->banReason,
            'fields' => $this->fields !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->fields) : null,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
