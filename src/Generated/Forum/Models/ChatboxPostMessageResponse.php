<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ChatboxPostMessageResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Forum\Models\ChatboxPostMessageResponseMessage|null $message = null,
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            message: isset($data['message']) && is_array($data['message']) && !empty($data['message']) ? \Lolzteam\Generated\Forum\Models\ChatboxPostMessageResponseMessage::fromArray($data['message']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'message' => $this->message?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
