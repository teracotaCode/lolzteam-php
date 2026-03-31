<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Generated\Market\Models\PublishingFastSellResponse;
use Lolzteam\Generated\Market\Models\PublishingAddResponse;
use Lolzteam\Generated\Market\Models\SaveChangesResponse;

/**
 * Account publishing API group.
 */
class AccountPublishingApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Fast Account Upload
     *
     * Adds and checks the account for validity.
     * 
     * > ❗️ If you receive a "retry_request" error, you should repeat the same request (up to a maximum of 100 times).
     *
     * @endpoint POST /item/fast-sell
     * @param float|null $price Current price of account in your currency.
     * @param int|null $categoryId Accounts category.
     * @param string|null $currency Currency
     * @param string|null $itemOrigin Account origin. Where did you get it from.
     * @param string|null $title Title of account. If **title** specified and **title_en** is empty, **title_en** will be automatically translated to English language.
     * @param string|null $titleEn English title of account. If **title_en** specified and **title** is empty, **title** will be automatically translated to Russian language.
     * @param int|null $extendedGuarantee Guarantee type.
     * @param bool|null $allowAskDiscount Allow users to ask discount for this account.
     * @param int|null $proxyId Proxy id that will be used to check account.
     * @param bool|null $randomProxy Set this parameter to **true** so that the Market will take a random proxy from its pool for each of your requests. Otherwise, if this parameter is set to **false** or not set, the Market will take a specific proxy from its pool, which is predefined for each item. > This parameter only works with proxies from the Market pool. If you want to use your own proxies, use the proxy_id or extra[proxy] parameter.
     * @param string|null $description Account public description.
     * @param string|null $information Account private information (visible only for buyer).
     * @param string|null $login Account login (or email).
     * @param string|null $password Account password.
     * @param string|null $loginPassword Account login data (login:password format).
     * @param bool|null $hasEmailLoginData Required if a **category** is one of list of Required email login data categories.
     * @param string|null $emailLoginData Required if a **category** is one of list of Required email login data categories. Email login data (email:password format).
     * @param string|null $emailType Email type.
     * @param array|null $extra Extra
     * @return \Lolzteam\Generated\Market\Models\PublishingFastSellResponse
     */
    public function fastSell(
        float|null $price = null,
        int|null $categoryId = null,
        string|null $currency = null,
        string|null $itemOrigin = null,
        string|null $title = null,
        string|null $titleEn = null,
        int|null $extendedGuarantee = null,
        bool|null $allowAskDiscount = null,
        int|null $proxyId = null,
        bool|null $randomProxy = null,
        string|null $description = null,
        string|null $information = null,
        string|null $login = null,
        string|null $password = null,
        string|null $loginPassword = null,
        bool|null $hasEmailLoginData = null,
        string|null $emailLoginData = null,
        string|null $emailType = null,
        array|null $extra = null,
    ): \Lolzteam\Generated\Market\Models\PublishingFastSellResponse {
        $path = '/item/fast-sell';
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
        if ($categoryId !== null) {
            $json['category_id'] = $categoryId;
        }
        if ($currency !== null) {
            $json['currency'] = $currency;
        }
        if ($itemOrigin !== null) {
            $json['item_origin'] = $itemOrigin;
        }
        if ($extendedGuarantee !== null) {
            $json['extended_guarantee'] = $extendedGuarantee;
        }
        if ($allowAskDiscount !== null) {
            $json['allow_ask_discount'] = $allowAskDiscount;
        }
        if ($proxyId !== null) {
            $json['proxy_id'] = $proxyId;
        }
        if ($randomProxy !== null) {
            $json['random_proxy'] = $randomProxy;
        }
        if ($description !== null) {
            $json['description'] = $description;
        }
        if ($information !== null) {
            $json['information'] = $information;
        }
        if ($login !== null) {
            $json['login'] = $login;
        }
        if ($password !== null) {
            $json['password'] = $password;
        }
        if ($loginPassword !== null) {
            $json['login_password'] = $loginPassword;
        }
        if ($hasEmailLoginData !== null) {
            $json['has_email_login_data'] = $hasEmailLoginData;
        }
        if ($emailLoginData !== null) {
            $json['email_login_data'] = $emailLoginData;
        }
        if ($emailType !== null) {
            $json['email_type'] = $emailType;
        }
        if ($extra !== null) {
            $json['extra'] = $extra;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\PublishingFastSellResponse::fromArray($response);
    }

    /**
     * Add Account
     *
     * Adds account on the market.
     * 
     * Required email login data categories:
     * + 9 - Fortnite
     * + 12 - Epic games
     * + 18 - Escape from Tarkov
     *
     * @endpoint POST /item/add
     * @param float|null $price Current price of account in your currency.
     * @param int|null $categoryId Accounts category.
     * @param string|null $currency Currency
     * @param string|null $itemOrigin Account origin. Where did you get it from.
     * @param string|null $title Title of account. If **title** specified and **title_en** is empty, **title_en** will be automatically translated to English language.
     * @param string|null $titleEn English title of account. If **title_en** specified and **title** is empty, **title** will be automatically translated to Russian language.
     * @param int|null $extendedGuarantee Guarantee type.
     * @param string|null $description Account public description.
     * @param string|null $information Account private information (visible only for buyer).
     * @param bool|null $forceTempEmail Get temporary email if not required by category. Available for Supercell, Fortnite and Epic Games categories.
     * @param int|null $resellItemId Put item id, if you are trying to resell item. This is useful to pass temporary email from reselling item to new item. You will get same temporary email from reselling account.
     * @param bool|null $hasEmailLoginData Required if a **category** is one of list of Required email login data categories.
     * @param string|null $emailLoginData Required if a **category** is one of list of Required email login data categories. Email login data (email:password format).
     * @param string|null $emailType Email type.
     * @param bool|null $allowAskDiscount Allow users to ask discount for this account.
     * @param int|null $proxyId Proxy id that will be used to check account.
     * @param bool|null $randomProxy Set this parameter to **true** so that the Market will take a random proxy from its pool for each of your requests. Otherwise, if this parameter is set to **false** or not set, the Market will take a specific proxy from its pool, which is predefined for each item. > This parameter only works with proxies from the Market pool. If you want to use your own proxies, use the proxy_id or extra[proxy] parameter.
     * @return \Lolzteam\Generated\Market\Models\PublishingAddResponse
     */
    public function add(
        float|null $price = null,
        int|null $categoryId = null,
        string|null $currency = null,
        string|null $itemOrigin = null,
        string|null $title = null,
        string|null $titleEn = null,
        int|null $extendedGuarantee = null,
        string|null $description = null,
        string|null $information = null,
        bool|null $forceTempEmail = null,
        int|null $resellItemId = null,
        bool|null $hasEmailLoginData = null,
        string|null $emailLoginData = null,
        string|null $emailType = null,
        bool|null $allowAskDiscount = null,
        int|null $proxyId = null,
        bool|null $randomProxy = null,
    ): \Lolzteam\Generated\Market\Models\PublishingAddResponse {
        $path = '/item/add';
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
        if ($categoryId !== null) {
            $json['category_id'] = $categoryId;
        }
        if ($currency !== null) {
            $json['currency'] = $currency;
        }
        if ($itemOrigin !== null) {
            $json['item_origin'] = $itemOrigin;
        }
        if ($extendedGuarantee !== null) {
            $json['extended_guarantee'] = $extendedGuarantee;
        }
        if ($description !== null) {
            $json['description'] = $description;
        }
        if ($information !== null) {
            $json['information'] = $information;
        }
        if ($forceTempEmail !== null) {
            $json['forceTempEmail'] = $forceTempEmail;
        }
        if ($resellItemId !== null) {
            $json['resell_item_id'] = $resellItemId;
        }
        if ($hasEmailLoginData !== null) {
            $json['has_email_login_data'] = $hasEmailLoginData;
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
        if ($randomProxy !== null) {
            $json['random_proxy'] = $randomProxy;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\PublishingAddResponse::fromArray($response);
    }

    /**
     * Check Account Details
     *
     * Check and put up to sale not published account OR update account information existing account.
     * 
     * > ❗️ If you receive a "retry_request" error, you should repeat the same request (up to a maximum of 100 times).
     *
     * @endpoint POST /{item_id}/goods/check
     * @param int|null $itemId Item id.
     * @param int|null $resellItemId Put if you are trying to resell an account.
     * @param bool|null $randomProxy Set this parameter to **true** so that the Market will take a random proxy from its pool for each of your requests. Otherwise, if this parameter is set to **false** or not set, the Market will take a specific proxy from its pool, which is predefined for each item. > This parameter only works with proxies from the Market pool. If you want to use your own proxies, use the proxy_id or extra[proxy] parameter.
     * @param string|null $login Account login (or email).
     * @param string|null $password Account password.
     * @param string|null $loginPassword Account login data (login:password format).
     * @param bool|null $hasEmailLoginData Required if a **category** is one of list of Required email login data categories.
     * @param string|null $emailLoginData Required if a **category** is one of list of Required email login data categories. Email login data (email:password format).
     * @param string|null $emailType Email type.
     * @param array|null $extra Extra
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function check(
        int $itemId,
        int|null $resellItemId = null,
        bool|null $randomProxy = null,
        string|null $login = null,
        string|null $password = null,
        string|null $loginPassword = null,
        bool|null $hasEmailLoginData = null,
        string|null $emailLoginData = null,
        string|null $emailType = null,
        array|null $extra = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/goods/check';
        $options = [];
        $json = [];
        if ($resellItemId !== null) {
            $json['resell_item_id'] = $resellItemId;
        }
        if ($randomProxy !== null) {
            $json['random_proxy'] = $randomProxy;
        }
        if ($login !== null) {
            $json['login'] = $login;
        }
        if ($password !== null) {
            $json['password'] = $password;
        }
        if ($loginPassword !== null) {
            $json['login_password'] = $loginPassword;
        }
        if ($hasEmailLoginData !== null) {
            $json['has_email_login_data'] = $hasEmailLoginData;
        }
        if ($emailLoginData !== null) {
            $json['email_login_data'] = $emailLoginData;
        }
        if ($emailType !== null) {
            $json['email_type'] = $emailType;
        }
        if ($extra !== null) {
            $json['extra'] = $extra;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Add an External Account
     *
     * Check and add an external account to your item.
     * 
     * > ❗️ Please note that if you're linking a Social Club account to Steam, it will update the last activity on your account (This is a limitation of Steam). If Social Club Games does not have a linked account, do not enter any data.
     *
     * @endpoint POST /{item_id}/external-account
     * @param int|null $itemId Item id.
     * @param string|null $type External account type.
     * @param string|null $login Account login data (login:password format).
     * @param string|null $emailLoginData Email login data (email:password format).
     * @param string|null $cookies Cookies.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function external(
        int $itemId,
        string|null $type = null,
        string|null $login = null,
        string|null $emailLoginData = null,
        string|null $cookies = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/external-account';
        $options = [];
        $json = [];
        if ($type !== null) {
            $json['type'] = $type;
        }
        if ($login !== null) {
            $json['login'] = $login;
        }
        if ($emailLoginData !== null) {
            $json['email_login_data'] = $emailLoginData;
        }
        if ($cookies !== null) {
            $json['cookies'] = $cookies;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }
}
