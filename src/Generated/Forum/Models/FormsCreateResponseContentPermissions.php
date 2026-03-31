<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class FormsCreateResponseContentPermissions implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $view = null, // View
        public readonly bool|null $delete = null, // Delete
        public readonly bool|null $follow = null, // Follow
        public readonly bool|null $post = null, // Post
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            view: $data['view'] ?? null,
            delete: $data['delete'] ?? null,
            follow: $data['follow'] ?? null,
            post: $data['post'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'view' => $this->view,
            'delete' => $this->delete,
            'follow' => $this->follow,
            'post' => $this->post,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
