<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingSteamGetMafileResponseMaFileSession implements JsonSerializable
{
    public function __construct(
        public readonly string|null $sessionID = null, // Session Id
        public readonly string|null $accessToken = null, // Access Token
        public readonly string|null $refreshToken = null, // Refresh Token
        public readonly string|null $steamID = null, // Steam Id
        public readonly string|null $steamLoginSecure = null, // Steam Login Secure
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            sessionID: $data['SessionID'] ?? null,
            accessToken: $data['AccessToken'] ?? null,
            refreshToken: $data['RefreshToken'] ?? null,
            steamID: $data['SteamID'] ?? null,
            steamLoginSecure: $data['SteamLoginSecure'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'SessionID' => $this->sessionID,
            'AccessToken' => $this->accessToken,
            'RefreshToken' => $this->refreshToken,
            'SteamID' => $this->steamID,
            'SteamLoginSecure' => $this->steamLoginSecure,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
