<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Generated\Market\Models\CustomDiscountsGetResponse;
use Lolzteam\Generated\Market\Models\CustomDiscountsCreateResponse;
use Lolzteam\Generated\Market\Models\CustomDiscountsEditResponse;
use Lolzteam\Generated\Market\Models\SaveChangesResponse;

/**
 * Custom Discounts API group.
 */
class CustomDiscountsApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Custom Discounts
     *
     * Get a list of custom discounts.
     *
     * @endpoint GET /custom-discounts
     * @return \Lolzteam\Generated\Market\Models\CustomDiscountsGetResponse
     */
    public function get(
    ): \Lolzteam\Generated\Market\Models\CustomDiscountsGetResponse {
        $path = '/custom-discounts';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CustomDiscountsGetResponse::fromArray($response);
    }

    /**
     * Create Custom Discount
     *
     * Creates a new custom discount.
     *
     * @endpoint POST /custom-discounts
     * @param int|null $userId User ID.
     * @param int|null $categoryId Accounts category.
     * @param float|null $discountPercent Discount percent to apply.
     * @param float|null $minPrice Minimum accounts price for which the discount applies.
     * @param float|null $maxPrice Maximum accounts price for which the discount applies.
     * @param string|null $currency Currency
     * @return \Lolzteam\Generated\Market\Models\CustomDiscountsCreateResponse
     */
    public function create(
        int|null $userId = null,
        int|null $categoryId = null,
        float|null $discountPercent = null,
        float|null $minPrice = null,
        float|null $maxPrice = null,
        string|null $currency = null,
    ): \Lolzteam\Generated\Market\Models\CustomDiscountsCreateResponse {
        $path = '/custom-discounts';
        $options = [];
        $json = [];
        if ($userId !== null) {
            $json['user_id'] = $userId;
        }
        if ($categoryId !== null) {
            $json['category_id'] = $categoryId;
        }
        if ($discountPercent !== null) {
            $json['discount_percent'] = $discountPercent;
        }
        if ($minPrice !== null) {
            $json['min_price'] = $minPrice;
        }
        if ($maxPrice !== null) {
            $json['max_price'] = $maxPrice;
        }
        if ($currency !== null) {
            $json['currency'] = $currency;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\CustomDiscountsCreateResponse::fromArray($response);
    }

    /**
     * Edit Custom Discount
     *
     * Edit an existing custom discount.
     *
     * @endpoint PUT /custom-discounts
     * @param int|null $discountId ID of the discount to edit.
     * @param float|null $discountPercent Discount percent to apply.
     * @param float|null $minPrice Minimum price for which the discount applies.
     * @param float|null $maxPrice Maximum price for which the discount applies.
     * @return \Lolzteam\Generated\Market\Models\CustomDiscountsEditResponse
     */
    public function edit(
        int|null $discountId = null,
        float|null $discountPercent = null,
        float|null $minPrice = null,
        float|null $maxPrice = null,
    ): \Lolzteam\Generated\Market\Models\CustomDiscountsEditResponse {
        $path = '/custom-discounts';
        $options = [];
        $json = [];
        if ($discountId !== null) {
            $json['discount_id'] = $discountId;
        }
        if ($discountPercent !== null) {
            $json['discount_percent'] = $discountPercent;
        }
        if ($minPrice !== null) {
            $json['min_price'] = $minPrice;
        }
        if ($maxPrice !== null) {
            $json['max_price'] = $maxPrice;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('PUT', $path, $options);
        return \Lolzteam\Generated\Market\Models\CustomDiscountsEditResponse::fromArray($response);
    }

    /**
     * Delete Custom Discount
     *
     * Delete an existing custom discount.
     *
     * @endpoint DELETE /custom-discounts
     * @param int|null $discountId ID of the discount to delete.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function delete(
        int|null $discountId = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/custom-discounts';
        $options = [];
        $json = [];
        if ($discountId !== null) {
            $json['discount_id'] = $discountId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }
}
