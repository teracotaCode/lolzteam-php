<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PaymentsCurrencyResponseCurrencyList implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListBTC|null $bTC = null, // Btc
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListETH|null $eTH = null, // Eth
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListBNB|null $bNB = null, // Bnb
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListBCH|null $bCH = null, // Bch
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListXMR|null $xMR = null, // Xmr
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListSOL|null $sOL = null, // Sol
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListLTC|null $lTC = null, // Ltc
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListDASH|null $dASH = null, // Dash
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListTON|null $tON = null, // Ton
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListUSDT|null $uSDT = null, // Usdt
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListMATIC|null $mATIC = null, // Matic
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListTRX|null $tRX = null, // Trx
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListDOGE|null $dOGE = null, // Doge
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListKWD|null $kWD = null, // Kwd
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListGBP|null $gBP = null, // Gbp
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListCHF|null $cHF = null, // Chf
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListEUR|null $eUR = null, // Eur
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListUSD|null $uSD = null, // Usd
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListSGD|null $sGD = null, // Sgd
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListCAD|null $cAD = null, // Cad
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListAUD|null $aUD = null, // Aud
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListNZD|null $nZD = null, // Nzd
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListBGN|null $bGN = null, // Bgn
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListGEL|null $gEL = null, // Gel
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListILS|null $iLS = null, // Ils
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListQAR|null $qAR = null, // Qar
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListPEN|null $pEN = null, // Pen
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListAED|null $aED = null, // Aed
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListSAR|null $sAR = null, // Sar
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListPLN|null $pLN = null, // Pln
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListMYR|null $mYR = null, // Myr
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListRON|null $rON = null, // Ron
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListBRL|null $bRL = null, // Brl
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListDKK|null $dKK = null, // Dkk
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListCNY|null $cNY = null, // Cny
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListHKD|null $hKD = null, // Hkd
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListSEK|null $sEK = null, // Sek
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListNOK|null $nOK = null, // Nok
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListZAR|null $zAR = null, // Zar
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListMXN|null $mXN = null, // Mxn
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListCZK|null $cZK = null, // Czk
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListTWD|null $tWD = null, // Twd
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListTHB|null $tHB = null, // Thb
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListTRY|null $tRY = null, // Try
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListUAH|null $uAH = null, // Uah
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListUYU|null $uYU = null, // Uyu
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListPHP|null $pHP = null, // Php
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListINR|null $iNR = null, // Inr
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListRUB|null $rUB = null, // Rub
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListRSD|null $rSD = null, // Rsd
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListJPY|null $jPY = null, // Jpy
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListHUF|null $hUF = null, // Huf
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListKZT|null $kZT = null, // Kzt
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListCRC|null $cRC = null, // Crc
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListCLP|null $cLP = null, // Clp
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListARS|null $aRS = null, // Ars
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListKRW|null $kRW = null, // Krw
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListCOP|null $cOP = null, // Cop
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListIDR|null $iDR = null, // Idr
        public readonly \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListVND|null $vND = null, // Vnd
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            bTC: isset($data['BTC']) && is_array($data['BTC']) && !empty($data['BTC']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListBTC::fromArray($data['BTC']) : null,
            eTH: isset($data['ETH']) && is_array($data['ETH']) && !empty($data['ETH']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListETH::fromArray($data['ETH']) : null,
            bNB: isset($data['BNB']) && is_array($data['BNB']) && !empty($data['BNB']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListBNB::fromArray($data['BNB']) : null,
            bCH: isset($data['BCH']) && is_array($data['BCH']) && !empty($data['BCH']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListBCH::fromArray($data['BCH']) : null,
            xMR: isset($data['XMR']) && is_array($data['XMR']) && !empty($data['XMR']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListXMR::fromArray($data['XMR']) : null,
            sOL: isset($data['SOL']) && is_array($data['SOL']) && !empty($data['SOL']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListSOL::fromArray($data['SOL']) : null,
            lTC: isset($data['LTC']) && is_array($data['LTC']) && !empty($data['LTC']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListLTC::fromArray($data['LTC']) : null,
            dASH: isset($data['DASH']) && is_array($data['DASH']) && !empty($data['DASH']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListDASH::fromArray($data['DASH']) : null,
            tON: isset($data['TON']) && is_array($data['TON']) && !empty($data['TON']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListTON::fromArray($data['TON']) : null,
            uSDT: isset($data['USDT']) && is_array($data['USDT']) && !empty($data['USDT']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListUSDT::fromArray($data['USDT']) : null,
            mATIC: isset($data['MATIC']) && is_array($data['MATIC']) && !empty($data['MATIC']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListMATIC::fromArray($data['MATIC']) : null,
            tRX: isset($data['TRX']) && is_array($data['TRX']) && !empty($data['TRX']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListTRX::fromArray($data['TRX']) : null,
            dOGE: isset($data['DOGE']) && is_array($data['DOGE']) && !empty($data['DOGE']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListDOGE::fromArray($data['DOGE']) : null,
            kWD: isset($data['KWD']) && is_array($data['KWD']) && !empty($data['KWD']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListKWD::fromArray($data['KWD']) : null,
            gBP: isset($data['GBP']) && is_array($data['GBP']) && !empty($data['GBP']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListGBP::fromArray($data['GBP']) : null,
            cHF: isset($data['CHF']) && is_array($data['CHF']) && !empty($data['CHF']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListCHF::fromArray($data['CHF']) : null,
            eUR: isset($data['EUR']) && is_array($data['EUR']) && !empty($data['EUR']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListEUR::fromArray($data['EUR']) : null,
            uSD: isset($data['USD']) && is_array($data['USD']) && !empty($data['USD']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListUSD::fromArray($data['USD']) : null,
            sGD: isset($data['SGD']) && is_array($data['SGD']) && !empty($data['SGD']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListSGD::fromArray($data['SGD']) : null,
            cAD: isset($data['CAD']) && is_array($data['CAD']) && !empty($data['CAD']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListCAD::fromArray($data['CAD']) : null,
            aUD: isset($data['AUD']) && is_array($data['AUD']) && !empty($data['AUD']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListAUD::fromArray($data['AUD']) : null,
            nZD: isset($data['NZD']) && is_array($data['NZD']) && !empty($data['NZD']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListNZD::fromArray($data['NZD']) : null,
            bGN: isset($data['BGN']) && is_array($data['BGN']) && !empty($data['BGN']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListBGN::fromArray($data['BGN']) : null,
            gEL: isset($data['GEL']) && is_array($data['GEL']) && !empty($data['GEL']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListGEL::fromArray($data['GEL']) : null,
            iLS: isset($data['ILS']) && is_array($data['ILS']) && !empty($data['ILS']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListILS::fromArray($data['ILS']) : null,
            qAR: isset($data['QAR']) && is_array($data['QAR']) && !empty($data['QAR']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListQAR::fromArray($data['QAR']) : null,
            pEN: isset($data['PEN']) && is_array($data['PEN']) && !empty($data['PEN']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListPEN::fromArray($data['PEN']) : null,
            aED: isset($data['AED']) && is_array($data['AED']) && !empty($data['AED']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListAED::fromArray($data['AED']) : null,
            sAR: isset($data['SAR']) && is_array($data['SAR']) && !empty($data['SAR']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListSAR::fromArray($data['SAR']) : null,
            pLN: isset($data['PLN']) && is_array($data['PLN']) && !empty($data['PLN']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListPLN::fromArray($data['PLN']) : null,
            mYR: isset($data['MYR']) && is_array($data['MYR']) && !empty($data['MYR']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListMYR::fromArray($data['MYR']) : null,
            rON: isset($data['RON']) && is_array($data['RON']) && !empty($data['RON']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListRON::fromArray($data['RON']) : null,
            bRL: isset($data['BRL']) && is_array($data['BRL']) && !empty($data['BRL']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListBRL::fromArray($data['BRL']) : null,
            dKK: isset($data['DKK']) && is_array($data['DKK']) && !empty($data['DKK']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListDKK::fromArray($data['DKK']) : null,
            cNY: isset($data['CNY']) && is_array($data['CNY']) && !empty($data['CNY']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListCNY::fromArray($data['CNY']) : null,
            hKD: isset($data['HKD']) && is_array($data['HKD']) && !empty($data['HKD']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListHKD::fromArray($data['HKD']) : null,
            sEK: isset($data['SEK']) && is_array($data['SEK']) && !empty($data['SEK']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListSEK::fromArray($data['SEK']) : null,
            nOK: isset($data['NOK']) && is_array($data['NOK']) && !empty($data['NOK']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListNOK::fromArray($data['NOK']) : null,
            zAR: isset($data['ZAR']) && is_array($data['ZAR']) && !empty($data['ZAR']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListZAR::fromArray($data['ZAR']) : null,
            mXN: isset($data['MXN']) && is_array($data['MXN']) && !empty($data['MXN']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListMXN::fromArray($data['MXN']) : null,
            cZK: isset($data['CZK']) && is_array($data['CZK']) && !empty($data['CZK']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListCZK::fromArray($data['CZK']) : null,
            tWD: isset($data['TWD']) && is_array($data['TWD']) && !empty($data['TWD']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListTWD::fromArray($data['TWD']) : null,
            tHB: isset($data['THB']) && is_array($data['THB']) && !empty($data['THB']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListTHB::fromArray($data['THB']) : null,
            tRY: isset($data['TRY']) && is_array($data['TRY']) && !empty($data['TRY']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListTRY::fromArray($data['TRY']) : null,
            uAH: isset($data['UAH']) && is_array($data['UAH']) && !empty($data['UAH']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListUAH::fromArray($data['UAH']) : null,
            uYU: isset($data['UYU']) && is_array($data['UYU']) && !empty($data['UYU']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListUYU::fromArray($data['UYU']) : null,
            pHP: isset($data['PHP']) && is_array($data['PHP']) && !empty($data['PHP']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListPHP::fromArray($data['PHP']) : null,
            iNR: isset($data['INR']) && is_array($data['INR']) && !empty($data['INR']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListINR::fromArray($data['INR']) : null,
            rUB: isset($data['RUB']) && is_array($data['RUB']) && !empty($data['RUB']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListRUB::fromArray($data['RUB']) : null,
            rSD: isset($data['RSD']) && is_array($data['RSD']) && !empty($data['RSD']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListRSD::fromArray($data['RSD']) : null,
            jPY: isset($data['JPY']) && is_array($data['JPY']) && !empty($data['JPY']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListJPY::fromArray($data['JPY']) : null,
            hUF: isset($data['HUF']) && is_array($data['HUF']) && !empty($data['HUF']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListHUF::fromArray($data['HUF']) : null,
            kZT: isset($data['KZT']) && is_array($data['KZT']) && !empty($data['KZT']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListKZT::fromArray($data['KZT']) : null,
            cRC: isset($data['CRC']) && is_array($data['CRC']) && !empty($data['CRC']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListCRC::fromArray($data['CRC']) : null,
            cLP: isset($data['CLP']) && is_array($data['CLP']) && !empty($data['CLP']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListCLP::fromArray($data['CLP']) : null,
            aRS: isset($data['ARS']) && is_array($data['ARS']) && !empty($data['ARS']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListARS::fromArray($data['ARS']) : null,
            kRW: isset($data['KRW']) && is_array($data['KRW']) && !empty($data['KRW']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListKRW::fromArray($data['KRW']) : null,
            cOP: isset($data['COP']) && is_array($data['COP']) && !empty($data['COP']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListCOP::fromArray($data['COP']) : null,
            iDR: isset($data['IDR']) && is_array($data['IDR']) && !empty($data['IDR']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListIDR::fromArray($data['IDR']) : null,
            vND: isset($data['VND']) && is_array($data['VND']) && !empty($data['VND']) ? \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponseCurrencyListVND::fromArray($data['VND']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'BTC' => $this->bTC?->toArray(),
            'ETH' => $this->eTH?->toArray(),
            'BNB' => $this->bNB?->toArray(),
            'BCH' => $this->bCH?->toArray(),
            'XMR' => $this->xMR?->toArray(),
            'SOL' => $this->sOL?->toArray(),
            'LTC' => $this->lTC?->toArray(),
            'DASH' => $this->dASH?->toArray(),
            'TON' => $this->tON?->toArray(),
            'USDT' => $this->uSDT?->toArray(),
            'MATIC' => $this->mATIC?->toArray(),
            'TRX' => $this->tRX?->toArray(),
            'DOGE' => $this->dOGE?->toArray(),
            'KWD' => $this->kWD?->toArray(),
            'GBP' => $this->gBP?->toArray(),
            'CHF' => $this->cHF?->toArray(),
            'EUR' => $this->eUR?->toArray(),
            'USD' => $this->uSD?->toArray(),
            'SGD' => $this->sGD?->toArray(),
            'CAD' => $this->cAD?->toArray(),
            'AUD' => $this->aUD?->toArray(),
            'NZD' => $this->nZD?->toArray(),
            'BGN' => $this->bGN?->toArray(),
            'GEL' => $this->gEL?->toArray(),
            'ILS' => $this->iLS?->toArray(),
            'QAR' => $this->qAR?->toArray(),
            'PEN' => $this->pEN?->toArray(),
            'AED' => $this->aED?->toArray(),
            'SAR' => $this->sAR?->toArray(),
            'PLN' => $this->pLN?->toArray(),
            'MYR' => $this->mYR?->toArray(),
            'RON' => $this->rON?->toArray(),
            'BRL' => $this->bRL?->toArray(),
            'DKK' => $this->dKK?->toArray(),
            'CNY' => $this->cNY?->toArray(),
            'HKD' => $this->hKD?->toArray(),
            'SEK' => $this->sEK?->toArray(),
            'NOK' => $this->nOK?->toArray(),
            'ZAR' => $this->zAR?->toArray(),
            'MXN' => $this->mXN?->toArray(),
            'CZK' => $this->cZK?->toArray(),
            'TWD' => $this->tWD?->toArray(),
            'THB' => $this->tHB?->toArray(),
            'TRY' => $this->tRY?->toArray(),
            'UAH' => $this->uAH?->toArray(),
            'UYU' => $this->uYU?->toArray(),
            'PHP' => $this->pHP?->toArray(),
            'INR' => $this->iNR?->toArray(),
            'RUB' => $this->rUB?->toArray(),
            'RSD' => $this->rSD?->toArray(),
            'JPY' => $this->jPY?->toArray(),
            'HUF' => $this->hUF?->toArray(),
            'KZT' => $this->kZT?->toArray(),
            'CRC' => $this->cRC?->toArray(),
            'CLP' => $this->cLP?->toArray(),
            'ARS' => $this->aRS?->toArray(),
            'KRW' => $this->kRW?->toArray(),
            'COP' => $this->cOP?->toArray(),
            'IDR' => $this->iDR?->toArray(),
            'VND' => $this->vND?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
