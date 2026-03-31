<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class LinksGetResponseLinkForum implements JsonSerializable
{
    public function __construct(
        public readonly int|null $linkId = null, // Link
        public readonly string|null $linkTitle = null, // Link
        public readonly string|null $linkDescription = null, // Link
        public readonly \Lolzteam\Generated\Forum\Models\LinksGetResponseLinkForumLinks|null $links = null, // Links
        public readonly \Lolzteam\Generated\Forum\Models\LinksGetResponseLinkForumPermissions|null $permissions = null, // Permissions
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            linkId: $data['link_id'] ?? null,
            linkTitle: $data['link_title'] ?? null,
            linkDescription: $data['link_description'] ?? null,
            links: isset($data['links']) && is_array($data['links']) && !empty($data['links']) ? \Lolzteam\Generated\Forum\Models\LinksGetResponseLinkForumLinks::fromArray($data['links']) : null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\LinksGetResponseLinkForumPermissions::fromArray($data['permissions']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'link_id' => $this->linkId,
            'link_title' => $this->linkTitle,
            'link_description' => $this->linkDescription,
            'links' => $this->links?->toArray(),
            'permissions' => $this->permissions?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
