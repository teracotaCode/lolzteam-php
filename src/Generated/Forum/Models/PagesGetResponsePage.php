<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PagesGetResponsePage implements JsonSerializable
{
    public function __construct(
        public readonly int|null $pageId = null, // Page
        public readonly string|null $pageTitle = null, // Page
        public readonly string|null $pageDescription = null, // Page
        public readonly int|null $pageViewCount = null, // Page
        public readonly \Lolzteam\Generated\Forum\Models\PagesGetResponsePageLinks|null $links = null, // Links
        public readonly \Lolzteam\Generated\Forum\Models\PagesGetResponsePagePermissions|null $permissions = null, // Permissions
        public readonly string|null $pageHtml = null, // Page
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            pageId: $data['page_id'] ?? null,
            pageTitle: $data['page_title'] ?? null,
            pageDescription: $data['page_description'] ?? null,
            pageViewCount: $data['page_view_count'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\PagesGetResponsePageLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\PagesGetResponsePagePermissions::fromArray($data['permissions']) : null,
            pageHtml: $data['page_html'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'page_id' => $this->pageId,
            'page_title' => $this->pageTitle,
            'page_description' => $this->pageDescription,
            'page_view_count' => $this->pageViewCount,
            'links' => $this->links?->toArray(),
            'permissions' => $this->permissions?->toArray(),
            'page_html' => $this->pageHtml,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
