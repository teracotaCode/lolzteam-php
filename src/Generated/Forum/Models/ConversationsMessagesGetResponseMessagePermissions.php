<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ConversationsMessagesGetResponseMessagePermissions implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $view = null, // View
        public readonly bool|null $reply = null, // Reply
        public readonly bool|null $invite = null, // Invite
        public readonly bool|null $manageInviteLinks = null, // Manage
        public readonly bool|null $kick = null, // Kick
        public readonly bool|null $uploadAvatar = null, // Upload
        public readonly bool|null $editOwnPost = null, // Edit Own Post
        public readonly bool|null $stickyMessages = null, // Sticky Messages
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            view: $data['view'] ?? null,
            reply: $data['reply'] ?? null,
            invite: $data['invite'] ?? null,
            manageInviteLinks: $data['manage_invite_links'] ?? null,
            kick: $data['kick'] ?? null,
            uploadAvatar: $data['upload_avatar'] ?? null,
            editOwnPost: $data['editOwnPost'] ?? null,
            stickyMessages: $data['stickyMessages'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'view' => $this->view,
            'reply' => $this->reply,
            'invite' => $this->invite,
            'manage_invite_links' => $this->manageInviteLinks,
            'kick' => $this->kick,
            'upload_avatar' => $this->uploadAvatar,
            'editOwnPost' => $this->editOwnPost,
            'stickyMessages' => $this->stickyMessages,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
