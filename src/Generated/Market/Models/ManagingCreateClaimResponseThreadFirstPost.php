<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadFirstPostLikeUsersItem[]|null $likeUsers Like Users
 */
class ManagingCreateClaimResponseThreadFirstPost implements JsonSerializable
{
    public function __construct(
        public readonly int|null $postId = null, // Post Id
        public readonly int|null $threadId = null, // Thread Id
        public readonly int|null $posterUserId = null, // Poster User Id
        public readonly string|null $posterUsername = null, // Poster Username
        public readonly int|null $postCreateDate = null, // Post Create Date
        public readonly string|null $postBody = null, // Post Body
        public readonly string|null $postBodyHtml = null, // Post Body Html
        public readonly string|null $postBodyPlainText = null, // Post Body Plain Text
        public readonly string|null $signature = null, // Signature
        public readonly string|null $signatureHtml = null, // Signature Html
        public readonly string|null $signaturePlainText = null, // Signature Plain Text
        public readonly int|null $postLikeCount = null, // Post Like Count
        public readonly int|null $postAttachmentCount = null, // Post Attachment Count
        public readonly array|null $likeUsers = null, // Like Users
        public readonly bool|null $userIsIgnored = null, // User Is Ignored
        public readonly bool|null $postIsPublished = null, // Post Is Published
        public readonly bool|null $postIsDeleted = null, // Post Is Deleted
        public readonly int|null $postUpdateDate = null, // Post Update Date
        public readonly bool|null $postIsFirstPost = null, // Post Is First Post
        public readonly \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadFirstPostLinks|null $links = null, // Links
        public readonly \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadFirstPostPermissions|null $permissions = null, // Permissions
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            postId: $data['post_id'] ?? null,
            threadId: $data['thread_id'] ?? null,
            posterUserId: $data['poster_user_id'] ?? null,
            posterUsername: $data['poster_username'] ?? null,
            postCreateDate: $data['post_create_date'] ?? null,
            postBody: $data['post_body'] ?? null,
            postBodyHtml: $data['post_body_html'] ?? null,
            postBodyPlainText: $data['post_body_plain_text'] ?? null,
            signature: $data['signature'] ?? null,
            signatureHtml: $data['signature_html'] ?? null,
            signaturePlainText: $data['signature_plain_text'] ?? null,
            postLikeCount: $data['post_like_count'] ?? null,
            postAttachmentCount: $data['post_attachment_count'] ?? null,
            likeUsers: isset($data['like_users']) && is_array($data['like_users']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadFirstPostLikeUsersItem::fromArray($item), $data['like_users']) : null,
            userIsIgnored: $data['user_is_ignored'] ?? null,
            postIsPublished: $data['post_is_published'] ?? null,
            postIsDeleted: $data['post_is_deleted'] ?? null,
            postUpdateDate: $data['post_update_date'] ?? null,
            postIsFirstPost: $data['post_is_first_post'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadFirstPostLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThreadFirstPostPermissions::fromArray($data['permissions']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'post_id' => $this->postId,
            'thread_id' => $this->threadId,
            'poster_user_id' => $this->posterUserId,
            'poster_username' => $this->posterUsername,
            'post_create_date' => $this->postCreateDate,
            'post_body' => $this->postBody,
            'post_body_html' => $this->postBodyHtml,
            'post_body_plain_text' => $this->postBodyPlainText,
            'signature' => $this->signature,
            'signature_html' => $this->signatureHtml,
            'signature_plain_text' => $this->signaturePlainText,
            'post_like_count' => $this->postLikeCount,
            'post_attachment_count' => $this->postAttachmentCount,
            'like_users' => $this->likeUsers !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->likeUsers) : null,
            'user_is_ignored' => $this->userIsIgnored,
            'post_is_published' => $this->postIsPublished,
            'post_is_deleted' => $this->postIsDeleted,
            'post_update_date' => $this->postUpdateDate,
            'post_is_first_post' => $this->postIsFirstPost,
            'links' => $this->links?->toArray(),
            'permissions' => $this->permissions?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
