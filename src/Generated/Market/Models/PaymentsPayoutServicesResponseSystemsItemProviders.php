<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PaymentsPayoutServicesResponseSystemsItemProviders implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersBEP20|null $bEP20 = null, // Be
        public readonly \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersTRC20|null $tRC20 = null, // Tr
        public readonly \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersERC20|null $eRC20 = null, // Er
        public readonly \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersTRX|null $tRX = null, // Trx
        public readonly \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersBTC|null $bTC = null, // Btc
        public readonly \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersTON|null $tON = null, // Ton
        public readonly \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersETH|null $eTH = null, // Eth
        public readonly \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersLTC|null $lTC = null, // Ltc
        public readonly \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersBNB|null $bNB = null, // Bnb
        public readonly \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersDASH|null $dASH = null, // Dash
        public readonly \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersDOGE|null $dOGE = null, // Doge
        public readonly \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersXMR|null $xMR = null, // Xmr
        public readonly \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersSOL|null $sOL = null, // Sol
        public readonly \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersBCH|null $bCH = null, // Bch
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            bEP20: isset($data['BEP20']) && is_array($data['BEP20']) && !empty($data['BEP20']) ? \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersBEP20::fromArray($data['BEP20']) : null,
            tRC20: isset($data['TRC20']) && is_array($data['TRC20']) && !empty($data['TRC20']) ? \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersTRC20::fromArray($data['TRC20']) : null,
            eRC20: isset($data['ERC20']) && is_array($data['ERC20']) && !empty($data['ERC20']) ? \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersERC20::fromArray($data['ERC20']) : null,
            tRX: isset($data['TRX']) && is_array($data['TRX']) && !empty($data['TRX']) ? \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersTRX::fromArray($data['TRX']) : null,
            bTC: isset($data['BTC']) && is_array($data['BTC']) && !empty($data['BTC']) ? \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersBTC::fromArray($data['BTC']) : null,
            tON: isset($data['TON']) && is_array($data['TON']) && !empty($data['TON']) ? \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersTON::fromArray($data['TON']) : null,
            eTH: isset($data['ETH']) && is_array($data['ETH']) && !empty($data['ETH']) ? \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersETH::fromArray($data['ETH']) : null,
            lTC: isset($data['LTC']) && is_array($data['LTC']) && !empty($data['LTC']) ? \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersLTC::fromArray($data['LTC']) : null,
            bNB: isset($data['BNB']) && is_array($data['BNB']) && !empty($data['BNB']) ? \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersBNB::fromArray($data['BNB']) : null,
            dASH: isset($data['DASH']) && is_array($data['DASH']) && !empty($data['DASH']) ? \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersDASH::fromArray($data['DASH']) : null,
            dOGE: isset($data['DOGE']) && is_array($data['DOGE']) && !empty($data['DOGE']) ? \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersDOGE::fromArray($data['DOGE']) : null,
            xMR: isset($data['XMR']) && is_array($data['XMR']) && !empty($data['XMR']) ? \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersXMR::fromArray($data['XMR']) : null,
            sOL: isset($data['SOL']) && is_array($data['SOL']) && !empty($data['SOL']) ? \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersSOL::fromArray($data['SOL']) : null,
            bCH: isset($data['BCH']) && is_array($data['BCH']) && !empty($data['BCH']) ? \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponseSystemsItemProvidersBCH::fromArray($data['BCH']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'BEP20' => $this->bEP20?->toArray(),
            'TRC20' => $this->tRC20?->toArray(),
            'ERC20' => $this->eRC20?->toArray(),
            'TRX' => $this->tRX?->toArray(),
            'BTC' => $this->bTC?->toArray(),
            'TON' => $this->tON?->toArray(),
            'ETH' => $this->eTH?->toArray(),
            'LTC' => $this->lTC?->toArray(),
            'BNB' => $this->bNB?->toArray(),
            'DASH' => $this->dASH?->toArray(),
            'DOGE' => $this->dOGE?->toArray(),
            'XMR' => $this->xMR?->toArray(),
            'SOL' => $this->sOL?->toArray(),
            'BCH' => $this->bCH?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
