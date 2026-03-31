<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class LinksGetResponseLinkForumPermissions implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $view = null, // View
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            view: $data['view'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'view' => $this->view,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
