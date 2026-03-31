<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Generated\Market\Models\SaveChangesResponse;
use Lolzteam\Generated\Market\Models\CartAddResponse;
use Lolzteam\Generated\Market\Models\CartDeleteResponse;

/**
 * Cart API group.
 */
class CartApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Cart Items
     *
     * Returns the list of items currently in your cart.
     *
     * @endpoint GET /cart
     * @param int|null $categoryId Accounts category.
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function get(
        int|null $categoryId = null,
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/cart';
        $options = [];
        $params = [];
        if ($categoryId !== null) {
            $params['category_id'] = $categoryId;
        }
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Add Item to Cart
     *
     * Adds item to your cart.
     *
     * @endpoint POST /cart
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\CartAddResponse
     */
    public function add(
        int|null $itemId = null,
    ): \Lolzteam\Generated\Market\Models\CartAddResponse {
        $path = '/cart';
        $options = [];
        $json = [];
        if ($itemId !== null) {
            $json['item_id'] = $itemId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\CartAddResponse::fromArray($response);
    }

    /**
     * Delete Item From Cart
     *
     * Deletes an item from the cart.
     *
     * @endpoint DELETE /cart
     * @param int|null $itemId Item id.
     * @return \Lolzteam\Generated\Market\Models\CartDeleteResponse
     */
    public function delete(
        int|null $itemId = null,
    ): \Lolzteam\Generated\Market\Models\CartDeleteResponse {
        $path = '/cart';
        $options = [];
        $json = [];
        if ($itemId !== null) {
            $json['item_id'] = $itemId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Market\Models\CartDeleteResponse::fromArray($response);
    }
}
