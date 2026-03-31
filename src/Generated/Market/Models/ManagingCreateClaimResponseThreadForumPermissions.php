<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingCreateClaimResponseThreadForumPermissions implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $view = null, // View
        public readonly bool|null $edit = null, // Edit
        public readonly bool|null $delete = null, // Delete
        public readonly bool|null $createThread = null, // Create Thread
        public readonly bool|null $uploadAttachment = null, // Upload Attachment
        public readonly bool|null $tagThread = null, // Tag Thread
        public readonly bool|null $follow = null, // Follow
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            view: $data['view'] ?? null,
            edit: $data['edit'] ?? null,
            delete: $data['delete'] ?? null,
            createThread: $data['create_thread'] ?? null,
            uploadAttachment: $data['upload_attachment'] ?? null,
            tagThread: $data['tag_thread'] ?? null,
            follow: $data['follow'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'view' => $this->view,
            'edit' => $this->edit,
            'delete' => $this->delete,
            'create_thread' => $this->createThread,
            'upload_attachment' => $this->uploadAttachment,
            'tag_thread' => $this->tagThread,
            'follow' => $this->follow,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
