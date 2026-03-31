<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class RespProfilePostModel implements JsonSerializable
{
    public function __construct(
        public readonly int|null $profilePostId = null, // Profile
        public readonly int|null $timelineUserId = null, // Timeline
        public readonly int|null $posterUserId = null, // Poster
        public readonly string|null $posterUsername = null, // Poster
        public readonly string|null $posterUsernameHtml = null, // Poster
        public readonly int|null $postCreateDate = null, // Post
        public readonly string|null $postBody = null, // Post
        public readonly string|null $postBodyHtml = null, // Post
        public readonly string|null $postBodyPlainText = null, // Post
        public readonly int|null $postLikeCount = null, // Post
        public readonly int|null $postCommentCount = null, // Post
        public readonly int|null $postCommentsIsDisabled = null, // Post
        public readonly string|null $timelineUsername = null, // Timeline
        public readonly bool|null $userIsIgnored = null, // User
        public readonly bool|null $postIsPublished = null, // Post
        public readonly bool|null $postIsDeleted = null, // Post
        public readonly bool|null $postIsLiked = null, // Post
        public readonly bool|null $postIsSticked = null, // Post
        public readonly \Lolzteam\Generated\Forum\Models\RespProfilePostModelLinks|null $links = null, // Links
        public readonly \Lolzteam\Generated\Forum\Models\RespProfilePostModelPermissions|null $permissions = null, // Permissions
        public readonly \Lolzteam\Generated\Forum\Models\RespProfilePostModelTimelineUser|null $timelineUser = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            profilePostId: $data['profile_post_id'] ?? null,
            timelineUserId: $data['timeline_user_id'] ?? null,
            posterUserId: $data['poster_user_id'] ?? null,
            posterUsername: $data['poster_username'] ?? null,
            posterUsernameHtml: $data['poster_username_html'] ?? null,
            postCreateDate: $data['post_create_date'] ?? null,
            postBody: $data['post_body'] ?? null,
            postBodyHtml: $data['post_body_html'] ?? null,
            postBodyPlainText: $data['post_body_plain_text'] ?? null,
            postLikeCount: $data['post_like_count'] ?? null,
            postCommentCount: $data['post_comment_count'] ?? null,
            postCommentsIsDisabled: $data['post_comments_is_disabled'] ?? null,
            timelineUsername: $data['timeline_username'] ?? null,
            userIsIgnored: $data['user_is_ignored'] ?? null,
            postIsPublished: $data['post_is_published'] ?? null,
            postIsDeleted: $data['post_is_deleted'] ?? null,
            postIsLiked: $data['post_is_liked'] ?? null,
            postIsSticked: $data['post_is_sticked'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\RespProfilePostModelLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\RespProfilePostModelPermissions::fromArray($data['permissions']) : null,
            timelineUser: isset($data['timeline_user']) && is_array($data['timeline_user']) && !empty($data['timeline_user']) ? \Lolzteam\Generated\Forum\Models\RespProfilePostModelTimelineUser::fromArray($data['timeline_user']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'profile_post_id' => $this->profilePostId,
            'timeline_user_id' => $this->timelineUserId,
            'poster_user_id' => $this->posterUserId,
            'poster_username' => $this->posterUsername,
            'poster_username_html' => $this->posterUsernameHtml,
            'post_create_date' => $this->postCreateDate,
            'post_body' => $this->postBody,
            'post_body_html' => $this->postBodyHtml,
            'post_body_plain_text' => $this->postBodyPlainText,
            'post_like_count' => $this->postLikeCount,
            'post_comment_count' => $this->postCommentCount,
            'post_comments_is_disabled' => $this->postCommentsIsDisabled,
            'timeline_username' => $this->timelineUsername,
            'user_is_ignored' => $this->userIsIgnored,
            'post_is_published' => $this->postIsPublished,
            'post_is_deleted' => $this->postIsDeleted,
            'post_is_liked' => $this->postIsLiked,
            'post_is_sticked' => $this->postIsSticked,
            'links' => $this->links?->toArray(),
            'permissions' => $this->permissions?->toArray(),
            'timeline_user' => $this->timelineUser?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
