<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ThreadsGetResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Forum\Models\ThreadsGetResponseThread|null $thread = null,
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            thread: isset($data['thread']) && is_array($data['thread']) && !empty($data['thread']) ? \Lolzteam\Generated\Forum\Models\ThreadsGetResponseThread::fromArray($data['thread']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'thread' => $this->thread?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
