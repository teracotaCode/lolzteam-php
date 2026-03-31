<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ProfileGetResponseUserRendered implements JsonSerializable
{
    public function __construct(
        public readonly string|null $username = null, // Username
        public readonly \Lolzteam\Generated\Market\Models\ProfileGetResponseUserRenderedAvatars|null $avatars = null, // Avatars
        public readonly mixed $backgrounds = null, // Backgrounds
        public readonly string|null $link = null, // Link
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            username: $data['username'] ?? null,
            avatars: isset($data['avatars']) && is_array($data['avatars']) && !empty($data['avatars']) ? \Lolzteam\Generated\Market\Models\ProfileGetResponseUserRenderedAvatars::fromArray($data['avatars']) : null,
            backgrounds: $data['backgrounds'] ?? null,
            link: $data['link'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'username' => $this->username,
            'avatars' => $this->avatars?->toArray(),
            'backgrounds' => $this->backgrounds,
            'link' => $this->link,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
