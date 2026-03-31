<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersFindResponseUsersItemUserExternalAuthenticationsItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $provider = null, // Provider
        public readonly string|null $providerKey = null, // Provider
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            provider: $data['provider'] ?? null,
            providerKey: $data['provider_key'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'provider' => $this->provider,
            'provider_key' => $this->providerKey,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
