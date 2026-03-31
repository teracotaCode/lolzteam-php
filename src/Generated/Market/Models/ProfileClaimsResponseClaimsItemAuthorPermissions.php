<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ProfileClaimsResponseClaimsItemAuthorPermissions implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $edit = null, // Edit
        public readonly bool|null $follow = null, // Follow
        public readonly bool|null $ignore = null, // Ignore
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            edit: $data['edit'] ?? null,
            follow: $data['follow'] ?? null,
            ignore: $data['ignore'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'edit' => $this->edit,
            'follow' => $this->follow,
            'ignore' => $this->ignore,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
