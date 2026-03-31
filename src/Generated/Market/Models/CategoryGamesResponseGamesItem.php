<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryGamesResponseGamesItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $appId = null, // App
        public readonly string|null $title = null, // Title
        public readonly string|null $abbr = null, // Abbr
        public readonly int|null $categoryId = null, // Category
        public readonly string|null $img = null, // Img
        public readonly string|null $url = null, // Url
        public readonly string|null $ru = null, // Ru
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            appId: $data['app_id'] ?? null,
            title: $data['title'] ?? null,
            abbr: $data['abbr'] ?? null,
            categoryId: $data['category_id'] ?? null,
            img: $data['img'] ?? null,
            url: $data['url'] ?? null,
            ru: $data['ru'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'app_id' => $this->appId,
            'title' => $this->title,
            'abbr' => $this->abbr,
            'category_id' => $this->categoryId,
            'img' => $this->img,
            'url' => $this->url,
            'ru' => $this->ru,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
