<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PaymentsPayoutServicesResponseSystemsItem implements JsonSerializable
{
    public function __construct(
        public readonly string|null $system = null, // System
        public readonly string|null $commission = null, // Commission
        public readonly int|null $min = null, // Min
        public readonly int|null $max = null, // Max
        public readonly bool|null $instantPayout = null, // Instant
        public readonly bool|null $problematicPayout = null, // Problematic
        public readonly bool|null $isUnavailable = null, // Is
        public readonly bool|null $p2p = null,
        public readonly bool|null $hasWallet = null, // Has
        public readonly \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProviders|null $providers = null, // Providers
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            system: $data['system'] ?? null,
            commission: $data['commission'] ?? null,
            min: $data['min'] ?? null,
            max: $data['max'] ?? null,
            instantPayout: $data['instant_payout'] ?? null,
            problematicPayout: $data['problematic_payout'] ?? null,
            isUnavailable: $data['is_unavailable'] ?? null,
            p2p: $data['p2p'] ?? null,
            hasWallet: $data['has_wallet'] ?? null,
            providers: isset($data['providers']) && is_array($data['providers']) && !empty($data['providers']) ? \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProviders::fromArray($data['providers']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'system' => $this->system,
            'commission' => $this->commission,
            'min' => $this->min,
            'max' => $this->max,
            'instant_payout' => $this->instantPayout,
            'problematic_payout' => $this->problematicPayout,
            'is_unavailable' => $this->isUnavailable,
            'p2p' => $this->p2p,
            'has_wallet' => $this->hasWallet,
            'providers' => $this->providers?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
