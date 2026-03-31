<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Generated\Market\Models\ListUserResponse;
use Lolzteam\Generated\Market\Models\ListOrdersResponse;
use Lolzteam\Generated\Market\Models\ListStatesResponse;
use Lolzteam\Generated\Market\Models\ListFavoritesResponse;
use Lolzteam\Generated\Market\Models\ListViewedResponse;

/**
 * Accounts list API group.
 */
class AccountsListApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get All User Accounts
     *
     * Displays a list of user accounts.
     *
     * @endpoint GET /user/items
     * @param int|null $userId User id.
     * @param int|null $categoryId Accounts category.
     * @param int|null $page The number of the page to display results from.
     * @param string|null $show Account status.
     * @param string|null $deleteReason Delete reason. (Only if **show** is set to **deleted**)
     * @param string|null $title The word or words contained in the account title.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $login Login.
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param string|null $orderBy Order by.
     * @param bool|null $sb Sold before.
     * @param bool|null $sbByMe Sold by me before.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param string|null $username Username of buyer. (If **show** is **paid**)
     * @param string|null $publishedStartDate Start date for filtering by publication date.
     * @param string|null $publishedEndDate End date for filtering by publication date.
     * @param bool|null $filterByPublishedDate Enable filtering by publication date.
     * @param string|null $paidStartDate Start date for filtering by buyer operation date.
     * @param string|null $paidEndDate End date for filtering by buyer operation date.
     * @param bool|null $filterByBuyerOperationDate Enable filtering by buyer operation date.
     * @param string|null $deleteStartDate Start date for filtering by deletion date.
     * @param string|null $deleteEndDate End date for filtering by deletion date.
     * @param bool|null $filterByDeleteDate Enable filtering by deletion date.
     * @return \Lolzteam\Generated\Market\Models\ListUserResponse
     */
    public function user(
        int|null $userId = null,
        int|null $categoryId = null,
        int|null $page = null,
        string|null $show = null,
        string|null $deleteReason = null,
        string|null $title = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $login = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        string|null $orderBy = null,
        bool|null $sb = null,
        bool|null $sbByMe = null,
        bool|null $nsb = null,
        bool|null $nsbByMe = null,
        string|null $username = null,
        string|null $publishedStartDate = null,
        string|null $publishedEndDate = null,
        bool|null $filterByPublishedDate = null,
        string|null $paidStartDate = null,
        string|null $paidEndDate = null,
        bool|null $filterByBuyerOperationDate = null,
        string|null $deleteStartDate = null,
        string|null $deleteEndDate = null,
        bool|null $filterByDeleteDate = null,
    ): \Lolzteam\Generated\Market\Models\ListUserResponse {
        $path = '/user/items';
        $options = [];
        $params = [];
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($categoryId !== null) {
            $params['category_id'] = $categoryId;
        }
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($show !== null) {
            $params['show'] = $show;
        }
        if ($deleteReason !== null) {
            $params['delete_reason'] = $deleteReason;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($login !== null) {
            $params['login'] = $login;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($username !== null) {
            $params['username'] = $username;
        }
        if ($publishedStartDate !== null) {
            $params['published_startDate'] = $publishedStartDate;
        }
        if ($publishedEndDate !== null) {
            $params['published_endDate'] = $publishedEndDate;
        }
        if ($filterByPublishedDate !== null) {
            $params['filter_by_published_date'] = $filterByPublishedDate;
        }
        if ($paidStartDate !== null) {
            $params['paid_startDate'] = $paidStartDate;
        }
        if ($paidEndDate !== null) {
            $params['paid_endDate'] = $paidEndDate;
        }
        if ($filterByBuyerOperationDate !== null) {
            $params['filter_by_buyer_operation_date'] = $filterByBuyerOperationDate;
        }
        if ($deleteStartDate !== null) {
            $params['delete_startDate'] = $deleteStartDate;
        }
        if ($deleteEndDate !== null) {
            $params['delete_endDate'] = $deleteEndDate;
        }
        if ($filterByDeleteDate !== null) {
            $params['filter_by_delete_date'] = $filterByDeleteDate;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ListUserResponse::fromArray($response);
    }

    /**
     * Get All Purchased Accounts
     *
     * Displays a list of purchased accounts.
     *
     * @endpoint GET /user/orders
     * @param int|null $userId User id.
     * @param int|null $categoryId Accounts category.
     * @param int|null $page The number of the page to display results from.
     * @param string|null $show Account status.
     * @param string|null $title The word or words contained in the account title.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $login Login.
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param string|null $orderBy Order by.
     * @param bool|null $sb Sold before.
     * @param bool|null $sbByMe Sold by me before.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @return \Lolzteam\Generated\Market\Models\ListOrdersResponse
     */
    public function orders(
        int|null $userId = null,
        int|null $categoryId = null,
        int|null $page = null,
        string|null $show = null,
        string|null $title = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $login = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        string|null $orderBy = null,
        bool|null $sb = null,
        bool|null $sbByMe = null,
        bool|null $nsb = null,
        bool|null $nsbByMe = null,
    ): \Lolzteam\Generated\Market\Models\ListOrdersResponse {
        $path = '/user/orders';
        $options = [];
        $params = [];
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($categoryId !== null) {
            $params['category_id'] = $categoryId;
        }
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($show !== null) {
            $params['show'] = $show;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($login !== null) {
            $params['login'] = $login;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ListOrdersResponse::fromArray($response);
    }

    /**
     * Get User Items States
     *
     * Returns the states of user items.
     *
     * @endpoint GET /user/item-states
     * @param int|string|null $userId User ID.
     * @return \Lolzteam\Generated\Market\Models\ListStatesResponse
     */
    public function states(
        int|string|null $userId = null,
    ): \Lolzteam\Generated\Market\Models\ListStatesResponse {
        $path = '/user/item-states';
        $options = [];
        $params = [];
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ListStatesResponse::fromArray($response);
    }

    /**
     * Download Accounts Data
     *
     * Download accounts data in the specified format.
     *
     * @endpoint GET /user/{type}/download
     * @param string|null $type The type of account list to download.
     * @param string|null $format Format of the downloaded accounts.
     * @param string|null $customFormat Custom format string for download. (Required if **format** is set to **custom**)
     * @param int|null $categoryId Accounts category.
     * @param int|null $page The number of the page to display results from.
     * @param string|null $show Account status.
     * @param string|null $deleteReason Delete reason. (Only if **show** is set to **deleted**)
     * @param string|null $title The word or words contained in the account title.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param string|null $orderBy Order by.
     * @param bool|null $sb Sold before.
     * @param bool|null $sbByMe Sold by me before.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param string|null $username Username of buyer. (If **show** is **paid**)
     * @param string|null $publishedStartDate Start date for filtering by publication date.
     * @param string|null $publishedEndDate End date for filtering by publication date.
     * @param bool|null $filterByPublishedDate Enable filtering by publication date.
     * @param string|null $paidStartDate Start date for filtering by buyer operation date.
     * @param string|null $paidEndDate End date for filtering by buyer operation date.
     * @param bool|null $filterByBuyerOperationDate Enable filtering by buyer operation date.
     * @param string|null $deleteStartDate Start date for filtering by deletion date.
     * @param string|null $deleteEndDate End date for filtering by deletion date.
     * @param bool|null $filterByDeleteDate Enable filtering by deletion date.
     * @return string
     */
    public function download(
        string $type,
        string|null $format = null,
        string|null $customFormat = null,
        int|null $categoryId = null,
        int|null $page = null,
        string|null $show = null,
        string|null $deleteReason = null,
        string|null $title = null,
        int|null $pmin = null,
        int|null $pmax = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        string|null $orderBy = null,
        bool|null $sb = null,
        bool|null $sbByMe = null,
        bool|null $nsb = null,
        bool|null $nsbByMe = null,
        string|null $username = null,
        string|null $publishedStartDate = null,
        string|null $publishedEndDate = null,
        bool|null $filterByPublishedDate = null,
        string|null $paidStartDate = null,
        string|null $paidEndDate = null,
        bool|null $filterByBuyerOperationDate = null,
        string|null $deleteStartDate = null,
        string|null $deleteEndDate = null,
        bool|null $filterByDeleteDate = null,
    ): string {
        $path = '/user/' . rawurlencode((string)$type) . '/download';
        $options = [];
        $params = [];
        if ($format !== null) {
            $params['format'] = $format;
        }
        if ($customFormat !== null) {
            $params['custom_format'] = $customFormat;
        }
        if ($categoryId !== null) {
            $params['category_id'] = $categoryId;
        }
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($show !== null) {
            $params['show'] = $show;
        }
        if ($deleteReason !== null) {
            $params['delete_reason'] = $deleteReason;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($username !== null) {
            $params['username'] = $username;
        }
        if ($publishedStartDate !== null) {
            $params['published_startDate'] = $publishedStartDate;
        }
        if ($publishedEndDate !== null) {
            $params['published_endDate'] = $publishedEndDate;
        }
        if ($filterByPublishedDate !== null) {
            $params['filter_by_published_date'] = $filterByPublishedDate;
        }
        if ($paidStartDate !== null) {
            $params['paid_startDate'] = $paidStartDate;
        }
        if ($paidEndDate !== null) {
            $params['paid_endDate'] = $paidEndDate;
        }
        if ($filterByBuyerOperationDate !== null) {
            $params['filter_by_buyer_operation_date'] = $filterByBuyerOperationDate;
        }
        if ($deleteStartDate !== null) {
            $params['delete_startDate'] = $deleteStartDate;
        }
        if ($deleteEndDate !== null) {
            $params['delete_endDate'] = $deleteEndDate;
        }
        if ($filterByDeleteDate !== null) {
            $params['filter_by_delete_date'] = $filterByDeleteDate;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return $response['_raw'] ?? '';
    }

    /**
     * Get All Favourites Accounts
     *
     * Displays a list of favourites accounts.
     *
     * @endpoint GET /fave
     * @param int|null $page The number of the page to display results from.
     * @param string|null $show Account status.
     * @param string|null $title The word or words contained in the account title.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param string|null $orderBy Order by.
     * @param bool|null $sb Sold before.
     * @param bool|null $sbByMe Sold by me before.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @return \Lolzteam\Generated\Market\Models\ListFavoritesResponse
     */
    public function favorites(
        int|null $page = null,
        string|null $show = null,
        string|null $title = null,
        int|null $pmin = null,
        int|null $pmax = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        string|null $orderBy = null,
        bool|null $sb = null,
        bool|null $sbByMe = null,
        bool|null $nsb = null,
        bool|null $nsbByMe = null,
    ): \Lolzteam\Generated\Market\Models\ListFavoritesResponse {
        $path = '/fave';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($show !== null) {
            $params['show'] = $show;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ListFavoritesResponse::fromArray($response);
    }

    /**
     * Get All Viewed Accounts
     *
     * Displays a list of viewed accounts.
     *
     * @endpoint GET /viewed
     * @param int|null $page The number of the page to display results from.
     * @param string|null $show Account status.
     * @param string|null $title The word or words contained in the account title.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param string|null $orderBy Order by.
     * @param bool|null $sb Sold before.
     * @param bool|null $sbByMe Sold by me before.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @return \Lolzteam\Generated\Market\Models\ListViewedResponse
     */
    public function viewed(
        int|null $page = null,
        string|null $show = null,
        string|null $title = null,
        int|null $pmin = null,
        int|null $pmax = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        string|null $orderBy = null,
        bool|null $sb = null,
        bool|null $sbByMe = null,
        bool|null $nsb = null,
        bool|null $nsbByMe = null,
    ): \Lolzteam\Generated\Market\Models\ListViewedResponse {
        $path = '/viewed';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($show !== null) {
            $params['show'] = $show;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ListViewedResponse::fromArray($response);
    }
}
