<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ConversationsCreateResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Forum\Models\ConversationsCreateResponseConversation|null $conversation = null,
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            conversation: isset($data['conversation']) && is_array($data['conversation']) && !empty($data['conversation']) ? \Lolzteam\Generated\Forum\Models\ConversationsCreateResponseConversation::fromArray($data['conversation']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'conversation' => $this->conversation?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
