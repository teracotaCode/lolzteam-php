<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Generated\Market\Models\ManagingGetResponse;
use Lolzteam\Generated\Market\Models\SaveChangesResponse;
use Lolzteam\Generated\Market\Models\ProfileClaimsResponse;
use Lolzteam\Generated\Market\Models\ManagingCreateClaimResponse;
use Lolzteam\Generated\Market\Models\ManagingBulkGetResponse;
use Lolzteam\Generated\Market\Models\ManagingSteamInventoryValueResponse;
use Lolzteam\Generated\Market\Models\ManagingSteamValueResponse;
use Lolzteam\Generated\Market\Models\ManagingAIPriceResponse;
use Lolzteam\Generated\Market\Models\ManagingAutoBuyPriceResponse;
use Lolzteam\Generated\Market\Models\ManagingSteamUpdateValueResponse;
use Lolzteam\Generated\Market\Models\ManagingImageResponse;
use Lolzteam\Generated\Market\Models\ManagingEmailCodeResponse;
use Lolzteam\Generated\Market\Models\ManagingGetLetters2Response;
use Lolzteam\Generated\Market\Models\ManagingSteamGetMafileResponse;
use Lolzteam\Generated\Market\Models\ManagingSteamMafileCodeResponse;
use Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponse;
use Lolzteam\Generated\Market\Models\ManagingCheckGuaranteeResponse;
use Lolzteam\Generated\Market\Models\ManagingChangePasswordResponse;
use Lolzteam\Generated\Market\Models\ManagingTempEmailPasswordResponse;

/**
 * Accounts managing API group.
 */
class AccountsManagingApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Account
     *
     * Displays account information.
     *
     * @endpoint GET /{item_id}
     * @param int|null $itemId Item id.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @return \Lolzteam\Generated\Market\Models\ManagingGetResponse
     */
    public function get(
        int $itemId,
        bool|null $parseSameItemIds = null,
    ): \Lolzteam\Generated\Market\Models\ManagingGetResponse {
        $path = '/' . rawurlencode((string)$itemId);
        $options = [];
        $params = [];
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingGetResponse::fromArray($response);
    }

    /**
     * Delete Account
     *
     * Deletes your account from public search. Deletion type is soft. You can restore account after deletion if you want.
     *
     * @endpoint DELETE /{item_id}
     * @param int|null $itemId Item id.
     * @param string|null $reason Delete reason.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function delete(
        int $itemId,
        string|null $reason = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId);
        $options = [];
        $json = [];
        if ($reason !== null) {
            $json['reason'] = $reason;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Claims
     *
     * Returns a list of claims filed against you.
     *
     * @endpoint GET /claims
     * @param string|null $type Filter claims by their type.
     * @param string|null $claimState Filter claims by their state.
     * @return \Lolzteam\Generated\Market\Models\ProfileClaimsResponse
     */
    public function claims(
        string|null $type = null,
        string|null $claimState = null,
    ): \Lolzteam\Generated\Market\Models\ProfileClaimsResponse {
        $path = '/claims';
        $options = [];
        $params = [];
        if ($type !== null) {
            $params['type'] = $type;
        }
        if ($claimState !== null) {
            $params['claim_state'] = $claimState;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ProfileClaimsResponse::fromArray($response);
    }

    /**
     * Create Claim
     *
     * Create a claim.
     *
     * @endpoint POST /claims
     * @param int|null $itemId Item id.
     * @param string|null $postBody You should describe what's happened. - describe the situation in a nutshell. If you wish, you can describe the situation in more detail using the "Spoiler" function. - attach screenshots of correspondence. You must upload to the site [Imgur](https://imgur.com/upload) - other evidence; - notify the respondent about the complaint you created, familiarize him with hidden content  Describe the situation in as much detail as possible.
     * @return \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponse
     */
    public function createClaim(
        int|null $itemId = null,
        string|null $postBody = null,
    ): \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponse {
        $path = '/claims';
        $options = [];
        $json = [];
        if ($itemId !== null) {
            $json['item_id'] = $itemId;
        }
        if ($postBody !== null) {
            $json['post_body'] = $postBody;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingCreateClaimResponse::fromArray($response);
    }

    /**
     * Bulk Get Accounts
     *
     * Bulk get up to 250 accounts.
     *
     * @endpoint POST /bulk/items
     * @param array|null $itemId Item id.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @return \Lolzteam\Generated\Market\Models\ManagingBulkGetResponse
     */
    public function bulkGet(
        array|null $itemId = null,
        bool|null $parseSameItemIds = null,
    ): \Lolzteam\Generated\Market\Models\ManagingBulkGetResponse {
        $path = '/bulk/items';
        $options = [];
        $json = [];
        if ($itemId !== null) {
            $json['item_id'] = $itemId;
        }
        if ($parseSameItemIds !== null) {
            $json['parse_same_item_ids'] = $parseSameItemIds;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingBulkGetResponse::fromArray($response);
    }

    /**
     * Get Account Steam Inventory Value
     *
     * Gets Account steam inventory value.
     *
     * @endpoint GET /{item_id}/inventory-value
     * @param int|null $itemId Item id.
     * @param int|null $appId Application id.
     * @param string|null $currency Currency in which the inventory value will be returned
     * @param bool|null $ignoreCache Ignore cache.
     * @return \Lolzteam\Generated\Market\Models\ManagingSteamInventoryValueResponse
     */
    public function steamInventoryValue(
        int $itemId,
        int|null $appId = null,
        string|null $currency = null,
        bool|null $ignoreCache = null,
    ): \Lolzteam\Generated\Market\Models\ManagingSteamInventoryValueResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/inventory-value';
        $options = [];
        $params = [];
        if ($appId !== null) {
            $params['app_id'] = $appId;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($ignoreCache !== null) {
            $params['ignore_cache'] = $ignoreCache;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingSteamInventoryValueResponse::fromArray($response);
    }

    /**
     * Get Steam Inventory Value
     *
     * Gets steam inventory value.
     * > 📘 This method is rate limited. You can send 20 requests per minute (3s delay between requests)
     *
     * @endpoint GET /steam-value
     * @param string|null $link Link or id of account. Can be [**https://lzt.market/{item-id}/**, **https://steamcommunity.com/id/{steam-name}**, **https://steamcommunity.com/profiles/{steam-id}**, **{steam-id}**].
     * @param int|null $appId Application id.
     * @param string|null $currency Currency in which the inventory value will be returned
     * @param bool|null $ignoreCache Ignore cache.
     * @return \Lolzteam\Generated\Market\Models\ManagingSteamValueResponse
     */
    public function steamValue(
        string|null $link = null,
        int|null $appId = null,
        string|null $currency = null,
        bool|null $ignoreCache = null,
    ): \Lolzteam\Generated\Market\Models\ManagingSteamValueResponse {
        $path = '/steam-value';
        $options = [];
        $params = [];
        if ($link !== null) {
            $params['link'] = $link;
        }
        if ($appId !== null) {
            $params['app_id'] = $appId;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($ignoreCache !== null) {
            $params['ignore_cache'] = $ignoreCache;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingSteamValueResponse::fromArray($response);
    }

    /**
     * Get Steam HTML
     *
     * Returns Steam account profile/games preview.
     *
     * @endpoint GET /{item_id}/steam-preview
     * @param int|null $itemId Item id.
     * @param string|null $type Type of page.
     * @return string
     */
    public function steamPreview(
        int $itemId,
        string|null $type = null,
    ): string {
        $path = '/' . rawurlencode((string)$itemId) . '/steam-preview';
        $options = [];
        $params = [];
        if ($type !== null) {
            $params['type'] = $type;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return $response['_raw'] ?? '';
    }

    /**
     * Edit Account
     *
     * Edits any details of account.
     *
     * @endpoint PUT /{item_id}/edit
     * @param int|null $itemId Item id.
     * @param string|null $title Title of account. If **title** specified and **title_en** is empty, **title_en** will be automatically translated to English language.
     * @param string|null $titleEn English title of account. If **title_en** specified and **title** is empty, **title** will be automatically translated to Russian language.
     * @param int|null $price Current price of account in your currency.
     * @param string|null $currency Currency
     * @param string|null $itemOrigin Account origin. Where did you get it from.
     * @param string|null $emailLoginData Email login data (email:password format).
     * @param string|null $emailType Email type.
     * @param bool|null $allowAskDiscount Allow users to ask discount for this account.
     * @param int|null $proxyId Using proxy id for account checking. See GET or POST /proxy to get or edit proxy list.
     * @param string|null $description Account public description.
     * @param string|null $information Account private information (visible only for buyer).
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function edit(
        int $itemId,
        string|null $title = null,
        string|null $titleEn = null,
        int|null $price = null,
        string|null $currency = null,
        string|null $itemOrigin = null,
        string|null $emailLoginData = null,
        string|null $emailType = null,
        bool|null $allowAskDiscount = null,
        int|null $proxyId = null,
        string|null $description = null,
        string|null $information = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/edit';
        $options = [];
        $json = [];
        if ($title !== null) {
            $json['title'] = $title;
        }
        if ($titleEn !== null) {
            $json['title_en'] = $titleEn;
        }
        if ($price !== null) {
            $json['price'] = $price;
        }
        if ($currency !== null) {
            $json['currency'] = $currency;
        }
        if ($itemOrigin !== null) {
            $json['item_origin'] = $itemOrigin;
        }
        if ($emailLoginData !== null) {
            $json['email_login_data'] = $emailLoginData;
        }
        if ($emailType !== null) {
            $json['email_type'] = $emailType;
        }
        if ($allowAskDiscount !== null) {
            $json['allow_ask_discount'] = $allowAskDiscount;
        }
        if ($proxyId !== null) {
            $json['proxy_id'] = $proxyId;
        }
        if ($description !== null) {
            $json['description'] = $description;
        }
        if ($information !== null) {
            $json['information'] = $information;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('PUT', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get AI Price
     *
     * Get AI-suggested price for the account.
     *
     * @endpoint GET /{item_id}/ai-price
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\ManagingAIPriceResponse
     */
    public function aIPrice(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\ManagingAIPriceResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/ai-price';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingAIPriceResponse::fromArray($response);
    }

    /**
     * Get Auto Buy Price
     *
     * Get auto buy price for the account.
     *
     * @endpoint GET /{item_id}/auto-buy-price
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\ManagingAutoBuyPriceResponse
     */
    public function autoBuyPrice(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\ManagingAutoBuyPriceResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/auto-buy-price';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingAutoBuyPriceResponse::fromArray($response);
    }

    /**
     * Edit Note
     *
     * Edits a note for the account.
     *
     * @endpoint POST /{item_id}/note-save
     * @param int|null $itemId Item id.
     * @param string|null $text Text of note.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function note(
        int $itemId,
        string|null $text = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/note-save';
        $options = [];
        $json = [];
        if ($text !== null) {
            $json['text'] = $text;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Update Inventory Value
     *
     * Update inventory value.
     *
     * @endpoint POST /{item_id}/update-inventory
     * @param int|null $itemId Item id.
     * @param bool|null $all Update the entire Steam inventory.
     * @param int|null $appId Application id.
     * @param bool|null $authorize Parse inventory when authorized (Parse trade banned items).
     * @return \Lolzteam\Generated\Market\Models\ManagingSteamUpdateValueResponse
     */
    public function steamUpdateValue(
        int $itemId,
        bool|null $all = null,
        int|null $appId = null,
        bool|null $authorize = null,
    ): \Lolzteam\Generated\Market\Models\ManagingSteamUpdateValueResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/update-inventory';
        $options = [];
        $json = [];
        if ($all !== null) {
            $json['all'] = $all;
        }
        if ($appId !== null) {
            $json['app_id'] = $appId;
        }
        if ($authorize !== null) {
            $json['authorize'] = $authorize;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingSteamUpdateValueResponse::fromArray($response);
    }

    /**
     * Bump Account
     *
     * Bumps account in the search.
     *
     * @endpoint POST /{item_id}/bump
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function bump(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/bump';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Auto Bump
     *
     * Enables/edits automatic bumping for the specified account.
     *
     * @endpoint POST /{item_id}/auto-bump
     * @param int|null $itemId Item id.
     * @param int|null $hour Interval in hours
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function autoBump(
        int $itemId,
        int|null $hour = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/auto-bump';
        $options = [];
        $json = [];
        if ($hour !== null) {
            $json['hour'] = $hour;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Disable Auto Bump
     *
     * Disables automatic bumping for the specified account.
     *
     * @endpoint DELETE /{item_id}/auto-bump
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function autoBumpDisable(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/auto-bump';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Open Account
     *
     * Opens account.
     *
     * @endpoint POST /{item_id}/open
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function open(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/open';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Close Account
     *
     * Closes account.
     *
     * @endpoint POST /{item_id}/close
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function close(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/close';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Account Image
     *
     * Get account image.
     *
     * @endpoint GET /{item_id}/image
     * @param int|null $itemId Item id.
     * @param string|null $type Type of image.
     * @return \Lolzteam\Generated\Market\Models\ManagingImageResponse
     */
    public function image(
        int $itemId,
        string|null $type = null,
    ): \Lolzteam\Generated\Market\Models\ManagingImageResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/image';
        $options = [];
        $params = [];
        if ($type !== null) {
            $params['type'] = $type;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingImageResponse::fromArray($response);
    }

    /**
     * Get Email Confirmation Code
     *
     * Gets confirmation code or link.
     * 
     * > ❗️ If you receive a "retry_request" error, you should repeat the same request (up to a maximum of 100 times)
     *
     * @endpoint GET /{item_id}/email-code
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\ManagingEmailCodeResponse
     */
    public function emailCode(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\ManagingEmailCodeResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/email-code';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingEmailCodeResponse::fromArray($response);
    }

    /**
     * Get Email Letters
     *
     * Returns account letters.
     * 
     * > ❗️ If you receive a "retry_request" error, you should repeat the same request (up to a maximum of 100 times)
     *
     * @endpoint GET /letters2
     * @param string|null $emailPassword Email login data (email:password format). Required if both *email* and *password* are not provided.
     * @param string|null $email Email. Required if *email_password* is not provided.
     * @param string|null $password Password. Required if *email_password* is not provided.
     * @param int|null $limit Number of letters to return.
     * @return \Lolzteam\Generated\Market\Models\ManagingGetLetters2Response
     */
    public function getLetters2(
        string|null $emailPassword = null,
        string|null $email = null,
        string|null $password = null,
        int|null $limit = null,
    ): \Lolzteam\Generated\Market\Models\ManagingGetLetters2Response {
        $path = '/letters2';
        $options = [];
        $params = [];
        if ($emailPassword !== null) {
            $params['email_password'] = $emailPassword;
        }
        if ($email !== null) {
            $params['email'] = $email;
        }
        if ($password !== null) {
            $params['password'] = $password;
        }
        if ($limit !== null) {
            $params['limit'] = $limit;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingGetLetters2Response::fromArray($response);
    }

    /**
     * Get Mafile
     *
     * Returns steam mafile.
     * > ❗️ This action is cancelling active account guarantee
     *
     * @endpoint GET /{item_id}/mafile
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\ManagingSteamGetMafileResponse
     */
    public function steamGetMafile(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\ManagingSteamGetMafileResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/mafile';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingSteamGetMafileResponse::fromArray($response);
    }

    /**
     * Add Mafile
     *
     * Add a new Steam mafile to the account.
     *
     * @endpoint POST /{item_id}/mafile
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function steamAddMafile(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/mafile';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Remove Mafile
     *
     * Remove steam mafile.
     * > ❗️ This will unlink the authenticator from the account and remove mafile from the item
     *
     * @endpoint DELETE /{item_id}/mafile
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function steamRemoveMafile(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/mafile';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Mafile Confirmation Code
     *
     * Gets confirmation code from MaFile (Only for Steam accounts).
     *
     * @endpoint GET /{item_id}/guard-code
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\ManagingSteamMafileCodeResponse
     */
    public function steamMafileCode(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\ManagingSteamMafileCodeResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/guard-code';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingSteamMafileCodeResponse::fromArray($response);
    }

    /**
     * Confirm SDA
     *
     * Confirm steam action.
     * 
     * Don't set **id** and **nonce** parameters to get list of available confirmation requests.
     * 
     * > ❗️ This action is cancelling active account guarantee
     *
     * @endpoint POST /{item_id}/confirm-sda
     * @param int|null $itemId Item id.
     * @param int|null $id Confirmation id. (Required along with **nonce** if you want to confirm action).
     * @param int|null $nonce Confirmation nonce. (Required along with **id** if you want to confirm action).
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function steamSDA(
        int $itemId,
        int|null $id = null,
        int|null $nonce = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/confirm-sda';
        $options = [];
        $json = [];
        if ($id !== null) {
            $json['id'] = $id;
        }
        if ($nonce !== null) {
            $json['nonce'] = $nonce;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Telegram Confirmation Code
     *
     * Gets confirmation code from Telegram.
     *
     * @endpoint GET /{item_id}/telegram-login-code
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponse
     */
    public function telegramCode(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/telegram-login-code';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingTelegramCodeResponse::fromArray($response);
    }

    /**
     * Telegram Reset Auth
     *
     * Resets Telegram authorizations.
     *
     * @endpoint POST /{item_id}/telegram-reset-authorizations
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function telegramResetAuth(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/telegram-reset-authorizations';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Cancel Guarantee
     *
     * Cancel guarantee of account. It can be useful for account reselling.
     *
     * @endpoint POST /{item_id}/refuse-guarantee
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function refuseGuarantee(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/refuse-guarantee';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Decline Video Recording Request
     *
     * Waiver of the requirement to record a video and any claims regarding this account.
     *
     * @endpoint POST /{item_id}/decline-video-recording
     * @param int|null $itemId Item id.
     * @param bool|null $iVoluntarilyAndWithFullAwarenessOfMyActionsWaiveAnyClaimsRegardingThisItem You voluntarily and with full awareness of your actions waive any claims regarding this account.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function declineVideoRecording(
        int $itemId,
        bool|null $iVoluntarilyAndWithFullAwarenessOfMyActionsWaiveAnyClaimsRegardingThisItem = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/decline-video-recording';
        $options = [];
        $json = [];
        if ($iVoluntarilyAndWithFullAwarenessOfMyActionsWaiveAnyClaimsRegardingThisItem !== null) {
            $json['i_voluntarily_and_with_full_awareness_of_my_actions_waive_any_claims_regarding_this_item'] = $iVoluntarilyAndWithFullAwarenessOfMyActionsWaiveAnyClaimsRegardingThisItem;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Check Guarantee
     *
     * Checks the guarantee and cancels it if there are reasons to cancel it.
     *
     * @endpoint POST /{item_id}/check-guarantee
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\ManagingCheckGuaranteeResponse
     */
    public function checkGuarantee(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\ManagingCheckGuaranteeResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/check-guarantee';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingCheckGuaranteeResponse::fromArray($response);
    }

    /**
     * Change Password
     *
     * Changes password of account.
     *
     * @endpoint POST /{item_id}/change-password
     * @param int|null $itemId Item id.
     * @param int|null $cancel Cancel change password recommendation. It will be helpful, if you don't want to change password and get login data.
     * @return \Lolzteam\Generated\Market\Models\ManagingChangePasswordResponse
     */
    public function changePassword(
        int $itemId,
        int|null $cancel = null,
    ): \Lolzteam\Generated\Market\Models\ManagingChangePasswordResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/change-password';
        $options = [];
        $json = [];
        if ($cancel !== null) {
            $json['_cancel'] = $cancel;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingChangePasswordResponse::fromArray($response);
    }

    /**
     * Get Temp Email Password
     *
     * Gets password from temp email of account. After calling of this method, the guarantee will be cancelled and you cannot automatically resell account.
     * > ❗️ This action is cancelling active account guarantee
     *
     * @endpoint GET /{item_id}/temp-email-password
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\ManagingTempEmailPasswordResponse
     */
    public function tempEmailPassword(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\ManagingTempEmailPasswordResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/temp-email-password';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ManagingTempEmailPasswordResponse::fromArray($response);
    }

    /**
     * Add a Tag
     *
     * Adds a tag to the specified account.
     *
     * @endpoint POST /{item_id}/tag
     * @param int|null $itemId Item id.
     * @param int|null $tagId Tag ID.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function tag(
        int $itemId,
        int|null $tagId = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/tag';
        $options = [];
        $json = [];
        if ($tagId !== null) {
            $json['tag_id'] = $tagId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Remove a Tag
     *
     * Removes a tag from from the specified account.
     *
     * @endpoint DELETE /{item_id}/tag
     * @param int|null $itemId Item id.
     * @param int|null $tagId Tag ID.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function untag(
        int $itemId,
        int|null $tagId = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/tag';
        $options = [];
        $json = [];
        if ($tagId !== null) {
            $json['tag_id'] = $tagId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Add a Public Tag
     *
     * Adds a public tag to the specified account.
     *
     * @endpoint POST /{item_id}/public-tag
     * @param int|null $itemId Item id.
     * @param int|null $tagId Tag ID.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function publicTag(
        int $itemId,
        int|null $tagId = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/public-tag';
        $options = [];
        $json = [];
        if ($tagId !== null) {
            $json['tag_id'] = $tagId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Remove a Public Tag
     *
     * Removes a public tag from the specified account.
     *
     * @endpoint DELETE /{item_id}/public-tag
     * @param int|null $itemId Item id.
     * @param int|null $tagId Tag ID.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function publicUntag(
        int $itemId,
        int|null $tagId = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/public-tag';
        $options = [];
        $json = [];
        if ($tagId !== null) {
            $json['tag_id'] = $tagId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Favorite
     *
     * Adds account to favorites.
     *
     * @endpoint POST /{item_id}/star
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function favorite(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/star';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Unfavorite
     *
     * Delete account from favorites.
     *
     * @endpoint DELETE /{item_id}/star
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function unfavorite(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/star';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Stick Account
     *
     * Stick account in the top of search.
     *
     * @endpoint POST /{item_id}/stick
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function stick(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/stick';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Unstick Account
     *
     * Unstick account from the top of search.
     *
     * @endpoint DELETE /{item_id}/stick
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function unstick(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/stick';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Change Account Owner
     *
     * Transfer account to another user.
     *
     * @endpoint POST /{item_id}/change-owner
     * @param int|null $itemId Item id.
     * @param string|null $username The username of the new account owner.
     * @param string|null $secretAnswer Secret answer of your account.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function transfer(
        int $itemId,
        string|null $username = null,
        string|null $secretAnswer = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/change-owner';
        $options = [];
        $json = [];
        if ($username !== null) {
            $json['username'] = $username;
        }
        if ($secretAnswer !== null) {
            $json['secret_answer'] = $secretAnswer;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }
}
