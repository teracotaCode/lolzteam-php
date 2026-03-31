<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ChatboxEditMessageResponseMessageUserUniqBanner implements JsonSerializable
{
    public function __construct(
        public readonly string|null $bannerCss = null, // Banner
        public readonly string|null $bannerText = null, // Banner
        public readonly string|null $bannerIcon = null, // Banner
        public readonly string|null $usernameIcon = null, // Username
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            bannerCss: $data['banner_css'] ?? null,
            bannerText: $data['banner_text'] ?? null,
            bannerIcon: $data['banner_icon'] ?? null,
            usernameIcon: $data['username_icon'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'banner_css' => $this->bannerCss,
            'banner_text' => $this->bannerText,
            'banner_icon' => $this->bannerIcon,
            'username_icon' => $this->usernameIcon,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
