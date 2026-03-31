<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PaymentsPayoutServicesResponseSystemsItemProvidersSOL implements JsonSerializable
{
    public function __construct(
        public readonly string|null $title = null, // Title
        public readonly bool|null $isUnavailable = null, // Is Unavailable
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            title: $data['title'] ?? null,
            isUnavailable: $data['isUnavailable'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'title' => $this->title,
            'isUnavailable' => $this->isUnavailable,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
