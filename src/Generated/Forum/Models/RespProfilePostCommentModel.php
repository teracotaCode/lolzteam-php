<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class RespProfilePostCommentModel implements JsonSerializable
{
    public function __construct(
        public readonly int|null $commentId = null, // Comment
        public readonly int|null $profilePostId = null, // Profile
        public readonly int|null $commentUserId = null, // Comment
        public readonly string|null $commentUsername = null, // Comment
        public readonly string|null $commentUsernameHtml = null, // Comment
        public readonly int|null $commentCreateDate = null, // Comment
        public readonly string|null $commentBody = null, // Comment
        public readonly string|null $commentBodyHtml = null, // Comment
        public readonly string|null $commentBodyPlainText = null, // Comment
        public readonly bool|null $userIsIgnored = null, // User
        public readonly int|null $timelineUserId = null, // Timeline
        public readonly \Lolzteam\Generated\Forum\Models\RespProfilePostCommentModelLinks|null $links = null, // Links
        public readonly \Lolzteam\Generated\Forum\Models\RespProfilePostCommentModelPermissions|null $permissions = null, // Permissions
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            commentId: $data['comment_id'] ?? null,
            profilePostId: $data['profile_post_id'] ?? null,
            commentUserId: $data['comment_user_id'] ?? null,
            commentUsername: $data['comment_username'] ?? null,
            commentUsernameHtml: $data['comment_username_html'] ?? null,
            commentCreateDate: $data['comment_create_date'] ?? null,
            commentBody: $data['comment_body'] ?? null,
            commentBodyHtml: $data['comment_body_html'] ?? null,
            commentBodyPlainText: $data['comment_body_plain_text'] ?? null,
            userIsIgnored: $data['user_is_ignored'] ?? null,
            timelineUserId: $data['timeline_user_id'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\RespProfilePostCommentModelLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\RespProfilePostCommentModelPermissions::fromArray($data['permissions']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'comment_id' => $this->commentId,
            'profile_post_id' => $this->profilePostId,
            'comment_user_id' => $this->commentUserId,
            'comment_username' => $this->commentUsername,
            'comment_username_html' => $this->commentUsernameHtml,
            'comment_create_date' => $this->commentCreateDate,
            'comment_body' => $this->commentBody,
            'comment_body_html' => $this->commentBodyHtml,
            'comment_body_plain_text' => $this->commentBodyPlainText,
            'user_is_ignored' => $this->userIsIgnored,
            'timeline_user_id' => $this->timelineUserId,
            'links' => $this->links?->toArray(),
            'permissions' => $this->permissions?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
