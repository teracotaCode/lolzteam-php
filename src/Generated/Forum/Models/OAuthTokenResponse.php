<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class OAuthTokenResponse implements JsonSerializable
{
    public function __construct(
        public readonly string|null $accessToken = null, // The access token issued by the authorization server
        public readonly string|null $tokenType = null, // The type of the token
        public readonly int|null $expiresIn = null, // The lifetime in seconds of the access token
        public readonly string|null $refreshToken = null, // The refresh token, which can be used to obtain new access tokens
        public readonly string|null $scope = null, // The scope of the access token
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            accessToken: $data['access_token'] ?? null,
            tokenType: $data['token_type'] ?? null,
            expiresIn: $data['expires_in'] ?? null,
            refreshToken: $data['refresh_token'] ?? null,
            scope: $data['scope'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'access_token' => $this->accessToken,
            'token_type' => $this->tokenType,
            'expires_in' => $this->expiresIn,
            'refresh_token' => $this->refreshToken,
            'scope' => $this->scope,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
