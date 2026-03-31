<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ForumsGroupedResponseTabsItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $linkTitle = null, // Link
        public readonly bool|null $isDefault = null, // Is Default
        public readonly string|null $title = null, // Title
        public readonly bool|null $isHidden = null, // Is Hidden
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            linkTitle: $data['link_title'] ?? null,
            isDefault: $data['isDefault'] ?? null,
            title: $data['title'] ?? null,
            isHidden: $data['isHidden'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'link_title' => $this->linkTitle,
            'isDefault' => $this->isDefault,
            'title' => $this->title,
            'isHidden' => $this->isHidden,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
