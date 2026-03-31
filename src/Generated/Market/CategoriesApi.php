<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Generated\Market\Models\CategoryListResponse;
use Lolzteam\Generated\Market\Models\CategoryParamsResponse;
use Lolzteam\Generated\Market\Models\CategoryGamesResponse;

/**
 * Categories API group.
 */
class CategoriesApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Categories
     *
     * Display category list.
     *
     * @endpoint GET /category
     * @param bool|null $topQueries Display top queries for per category.
     * @return \Lolzteam\Generated\Market\Models\CategoryListResponse
     */
    public function list(
        bool|null $topQueries = null,
    ): \Lolzteam\Generated\Market\Models\CategoryListResponse {
        $path = '/category';
        $options = [];
        $params = [];
        if ($topQueries !== null) {
            $params['top_queries'] = $topQueries;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryListResponse::fromArray($response);
    }

    /**
     * Get Category Search Params
     *
     * Displays search parameters for a category.
     *
     * @endpoint GET /{categoryName}/params
     * @param string|null $categoryName Category name.
     * @return \Lolzteam\Generated\Market\Models\CategoryParamsResponse
     */
    public function params(
        string $categoryName,
    ): \Lolzteam\Generated\Market\Models\CategoryParamsResponse {
        $path = '/' . rawurlencode((string)$categoryName) . '/params';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryParamsResponse::fromArray($response);
    }

    /**
     * Get Category Games
     *
     * Displays a list of games in the category.
     *
     * @endpoint GET /{categoryName}/games
     * @param string|null $categoryName Category name.
     * @return \Lolzteam\Generated\Market\Models\CategoryGamesResponse
     */
    public function games(
        string $categoryName,
    ): \Lolzteam\Generated\Market\Models\CategoryGamesResponse {
        $path = '/' . rawurlencode((string)$categoryName) . '/games';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryGamesResponse::fromArray($response);
    }
}
