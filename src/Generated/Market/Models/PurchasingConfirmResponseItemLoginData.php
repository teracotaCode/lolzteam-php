<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PurchasingConfirmResponseItemLoginData implements JsonSerializable
{
    public function __construct(
        public readonly string|null $raw = null, // Raw
        public readonly string|null $encodedRaw = null, // Encodedraw
        public readonly string|null $login = null, // Login
        public readonly string|null $password = null, // Password
        public readonly string|null $encodedPassword = null, // Encodedpassword
        public readonly string|null $oldPassword = null, // Oldpassword
        public readonly string|null $encodedOldPassword = null, // Encodedoldpassword
        public readonly bool|null $adviceToChangePassword = null, // Advicetochangepassword
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
            adviceToChangePassword: $data['adviceToChangePassword'] ?? null,
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
            'adviceToChangePassword' => $this->adviceToChangePassword,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
