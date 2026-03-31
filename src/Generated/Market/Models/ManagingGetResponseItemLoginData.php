<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingGetResponseItemLoginData implements JsonSerializable
{
    public function __construct(
        public readonly string|null $raw = null, // Raw
        public readonly string|null $encodedRaw = null, // Encoded Raw
        public readonly string|null $login = null, // Login
        public readonly string|null $password = null, // Password
        public readonly string|null $encodedPassword = null, // Encoded Password
        public readonly string|null $oldPassword = null, // Old Password
        public readonly mixed $encodedOldPassword = null, // Encoded Old Password
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            raw: $data['raw'] ?? null,
            encodedRaw: $data['encodedRaw'] ?? null,
            login: $data['login'] ?? null,
            password: $data['password'] ?? null,
            encodedPassword: $data['encodedPassword'] ?? null,
            oldPassword: $data['oldPassword'] ?? null,
            encodedOldPassword: $data['encodedOldPassword'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'raw' => $this->raw,
            'encodedRaw' => $this->encodedRaw,
            'login' => $this->login,
            'password' => $this->password,
            'encodedPassword' => $this->encodedPassword,
            'oldPassword' => $this->oldPassword,
            'encodedOldPassword' => $this->encodedOldPassword,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
