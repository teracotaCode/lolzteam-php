<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingSteamValueResponse implements JsonSerializable
{
    public function __construct(
        public readonly string|null $query = null, // Query
        public readonly \Lolzteam\Generated\Market\Models\ManagingSteamValueResponseData|null $data = null, // Data
        public readonly int|null $appId = null, // App id
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            query: $data['query'] ?? null,
            data: isset($data['data']) && is_array($data['data']) && !empty($data['data']) ? \Lolzteam\Generated\Market\Models\ManagingSteamValueResponseData::fromArray($data['data']) : null,
            appId: $data['appId'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'query' => $this->query,
            'data' => $this->data?->toArray(),
            'appId' => $this->appId,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
