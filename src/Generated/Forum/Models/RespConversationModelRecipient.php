<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class RespConversationModelRecipient implements JsonSerializable
{
    public function __construct(
        public readonly int|null $userId = null, // User
        public readonly string|null $username = null, // Username
        public readonly string|null $usernameHtml = null, // Username
        public readonly int|null $lastActivity = null, // Last
        public readonly bool|null $isOnline = null, // Is
        public readonly bool|null $contactsChanged = null, // Contacts
        public readonly string|null $avatar = null, // Avatar
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            userId: $data['user_id'] ?? null,
            username: $data['username'] ?? null,
            usernameHtml: $data['username_html'] ?? null,
            lastActivity: $data['last_activity'] ?? null,
            isOnline: $data['is_online'] ?? null,
            contactsChanged: $data['contacts_changed'] ?? null,
            avatar: $data['avatar'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'user_id' => $this->userId,
            'username' => $this->username,
            'username_html' => $this->usernameHtml,
            'last_activity' => $this->lastActivity,
            'is_online' => $this->isOnline,
            'contacts_changed' => $this->contactsChanged,
            'avatar' => $this->avatar,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
