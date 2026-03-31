<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PurchasingConfirmResponseItem implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\PurchasingConfirmResponseItemLoginData|null $loginData = null, // LoginData
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            loginData: isset($data['loginData']) && is_array($data['loginData']) && !empty($data['loginData']) ? \Lolzteam\Generated\Market\Models\PurchasingConfirmResponseItemLoginData::fromArray($data['loginData']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'loginData' => $this->loginData?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
