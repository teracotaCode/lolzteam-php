<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ChatboxGetIgnoreResponseIgnoredItemRendered implements JsonSerializable
{
    public function __construct(
        public readonly string|null $username = null, // Username
        public readonly \Lolzteam\Generated\Forum\Models\ChatboxGetIgnoreResponseIgnoredItemRenderedAvatars|null $avatars = null, // Avatars
        public readonly string|null $link = null, // Link
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            username: $data['username'] ?? null,
            avatars: isset($data['avatars']) && is_array($data['avatars']) && !empty($data['avatars']) ? \Lolzteam\Generated\Forum\Models\ChatboxGetIgnoreResponseIgnoredItemRenderedAvatars::fromArray($data['avatars']) : null,
            link: $data['link'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'username' => $this->username,
            'avatars' => $this->avatars?->toArray(),
            'link' => $this->link,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
