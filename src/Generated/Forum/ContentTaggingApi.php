<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\TagsPopularResponse;
use Lolzteam\Generated\Forum\Models\TagsListResponse;
use Lolzteam\Generated\Forum\Models\TagsGetResponse;
use Lolzteam\Generated\Forum\Models\TagsFindResponse;

/**
 * Content Tagging API group.
 */
class ContentTaggingApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Popular Tags
     *
     * List of popular tags (no pagination).
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /tags
     * @return \Lolzteam\Generated\Forum\Models\TagsPopularResponse
     */
    public function popular(
    ): \Lolzteam\Generated\Forum\Models\TagsPopularResponse {
        $path = '/tags';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\TagsPopularResponse::fromArray($response);
    }

    /**
     * Get Tags
     *
     * List of tags.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /tags/list
     * @param int|null $page Page number of tags list.
     * @param int|null $limit Number of results in a page.
     * @return \Lolzteam\Generated\Forum\Models\TagsListResponse
     */
    public function list(
        int|null $page = null,
        int|null $limit = null,
    ): \Lolzteam\Generated\Forum\Models\TagsListResponse {
        $path = '/tags/list';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($limit !== null) {
            $params['limit'] = $limit;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\TagsListResponse::fromArray($response);
    }

    /**
     * Get Tagged Content
     *
     * List of tagged contents.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /tags/{tag_id}
     * @param int|null $tagId Id of tag.
     * @param int|null $page Page number of tagged contents.
     * @param int|null $limit Number of tagged contents in a page.
     * @return \Lolzteam\Generated\Forum\Models\TagsGetResponse
     */
    public function get(
        int $tagId,
        int|null $page = null,
        int|null $limit = null,
    ): \Lolzteam\Generated\Forum\Models\TagsGetResponse {
        $path = '/tags/' . rawurlencode((string)$tagId);
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($limit !== null) {
            $params['limit'] = $limit;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\TagsGetResponse::fromArray($response);
    }

    /**
     * Get Filtered Content
     *
     * Filtered list of tags.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /tags/find
     * @param string|null $tag tag to filter. Tags start with the query will be returned.
     * @return \Lolzteam\Generated\Forum\Models\TagsFindResponse
     */
    public function find(
        string|null $tag = null,
    ): \Lolzteam\Generated\Forum\Models\TagsFindResponse {
        $path = '/tags/find';
        $options = [];
        $params = [];
        if ($tag !== null) {
            $params['tag'] = $tag;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\TagsFindResponse::fromArray($response);
    }
}
