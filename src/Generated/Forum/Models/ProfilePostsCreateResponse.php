<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ProfilePostsCreateResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Forum\Models\ProfilePostsCreateResponseProfilePost|null $profilePost = null, // Profile
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            profilePost: isset($data['profile_post']) && is_array($data['profile_post']) && !empty($data['profile_post']) ? \Lolzteam\Generated\Forum\Models\ProfilePostsCreateResponseProfilePost::fromArray($data['profile_post']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'profile_post' => $this->profilePost?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
