<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersClaimsResponseStats implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Forum\Models\UsersClaimsResponseStatsMarket|null $market = null, // Market
        public readonly \Lolzteam\Generated\Forum\Models\UsersClaimsResponseStatsNoMarket|null $noMarket = null, // No Market
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            market: isset($data['market']) && is_array($data['market']) && !empty($data['market']) ? \Lolzteam\Generated\Forum\Models\UsersClaimsResponseStatsMarket::fromArray($data['market']) : null,
            noMarket: isset($data['noMarket']) && is_array($data['noMarket']) && !empty($data['noMarket']) ? \Lolzteam\Generated\Forum\Models\UsersClaimsResponseStatsNoMarket::fromArray($data['noMarket']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'market' => $this->market?->toArray(),
            'noMarket' => $this->noMarket?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
