<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersIgnoredResponseUsersItemIgnoredInfo implements JsonSerializable
{
    public function __construct(
        public readonly int|null $ignoreContent = null, // Ignore
        public readonly int|null $ignoreConversations = null, // Ignore
        public readonly int|null $restrictViewProfile = null, // Restrict
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            ignoreContent: $data['ignore_content'] ?? null,
            ignoreConversations: $data['ignore_conversations'] ?? null,
            restrictViewProfile: $data['restrict_view_profile'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'ignore_content' => $this->ignoreContent,
            'ignore_conversations' => $this->ignoreConversations,
            'restrict_view_profile' => $this->restrictViewProfile,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
