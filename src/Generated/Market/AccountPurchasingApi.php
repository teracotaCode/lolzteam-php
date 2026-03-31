<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Generated\Market\Models\SaveChangesResponse;
use Lolzteam\Generated\Market\Models\PurchasingConfirmResponse;

/**
 * Account purchasing API group.
 */
class AccountPurchasingApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Fast Buy Account
     *
     * Check and buy account.
     * 
     * > ❗️ If you receive a "retry_request" error, you should repeat the same request (up to a maximum of 100 times).
     *
     * @endpoint POST /{item_id}/fast-buy
     * @param int|null $itemId Item id.
     * @param float|null $price Current price of account in your currency.
     * @param int|null $balanceId Balance ID that will be used to purchase specified item.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function fastBuy(
        int $itemId,
        float|null $price = null,
        int|null $balanceId = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/fast-buy';
        $options = [];
        $json = [];
        if ($price !== null) {
            $json['price'] = $price;
        }
        if ($balanceId !== null) {
            $json['balance_id'] = $balanceId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Check Account
     *
     * Checking account for validity.
     * 
     * > ❗️ If you receive a "retry_request" error, you should repeat the same request (up to a maximum of 100 times).
     *
     * @endpoint POST /{item_id}/check-account
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function check(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/check-account';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Confirm Buy
     *
     * Confirm buy.
     * 
     * > ❗️ This method doesn't check account for validity. If you want to confirm validity before buying, you should use [FastBuy](https://lzt-market.readme.io/reference/purchasingfastbuy) method
     *
     * @endpoint POST /{item_id}/confirm-buy
     * @param int|null $itemId Item id.
     * @param int|null $price Current price of account in your currency.
     * @param int|null $balanceId Balance ID that will be used to purchase specified item.
     * @return \Lolzteam\Generated\Market\Models\PurchasingConfirmResponse
     */
    public function confirm(
        int $itemId,
        int|null $price = null,
        int|null $balanceId = null,
    ): \Lolzteam\Generated\Market\Models\PurchasingConfirmResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/confirm-buy';
        $options = [];
        $json = [];
        if ($price !== null) {
            $json['price'] = $price;
        }
        if ($balanceId !== null) {
            $json['balance_id'] = $balanceId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\PurchasingConfirmResponse::fromArray($response);
    }

    /**
     * Discount Request
     *
     * Request a discount for the specified item.
     *
     * @endpoint POST /{item_id}/discount
     * @param int|null $itemId Item id.
     * @param float|null $discountPrice Requested discounted price.
     * @param string|null $message Message to the seller.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function discountRequest(
        int $itemId,
        float|null $discountPrice = null,
        string|null $message = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/discount';
        $options = [];
        $json = [];
        if ($discountPrice !== null) {
            $json['discount_price'] = $discountPrice;
        }
        if ($message !== null) {
            $json['message'] = $message;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Cancel Discount Request
     *
     * Cancel a requested discount for the specified item.
     *
     * @endpoint DELETE /{item_id}/discount
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function discountCancel(
        int $itemId,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/' . rawurlencode((string)$itemId) . '/discount';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }
}
