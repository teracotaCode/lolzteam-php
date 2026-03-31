<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ProfileClaimsResponseStats implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\ProfileClaimsResponseStatsMarket|null $market = null, // Market
        public readonly \Lolzteam\Generated\Market\Models\ProfileClaimsResponseStatsNoMarket|null $noMarket = null, // No Market
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            market: isset($data['market']) && is_array($data['market']) && !empty($data['market']) ? \Lolzteam\Generated\Market\Models\ProfileClaimsResponseStatsMarket::fromArray($data['market']) : null,
            noMarket: isset($data['noMarket']) && is_array($data['noMarket']) && !empty($data['noMarket']) ? \Lolzteam\Generated\Market\Models\ProfileClaimsResponseStatsNoMarket::fromArray($data['noMarket']) : null,
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
