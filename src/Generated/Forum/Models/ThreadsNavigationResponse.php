<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ThreadsNavigationResponseElementsItem[]|null $elements Elements
 */
class ThreadsNavigationResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $elements = null, // Elements
        public readonly int|null $elementsCount = null, // Elements
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            elements: isset($data['elements']) && is_array($data['elements']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ThreadsNavigationResponseElementsItem::fromArray($item), $data['elements']) : null,
            elementsCount: $data['elements_count'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'elements' => $this->elements !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->elements) : null,
            'elements_count' => $this->elementsCount,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
