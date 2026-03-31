<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UserModelPublicTagsItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $backgroundColor = null, // Background
        public readonly int|null $tagId = null, // Tag
        public readonly string|null $title = null, // Title
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            backgroundColor: $data['background_color'] ?? null,
            tagId: $data['tag_id'] ?? null,
            title: $data['title'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'background_color' => $this->backgroundColor,
            'tag_id' => $this->tagId,
            'title' => $this->title,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
