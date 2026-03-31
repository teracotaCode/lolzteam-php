<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PostsListResponsePostsItemLastPostPermissions implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $view = null, // View
        public readonly bool|null $edit = null, // Edit
        public readonly bool|null $delete = null, // Delete
        public readonly bool|null $reply = null, // Reply
        public readonly bool|null $like = null, // Like
        public readonly bool|null $report = null, // Report
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            view: $data['view'] ?? null,
            edit: $data['edit'] ?? null,
            delete: $data['delete'] ?? null,
            reply: $data['reply'] ?? null,
            like: $data['like'] ?? null,
            report: $data['report'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'view' => $this->view,
            'edit' => $this->edit,
            'delete' => $this->delete,
            'reply' => $this->reply,
            'like' => $this->like,
            'report' => $this->report,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
