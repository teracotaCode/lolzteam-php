<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingSteamGetMafileResponseMaFile implements JsonSerializable
{
    public function __construct(
        public readonly string|null $sharedSecret = null, // Shared
        public readonly int|null $serialNumber = null, // Serial
        public readonly string|null $revocationCode = null, // Revocation
        public readonly string|null $uri = null, // Uri
        public readonly string|null $accountName = null, // Account
        public readonly string|null $tokenGid = null, // Token
        public readonly string|null $identitySecret = null, // Identity
        public readonly string|null $secret1 = null, // Secret
        public readonly string|null $deviceId = null, // Device
        public readonly bool|null $fullyEnrolled = null, // Fully
        public readonly \Lolzteam\Generated\Market\Models\ManagingSteamGetMafileResponseMaFileSession|null $session = null, // Session
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            sharedSecret: $data['shared_secret'] ?? null,
            serialNumber: $data['serial_number'] ?? null,
            revocationCode: $data['revocation_code'] ?? null,
            uri: $data['uri'] ?? null,
            accountName: $data['account_name'] ?? null,
            tokenGid: $data['token_gid'] ?? null,
            identitySecret: $data['identity_secret'] ?? null,
            secret1: $data['secret_1'] ?? null,
            deviceId: $data['device_id'] ?? null,
            fullyEnrolled: $data['fully_enrolled'] ?? null,
            session: isset($data['Session']) && is_array($data['Session']) && !empty($data['Session']) ? \Lolzteam\Generated\Market\Models\ManagingSteamGetMafileResponseMaFileSession::fromArray($data['Session']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'shared_secret' => $this->sharedSecret,
            'serial_number' => $this->serialNumber,
            'revocation_code' => $this->revocationCode,
            'uri' => $this->uri,
            'account_name' => $this->accountName,
            'token_gid' => $this->tokenGid,
            'identity_secret' => $this->identitySecret,
            'secret_1' => $this->secret1,
            'device_id' => $this->deviceId,
            'fully_enrolled' => $this->fullyEnrolled,
            'Session' => $this->session?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
