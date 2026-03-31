<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryUplayResponseItemsItemR6OperatorsItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $img = null, // Img
        public readonly string|null $name = null, // Name
        public readonly string|null $url = null, // Url
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            img: $data['img'] ?? null,
            name: $data['name'] ?? null,
            url: $data['url'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'img' => $this->img,
            'name' => $this->name,
            'url' => $this->url,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
