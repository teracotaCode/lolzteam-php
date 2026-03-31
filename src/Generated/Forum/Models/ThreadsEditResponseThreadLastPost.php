<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ThreadsEditResponseThreadLastPost implements JsonSerializable
{
    public function __construct(
        public readonly int|null $postId = null, // Post
        public readonly int|null $threadId = null, // Thread
        public readonly int|null $posterUserId = null, // Poster
        public readonly string|null $posterUsername = null, // Poster
        public readonly string|null $posterUsernameHtml = null, // Poster
        public readonly int|null $postCreateDate = null, // Post
        public readonly string|null $postBody = null, // Post
        public readonly string|null $postBodyHtml = null, // Post
        public readonly string|null $postBodyPlainText = null, // Post
        public readonly string|null $signature = null, // Signature
        public readonly string|null $signatureHtml = null, // Signature
        public readonly string|null $signaturePlainText = null, // Signature
        public readonly int|null $postLikeCount = null, // Post
        public readonly bool|null $userIsIgnored = null, // User
        public readonly bool|null $postIsPublished = null, // Post
        public readonly bool|null $postIsDeleted = null, // Post
        public readonly int|null $postUpdateDate = null, // Post
        public readonly bool|null $postIsFirstPost = null, // Post
        public readonly bool|null $postIsLiked = null, // Post
        public readonly \Lolzteam\Generated\Forum\Models\ThreadsEditResponseThreadLastPostLinks|null $links = null, // Links
        public readonly \Lolzteam\Generated\Forum\Models\ThreadsEditResponseThreadLastPostPermissions|null $permissions = null, // Permissions
        public readonly bool|null $threadIsDeleted = null, // Thread
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            postId: $data['post_id'] ?? null,
            threadId: $data['thread_id'] ?? null,
            posterUserId: $data['poster_user_id'] ?? null,
            posterUsername: $data['poster_username'] ?? null,
            posterUsernameHtml: $data['poster_username_html'] ?? null,
            postCreateDate: $data['post_create_date'] ?? null,
            postBody: $data['post_body'] ?? null,
            postBodyHtml: $data['post_body_html'] ?? null,
            postBodyPlainText: $data['post_body_plain_text'] ?? null,
            signature: $data['signature'] ?? null,
            signatureHtml: $data['signature_html'] ?? null,
            signaturePlainText: $data['signature_plain_text'] ?? null,
            postLikeCount: $data['post_like_count'] ?? null,
            userIsIgnored: $data['user_is_ignored'] ?? null,
            postIsPublished: $data['post_is_published'] ?? null,
            postIsDeleted: $data['post_is_deleted'] ?? null,
            postUpdateDate: $data['post_update_date'] ?? null,
            postIsFirstPost: $data['post_is_first_post'] ?? null,
            postIsLiked: $data['post_is_liked'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\ThreadsEditResponseThreadLastPostLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\ThreadsEditResponseThreadLastPostPermissions::fromArray($data['permissions']) : null,
            threadIsDeleted: $data['thread_is_deleted'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'post_id' => $this->postId,
            'thread_id' => $this->threadId,
            'poster_user_id' => $this->posterUserId,
            'poster_username' => $this->posterUsername,
            'poster_username_html' => $this->posterUsernameHtml,
            'post_create_date' => $this->postCreateDate,
            'post_body' => $this->postBody,
            'post_body_html' => $this->postBodyHtml,
            'post_body_plain_text' => $this->postBodyPlainText,
            'signature' => $this->signature,
            'signature_html' => $this->signatureHtml,
            'signature_plain_text' => $this->signaturePlainText,
            'post_like_count' => $this->postLikeCount,
            'user_is_ignored' => $this->userIsIgnored,
            'post_is_published' => $this->postIsPublished,
            'post_is_deleted' => $this->postIsDeleted,
            'post_update_date' => $this->postUpdateDate,
            'post_is_first_post' => $this->postIsFirstPost,
            'post_is_liked' => $this->postIsLiked,
            'links' => $this->links?->toArray(),
            'permissions' => $this->permissions?->toArray(),
            'thread_is_deleted' => $this->threadIsDeleted,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
