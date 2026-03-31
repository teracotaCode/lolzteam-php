<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class FormsCreateResponse implements JsonSerializable
{
    public function __construct(
        public readonly string|null $message = null, // Message
        public readonly \Lolzteam\Generated\Forum\Models\FormsCreateResponseContent|null $content = null, // Content
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            message: $data['message'] ?? null,
            content: isset($data['content']) && is_array($data['content']) && !empty($data['content']) ? \Lolzteam\Generated\Forum\Models\FormsCreateResponseContent::fromArray($data['content']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'message' => $this->message,
            'content' => $this->content?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
