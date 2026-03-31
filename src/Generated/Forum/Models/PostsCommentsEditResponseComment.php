<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PostsCommentsEditResponseComment implements JsonSerializable
{
    public function __construct(
        public readonly int|null $postCommentId = null, // Post
        public readonly int|null $postId = null, // Post
        public readonly int|null $threadId = null, // Thread
        public readonly int|null $posterUserId = null, // Poster
        public readonly string|null $posterUsername = null, // Poster
        public readonly string|null $posterUsernameHtml = null, // Poster
        public readonly string|null $postCommentBody = null, // Post
        public readonly string|null $postCommentBodyHtml = null, // Post
        public readonly string|null $postCommentBodyPlainText = null, // Post
        public readonly int|null $postCommentLikeCount = null, // Post
        public readonly bool|null $userIsIgnored = null, // User
        public readonly bool|null $postCommentIsPublished = null, // Post
        public readonly bool|null $postCommentIsDeleted = null, // Post
        public readonly int|null $postCommentUpdateDate = null, // Post
        public readonly \Lolzteam\Generated\Forum\Models\PostsCommentsEditResponseCommentLinks|null $links = null, // Links
        public readonly \Lolzteam\Generated\Forum\Models\PostsCommentsEditResponseCommentPermissions|null $permissions = null, // Permissions
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            postCommentId: $data['post_comment_id'] ?? null,
            postId: $data['post_id'] ?? null,
            threadId: $data['thread_id'] ?? null,
            posterUserId: $data['poster_user_id'] ?? null,
            posterUsername: $data['poster_username'] ?? null,
            posterUsernameHtml: $data['poster_username_html'] ?? null,
            postCommentBody: $data['post_comment_body'] ?? null,
            postCommentBodyHtml: $data['post_comment_body_html'] ?? null,
            postCommentBodyPlainText: $data['post_comment_body_plain_text'] ?? null,
            postCommentLikeCount: $data['post_comment_like_count'] ?? null,
            userIsIgnored: $data['user_is_ignored'] ?? null,
            postCommentIsPublished: $data['post_comment_is_published'] ?? null,
            postCommentIsDeleted: $data['post_comment_is_deleted'] ?? null,
            postCommentUpdateDate: $data['post_comment_update_date'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\PostsCommentsEditResponseCommentLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\PostsCommentsEditResponseCommentPermissions::fromArray($data['permissions']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'post_comment_id' => $this->postCommentId,
            'post_id' => $this->postId,
            'thread_id' => $this->threadId,
            'poster_user_id' => $this->posterUserId,
            'poster_username' => $this->posterUsername,
            'poster_username_html' => $this->posterUsernameHtml,
            'post_comment_body' => $this->postCommentBody,
            'post_comment_body_html' => $this->postCommentBodyHtml,
            'post_comment_body_plain_text' => $this->postCommentBodyPlainText,
            'post_comment_like_count' => $this->postCommentLikeCount,
            'user_is_ignored' => $this->userIsIgnored,
            'post_comment_is_published' => $this->postCommentIsPublished,
            'post_comment_is_deleted' => $this->postCommentIsDeleted,
            'post_comment_update_date' => $this->postCommentUpdateDate,
            'links' => $this->links?->toArray(),
            'permissions' => $this->permissions?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
