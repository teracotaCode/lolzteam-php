<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class LinksGetResponseLinkForumLinks implements JsonSerializable
{
    public function __construct(
        public readonly string|null $target = null, // Target
        public readonly string|null $detail = null, // Detail
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            target: $data['target'] ?? null,
            detail: $data['detail'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'target' => $this->target,
            'detail' => $this->detail,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
