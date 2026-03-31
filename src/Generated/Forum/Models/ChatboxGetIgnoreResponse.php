<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ChatboxGetIgnoreResponseIgnoredItem[]|null $ignored Ignored
 */
class ChatboxGetIgnoreResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $ignored = null, // Ignored
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            ignored: isset($data['ignored']) && is_array($data['ignored']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ChatboxGetIgnoreResponseIgnoredItem::fromArray($item), $data['ignored']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'ignored' => $this->ignored !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->ignored) : null,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
