<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PagesListResponsePagesItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $pageId = null, // Page
        public readonly string|null $pageTitle = null, // Page
        public readonly string|null $pageDescription = null, // Page
        public readonly \Lolzteam\Generated\Forum\Models\PagesListResponsePagesItemLinks|null $links = null, // Links
        public readonly \Lolzteam\Generated\Forum\Models\PagesListResponsePagesItemPermissions|null $permissions = null, // Permissions
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            pageId: $data['page_id'] ?? null,
            pageTitle: $data['page_title'] ?? null,
            pageDescription: $data['page_description'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\PagesListResponsePagesItemLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\PagesListResponsePagesItemPermissions::fromArray($data['permissions']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'page_id' => $this->pageId,
            'page_title' => $this->pageTitle,
            'page_description' => $this->pageDescription,
            'links' => $this->links?->toArray(),
            'permissions' => $this->permissions?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
