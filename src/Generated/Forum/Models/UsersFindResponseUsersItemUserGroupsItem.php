<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersFindResponseUsersItemUserGroupsItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $userGroupId = null, // User
        public readonly string|null $userGroupTitle = null, // User
        public readonly string|null $userGroupTitleEn = null, // User
        public readonly string|null $userGroupBannerCssClass = null, // User
        public readonly string|null $userGroupBannerText = null, // User
        public readonly string|null $userGroupBannerTextEn = null, // User
        public readonly bool|null $displayGroupSelectable = null, // Display
        public readonly bool|null $displayBannerSelectable = null, // Display
        public readonly bool|null $displayIconSelectable = null, // Display
        public readonly bool|null $isPrimaryGroup = null, // Is
        public readonly string|null $userGroupIconClass = null, // User
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            userGroupId: $data['user_group_id'] ?? null,
            userGroupTitle: $data['user_group_title'] ?? null,
            userGroupTitleEn: $data['user_group_title_en'] ?? null,
            userGroupBannerCssClass: $data['user_group_banner_css_class'] ?? null,
            userGroupBannerText: $data['user_group_banner_text'] ?? null,
            userGroupBannerTextEn: $data['user_group_banner_text_en'] ?? null,
            displayGroupSelectable: $data['display_group_selectable'] ?? null,
            displayBannerSelectable: $data['display_banner_selectable'] ?? null,
            displayIconSelectable: $data['display_icon_selectable'] ?? null,
            isPrimaryGroup: $data['is_primary_group'] ?? null,
            userGroupIconClass: $data['user_group_icon_class'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'user_group_id' => $this->userGroupId,
            'user_group_title' => $this->userGroupTitle,
            'user_group_title_en' => $this->userGroupTitleEn,
            'user_group_banner_css_class' => $this->userGroupBannerCssClass,
            'user_group_banner_text' => $this->userGroupBannerText,
            'user_group_banner_text_en' => $this->userGroupBannerTextEn,
            'display_group_selectable' => $this->displayGroupSelectable,
            'display_banner_selectable' => $this->displayBannerSelectable,
            'display_icon_selectable' => $this->displayIconSelectable,
            'is_primary_group' => $this->isPrimaryGroup,
            'user_group_icon_class' => $this->userGroupIconClass,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
