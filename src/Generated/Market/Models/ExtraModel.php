<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ExtraModel implements JsonSerializable
{
    public function __construct(
        public readonly string|null $proxy = null, // Proxy line format ip:port:user:pass (prioritize over proxy_id parameter).
        public readonly bool|null $closeItem = null, // If set, the item will be closed **item_state = closed**.
        public readonly string|null $region = null, // Region. Required if you want to upload WoT account. Optional if you want to upload miHoYo or Riot account.
        public readonly string|null $service = null, // Service. Required if you want to upload VPN, Cinema account or gift.
        public readonly string|null $system = null, // Supercell system. Required if you want to upload Supercell account.
        public readonly string|null $confirmationCode = null, // Code from email (in case of problems). Optional if you want to upload Supercell account.
        public readonly string|null $cookies = null, // Cookies. Required if you want to upload Fortnite, Epic Games, Social Club, Instagram or TikTok account.
        public readonly bool|null $loginWithoutCookies = null, // Login without cookies. Optional if you want to upload Instagram account.
        public readonly bool|null $cookieLogin = null, // Cookie login. Optional. Used only if you want to upload TikTok account.
        public readonly string|null $mfaFile = null, // Steam mafile. Optional. Used only if you want to upload Steam account.
        public readonly int|null $dota2Mmr = null, // Dota 2 MMR. Optional. Used only if you want to upload Steam account.
        public readonly bool|null $eaGames = null, // EA Games. Optional. Used only if you want to upload Steam account.
        public readonly bool|null $uplayGames = null, // Uplay Games. Optional. Used only if you want to upload Steam account.
        public readonly bool|null $theQuarry = null, // The quarry. Optional. Used only if you want to upload Steam account.
        public readonly bool|null $warframe = null, // Warframe. Optional. Used only if you want to upload Steam account.
        public readonly bool|null $ark = null, // Ark. Optional. Used only if you want to upload Steam account.
        public readonly bool|null $arkAscended = null, // Ark Ascended. Optional. Used only if you want to upload Steam account.
        public readonly int|null $genshinCurrency = null, // Genshin Impact Primogems count. Optional. Used only if you want to upload miHoYo account.
        public readonly int|null $honkaiCurrency = null, // Honkai Star Rail Stellar Jade count. Optional. Used only if you want to upload miHoYo account.
        public readonly int|null $zenlessCurrency = null, // Zenless Zone Zero Polychrome count. Optional. Used only if you want to upload miHoYo account.
        public readonly string|null $password = null, // Telegram 2FA Password. Optional. Used only if you want to upload Telegram account.
        public readonly string|null $telegramClient = null, // Telegram client. Optional. Used only if you want to upload Telegram account.
        public readonly string|null $telegramJson = null, // Contents of session.json file. Optional. Used only if you want to upload Telegram account.
        public readonly bool|null $checkChannels = null, // Check channels. Optional. Used only if you want to upload Telegram account.
        public readonly bool|null $checkSpam = null, // Check spam. Optional. Used only if you want to upload Telegram account.
        public readonly bool|null $checkHypixelBan = null, // Check ban on Hypixel. Optional. Used only if you want to upload Minecraft account.
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            proxy: $data['proxy'] ?? null,
            closeItem: $data['close_item'] ?? null,
            region: $data['region'] ?? null,
            service: $data['service'] ?? null,
            system: $data['system'] ?? null,
            confirmationCode: $data['confirmationCode'] ?? null,
            cookies: $data['cookies'] ?? null,
            loginWithoutCookies: $data['login_without_cookies'] ?? null,
            cookieLogin: $data['cookie_login'] ?? null,
            mfaFile: $data['mfa_file'] ?? null,
            dota2Mmr: $data['dota2_mmr'] ?? null,
            eaGames: $data['ea_games'] ?? null,
            uplayGames: $data['uplay_games'] ?? null,
            theQuarry: $data['the_quarry'] ?? null,
            warframe: $data['warframe'] ?? null,
            ark: $data['ark'] ?? null,
            arkAscended: $data['ark_ascended'] ?? null,
            genshinCurrency: $data['genshin_currency'] ?? null,
            honkaiCurrency: $data['honkai_currency'] ?? null,
            zenlessCurrency: $data['zenless_currency'] ?? null,
            password: $data['password'] ?? null,
            telegramClient: $data['telegramClient'] ?? null,
            telegramJson: $data['telegramJson'] ?? null,
            checkChannels: $data['checkChannels'] ?? null,
            checkSpam: $data['checkSpam'] ?? null,
            checkHypixelBan: $data['checkHypixelBan'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'proxy' => $this->proxy,
            'close_item' => $this->closeItem,
            'region' => $this->region,
            'service' => $this->service,
            'system' => $this->system,
            'confirmationCode' => $this->confirmationCode,
            'cookies' => $this->cookies,
            'login_without_cookies' => $this->loginWithoutCookies,
            'cookie_login' => $this->cookieLogin,
            'mfa_file' => $this->mfaFile,
            'dota2_mmr' => $this->dota2Mmr,
            'ea_games' => $this->eaGames,
            'uplay_games' => $this->uplayGames,
            'the_quarry' => $this->theQuarry,
            'warframe' => $this->warframe,
            'ark' => $this->ark,
            'ark_ascended' => $this->arkAscended,
            'genshin_currency' => $this->genshinCurrency,
            'honkai_currency' => $this->honkaiCurrency,
            'zenless_currency' => $this->zenlessCurrency,
            'password' => $this->password,
            'telegramClient' => $this->telegramClient,
            'telegramJson' => $this->telegramJson,
            'checkChannels' => $this->checkChannels,
            'checkSpam' => $this->checkSpam,
            'checkHypixelBan' => $this->checkHypixelBan,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
