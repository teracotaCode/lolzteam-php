<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\PagesListResponse;
use Lolzteam\Generated\Forum\Models\PagesGetResponse;

/**
 * Pages API group.
 */
class PagesApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Pages
     *
     * List of all pages in the system.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /pages
     * @param int|null $parentPageId Id of parent page. If exists, filter pages that are direct children of that page.
     * @param string|null $order Ordering of pages.
     * @return \Lolzteam\Generated\Forum\Models\PagesListResponse
     */
    public function list(
        int|null $parentPageId = null,
        string|null $order = null,
    ): \Lolzteam\Generated\Forum\Models\PagesListResponse {
        $path = '/pages';
        $options = [];
        $params = [];
        if ($parentPageId !== null) {
            $params['parent_page_id'] = $parentPageId;
        }
        if ($order !== null) {
            $params['order'] = $order;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\PagesListResponse::fromArray($response);
    }

    /**
     * Get Page
     *
     * Detail information of a page.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /pages/{page_id}
     * @param int|null $pageId Id of page.
     * @return \Lolzteam\Generated\Forum\Models\PagesGetResponse
     */
    public function get(
        int $pageId,
    ): \Lolzteam\Generated\Forum\Models\PagesGetResponse {
        $path = '/pages/' . rawurlencode((string)$pageId);
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\PagesGetResponse::fromArray($response);
    }
}
