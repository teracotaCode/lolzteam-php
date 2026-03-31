<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryEAResponseItemsItemAccountLinksItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $link = null, // Link
        public readonly string|null $text = null, // Text
        public readonly string|null $iconClass = null, // Icon Class
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            link: $data['link'] ?? null,
            text: $data['text'] ?? null,
            iconClass: $data['iconClass'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'link' => $this->link,
            'text' => $this->text,
            'iconClass' => $this->iconClass,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
