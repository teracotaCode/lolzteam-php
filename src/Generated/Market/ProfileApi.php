<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Generated\Market\Models\ProfileGetResponse;
use Lolzteam\Generated\Market\Models\SaveChangesResponse;

/**
 * Profile API group.
 */
class ProfileApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Profile
     *
     * Displays info about your profile.
     *
     * @endpoint GET /me
     * @param array|null $fieldsInclude List of hidden fields to include.
     * @return \Lolzteam\Generated\Market\Models\ProfileGetResponse
     */
    public function get(
        array|null $fieldsInclude = null,
    ): \Lolzteam\Generated\Market\Models\ProfileGetResponse {
        $path = '/me';
        $options = [];
        $params = [];
        if ($fieldsInclude !== null) {
            $params['fields_include'] = $fieldsInclude;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ProfileGetResponse::fromArray($response);
    }

    /**
     * Edit Market Settings
     *
     * Change settings about your profile on the market.
     *
     * @endpoint PUT /me
     * @param array|null $user 
     * @param array|null $option 
     * @param array|null $allowAcceptAccounts Usernames who can transfer market accounts to you. Separate values with a comma.
     * @param string|null $telegramApiId Telegram api id.
     * @param string|null $telegramApiHash Telegram api hash.
     * @param string|null $telegramDeviceModel Telegram device model.
     * @param string|null $telegramSystemVersion Telegram system version.
     * @param string|null $telegramAppVersion Telegram app version.
     * @param string|null $telegramLangPack Telegram lang pack.
     * @param string|null $telegramLangCode Telegram lang code.
     * @param string|null $telegramSystemLangCode Telegram system lang code.
     * @param bool|null $clearTelegramClient Clear Telegram data.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function edit(
        array|null $user = null,
        array|null $option = null,
        array|null $allowAcceptAccounts = null,
        string|null $telegramApiId = null,
        string|null $telegramApiHash = null,
        string|null $telegramDeviceModel = null,
        string|null $telegramSystemVersion = null,
        string|null $telegramAppVersion = null,
        string|null $telegramLangPack = null,
        string|null $telegramLangCode = null,
        string|null $telegramSystemLangCode = null,
        bool|null $clearTelegramClient = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/me';
        $options = [];
        $json = [];
        if ($user !== null) {
            $json['user'] = $user;
        }
        if ($option !== null) {
            $json['option'] = $option;
        }
        if ($allowAcceptAccounts !== null) {
            $json['allow_accept_accounts'] = $allowAcceptAccounts;
        }
        if ($telegramApiId !== null) {
            $json['telegram_api_id'] = $telegramApiId;
        }
        if ($telegramApiHash !== null) {
            $json['telegram_api_hash'] = $telegramApiHash;
        }
        if ($telegramDeviceModel !== null) {
            $json['telegram_device_model'] = $telegramDeviceModel;
        }
        if ($telegramSystemVersion !== null) {
            $json['telegram_system_version'] = $telegramSystemVersion;
        }
        if ($telegramAppVersion !== null) {
            $json['telegram_app_version'] = $telegramAppVersion;
        }
        if ($telegramLangPack !== null) {
            $json['telegram_lang_pack'] = $telegramLangPack;
        }
        if ($telegramLangCode !== null) {
            $json['telegram_lang_code'] = $telegramLangCode;
        }
        if ($telegramSystemLangCode !== null) {
            $json['telegram_system_lang_code'] = $telegramSystemLangCode;
        }
        if ($clearTelegramClient !== null) {
            $json['clear_telegram_client'] = $clearTelegramClient;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('PUT', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }
}
