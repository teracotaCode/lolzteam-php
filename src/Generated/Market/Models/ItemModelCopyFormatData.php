<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ItemModelCopyFormatData implements JsonSerializable
{
    public function __construct(
        public readonly string|null $titleLink = null, // Title
        public readonly string|null $loginData = null, // Login
        public readonly string|null $full = null, // Full
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            titleLink: $data['title_link'] ?? null,
            loginData: $data['login_data'] ?? null,
            full: $data['full'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'title_link' => $this->titleLink,
            'login_data' => $this->loginData,
            'full' => $this->full,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
