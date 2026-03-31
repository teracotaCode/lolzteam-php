<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ListStatesResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStates|null $userItemStates = null, // User Item States
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            userItemStates: isset($data['userItemStates']) && is_array($data['userItemStates']) && !empty($data['userItemStates']) ? \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStates::fromArray($data['userItemStates']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'userItemStates' => $this->userItemStates?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
