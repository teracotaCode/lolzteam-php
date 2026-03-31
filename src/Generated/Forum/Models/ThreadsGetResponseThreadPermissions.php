<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ThreadsGetResponseThreadPermissions implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $view = null, // View
        public readonly bool|null $delete = null, // Delete
        public readonly bool|null $follow = null, // Follow
        public readonly bool|null $post = null, // Post
        public readonly bool|null $edit = null, // Edit
        public readonly bool|null $editTitle = null, // Edit
        public readonly bool|null $editTags = null, // Edit
        public readonly \Lolzteam\Generated\Forum\Models\ThreadsGetResponseThreadPermissionsBump|null $bump = null, // Bump
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            view: $data['view'] ?? null,
            delete: $data['delete'] ?? null,
            follow: $data['follow'] ?? null,
            post: $data['post'] ?? null,
            edit: $data['edit'] ?? null,
            editTitle: $data['edit_title'] ?? null,
            editTags: $data['edit_tags'] ?? null,
            bump: isset($data['bump']) && is_array($data['bump']) && !empty($data['bump']) ? \Lolzteam\Generated\Forum\Models\ThreadsGetResponseThreadPermissionsBump::fromArray($data['bump']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'view' => $this->view,
            'delete' => $this->delete,
            'follow' => $this->follow,
            'post' => $this->post,
            'edit' => $this->edit,
            'edit_title' => $this->editTitle,
            'edit_tags' => $this->editTags,
            'bump' => $this->bump?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
