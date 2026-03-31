<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class SearchResultsResponseDataItemForumPermissions implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $view = null, // View
        public readonly bool|null $edit = null, // Edit
        public readonly bool|null $delete = null, // Delete
        public readonly bool|null $createThread = null, // Create
        public readonly bool|null $uploadAttachment = null, // Upload
        public readonly bool|null $tagThread = null, // Tag
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
