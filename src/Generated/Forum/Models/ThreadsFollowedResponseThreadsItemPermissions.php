<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ThreadsFollowedResponseThreadsItemPermissions implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $view = null, // View
        public readonly bool|null $delete = null, // Delete
        public readonly bool|null $follow = null, // Follow
        public readonly bool|null $post = null, // Post
        public readonly bool|null $uploadAttachment = null, // Upload
        public readonly bool|null $edit = null, // Edit
        public readonly bool|null $editTitle = null, // Edit
        public readonly bool|null $editTags = null, // Edit
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            view: $data['view'] ?? null,
            delete: $data['delete'] ?? null,
            follow: $data['follow'] ?? null,
            post: $data['post'] ?? null,
            uploadAttachment: $data['upload_attachment'] ?? null,
            edit: $data['edit'] ?? null,
            editTitle: $data['edit_title'] ?? null,
            editTags: $data['edit_tags'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'view' => $this->view,
            'delete' => $this->delete,
            'follow' => $this->follow,
            'post' => $this->post,
            'upload_attachment' => $this->uploadAttachment,
            'edit' => $this->edit,
            'edit_title' => $this->editTitle,
            'edit_tags' => $this->editTags,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
