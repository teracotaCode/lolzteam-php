<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingTempEmailPasswordResponseItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $account = null, // Account
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            account: $data['account'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'account' => $this->account,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
