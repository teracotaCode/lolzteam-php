<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingCreateClaimResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThread|null $thread = null, // Thread
        public readonly \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseSystemInfo|null $systemInfo = null, // SystemInfo
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            thread: isset($data['thread']) && is_array($data['thread']) && !empty($data['thread']) ? \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseThread::fromArray($data['thread']) : null,
            systemInfo: isset($data['system_info']) && is_array($data['system_info']) && !empty($data['system_info']) ? \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'thread' => $this->thread?->toArray(),
            'system_info' => $this->systemInfo?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
