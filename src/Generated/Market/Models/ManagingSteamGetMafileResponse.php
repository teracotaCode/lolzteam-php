<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingSteamGetMafileResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\ManagingSteamGetMafileResponseMaFile|null $maFile = null, // Ma File
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            maFile: isset($data['maFile']) && is_array($data['maFile']) && !empty($data['maFile']) ? \Lolzteam\Generated\Market\Models\ManagingSteamGetMafileResponseMaFile::fromArray($data['maFile']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'maFile' => $this->maFile?->toArray(),
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
