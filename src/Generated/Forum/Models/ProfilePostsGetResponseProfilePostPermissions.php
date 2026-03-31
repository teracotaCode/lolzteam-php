<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ProfilePostsGetResponseProfilePostPermissions implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $view = null, // View
        public readonly bool|null $edit = null, // Edit
        public readonly bool|null $delete = null, // Delete
        public readonly bool|null $like = null, // Like
        public readonly bool|null $comment = null, // Comment
        public readonly bool|null $report = null, // Report
        public readonly bool|null $stick = null, // Stick
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            view: $data['view'] ?? null,
            edit: $data['edit'] ?? null,
            delete: $data['delete'] ?? null,
            like: $data['like'] ?? null,
            comment: $data['comment'] ?? null,
            report: $data['report'] ?? null,
            stick: $data['stick'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'view' => $this->view,
            'edit' => $this->edit,
            'delete' => $this->delete,
            'like' => $this->like,
            'comment' => $this->comment,
            'report' => $this->report,
            'stick' => $this->stick,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
