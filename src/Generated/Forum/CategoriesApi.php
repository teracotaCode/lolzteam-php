<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\CategoriesListResponse;
use Lolzteam\Generated\Forum\Models\CategoriesGetResponse;

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
     * List of all categories in the system.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /categories
     * @param int|null $parentCategoryId Id of parent category. If exists, filter categories that are direct children of that category.
     * @param int|null $parentForumId Id of parent forum. If exists, filter categories that are direct children of that forum.
     * @param string|null $order Ordering of categories.
     * @return \Lolzteam\Generated\Forum\Models\CategoriesListResponse
     */
    public function list(
        int|null $parentCategoryId = null,
        int|null $parentForumId = null,
        string|null $order = null,
    ): \Lolzteam\Generated\Forum\Models\CategoriesListResponse {
        $path = '/categories';
        $options = [];
        $params = [];
        if ($parentCategoryId !== null) {
            $params['parent_category_id'] = $parentCategoryId;
        }
        if ($parentForumId !== null) {
            $params['parent_forum_id'] = $parentForumId;
        }
        if ($order !== null) {
            $params['order'] = $order;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\CategoriesListResponse::fromArray($response);
    }

    /**
     * Get Category
     *
     * Detail information of a category.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /categories/{category_id}
     * @param int|null $categoryId Id of category.
     * @return \Lolzteam\Generated\Forum\Models\CategoriesGetResponse
     */
    public function get(
        int $categoryId,
    ): \Lolzteam\Generated\Forum\Models\CategoriesGetResponse {
        $path = '/categories/' . rawurlencode((string)$categoryId);
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\CategoriesGetResponse::fromArray($response);
    }
}
