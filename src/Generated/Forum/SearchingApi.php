<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\SearchAllResponse;
use Lolzteam\Generated\Forum\Models\SearchThreadsResponse;
use Lolzteam\Generated\Forum\Models\SearchPostsResponse;
use Lolzteam\Generated\Forum\Models\SearchUsersResponse;
use Lolzteam\Generated\Forum\Models\SearchProfilePostsResponse;
use Lolzteam\Generated\Forum\Models\SearchTaggedResponse;
use Lolzteam\Generated\Forum\Models\SearchResultsResponse;

/**
 * Searching API group.
 */
class SearchingApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Search
     *
     * Search for all supported contents.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /search
     * @param string|null $q Search query. Can be skipped if **user_id** is set.
     * @param string|null $tag Tag to search for tagged contents.
     * @param int|null $forumId Id of the container forum to search for contents. Child forums of the specified forum will be included in the search.
     * @param string|int|null $userId user_id
     * @param int|null $page Page number of results.
     * @param int|null $limit Number of results in a page.
     * @param int|null $before The time in milliseconds (e.g. 1767214800) before last content date.
     * @return \Lolzteam\Generated\Forum\Models\SearchAllResponse
     */
    public function all(
        string|null $q = null,
        string|null $tag = null,
        int|null $forumId = null,
        string|int|null $userId = null,
        int|null $page = null,
        int|null $limit = null,
        int|null $before = null,
    ): \Lolzteam\Generated\Forum\Models\SearchAllResponse {
        $path = '/search';
        $options = [];
        $json = [];
        if ($q !== null) {
            $json['q'] = $q;
        }
        if ($tag !== null) {
            $json['tag'] = $tag;
        }
        if ($forumId !== null) {
            $json['forum_id'] = $forumId;
        }
        if ($userId !== null) {
            $json['user_id'] = $userId;
        }
        if ($page !== null) {
            $json['page'] = $page;
        }
        if ($limit !== null) {
            $json['limit'] = $limit;
        }
        if ($before !== null) {
            $json['before'] = $before;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $options['isSearch'] = true;
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SearchAllResponse::fromArray($response);
    }

    /**
     * Search Thread
     *
     * Search for threads.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /search/threads
     * @param string|null $q Search query. Can be skipped if **user_id** is set.
     * @param string|null $tag Tag to search for tagged contents.
     * @param int|null $forumId Id of the container forum to search for contents. Child forums of the specified forum will be included in the search.
     * @param string|int|null $userId user_id
     * @param int|null $page Page number of results.
     * @param int|null $limit Number of results in a page.
     * @param int|null $dataLimit Number of thread data to be returned.
     * @param int|null $before The time in milliseconds (e.g. 1767214800) before last content date.
     * @return \Lolzteam\Generated\Forum\Models\SearchThreadsResponse
     */
    public function threads(
        string|null $q = null,
        string|null $tag = null,
        int|null $forumId = null,
        string|int|null $userId = null,
        int|null $page = null,
        int|null $limit = null,
        int|null $dataLimit = null,
        int|null $before = null,
    ): \Lolzteam\Generated\Forum\Models\SearchThreadsResponse {
        $path = '/search/threads';
        $options = [];
        $json = [];
        if ($q !== null) {
            $json['q'] = $q;
        }
        if ($tag !== null) {
            $json['tag'] = $tag;
        }
        if ($forumId !== null) {
            $json['forum_id'] = $forumId;
        }
        if ($userId !== null) {
            $json['user_id'] = $userId;
        }
        if ($page !== null) {
            $json['page'] = $page;
        }
        if ($limit !== null) {
            $json['limit'] = $limit;
        }
        if ($dataLimit !== null) {
            $json['data_limit'] = $dataLimit;
        }
        if ($before !== null) {
            $json['before'] = $before;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $options['isSearch'] = true;
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SearchThreadsResponse::fromArray($response);
    }

    /**
     * Search Post
     *
     * Search for posts.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /search/posts
     * @param string|null $q Search query. Can be skipped if **user_id** is set.
     * @param string|null $tag Tag to search for tagged contents.
     * @param int|null $forumId Id of the container forum to search for contents. Child forums of the specified forum will be included in the search.
     * @param string|int|null $userId user_id
     * @param int|null $page Page number of results.
     * @param int|null $limit Number of results in a page.
     * @param int|null $dataLimit Number of post data to be returned.
     * @param int|null $before The time in milliseconds (e.g. 1767214800) before last content date.
     * @return \Lolzteam\Generated\Forum\Models\SearchPostsResponse
     */
    public function posts(
        string|null $q = null,
        string|null $tag = null,
        int|null $forumId = null,
        string|int|null $userId = null,
        int|null $page = null,
        int|null $limit = null,
        int|null $dataLimit = null,
        int|null $before = null,
    ): \Lolzteam\Generated\Forum\Models\SearchPostsResponse {
        $path = '/search/posts';
        $options = [];
        $json = [];
        if ($q !== null) {
            $json['q'] = $q;
        }
        if ($tag !== null) {
            $json['tag'] = $tag;
        }
        if ($forumId !== null) {
            $json['forum_id'] = $forumId;
        }
        if ($userId !== null) {
            $json['user_id'] = $userId;
        }
        if ($page !== null) {
            $json['page'] = $page;
        }
        if ($limit !== null) {
            $json['limit'] = $limit;
        }
        if ($dataLimit !== null) {
            $json['data_limit'] = $dataLimit;
        }
        if ($before !== null) {
            $json['before'] = $before;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $options['isSearch'] = true;
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SearchPostsResponse::fromArray($response);
    }

    /**
     * Search Users
     *
     * Search for users.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /search/users
     * @param string|null $q Search query.
     * @return \Lolzteam\Generated\Forum\Models\SearchUsersResponse
     */
    public function users(
        string|null $q = null,
    ): \Lolzteam\Generated\Forum\Models\SearchUsersResponse {
        $path = '/search/users';
        $options = [];
        $json = [];
        if ($q !== null) {
            $json['q'] = $q;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $options['isSearch'] = true;
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SearchUsersResponse::fromArray($response);
    }

    /**
     * Search Profile Posts
     *
     * Search for profile posts.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /search/profile-posts
     * @param string|null $q Search query. Can be skipped if **user_id** is set.
     * @param int|null $userId User ID to filter profile posts.
     * @param int|null $page Page number of results.
     * @param int|null $limit Number of results in a page.
     * @param int|null $before The time in milliseconds (e.g. 1767214800) before last content date.
     * @return \Lolzteam\Generated\Forum\Models\SearchProfilePostsResponse
     */
    public function profilePosts(
        string|null $q = null,
        int|null $userId = null,
        int|null $page = null,
        int|null $limit = null,
        int|null $before = null,
    ): \Lolzteam\Generated\Forum\Models\SearchProfilePostsResponse {
        $path = '/search/profile-posts';
        $options = [];
        $json = [];
        if ($q !== null) {
            $json['q'] = $q;
        }
        if ($userId !== null) {
            $json['user_id'] = $userId;
        }
        if ($page !== null) {
            $json['page'] = $page;
        }
        if ($limit !== null) {
            $json['limit'] = $limit;
        }
        if ($before !== null) {
            $json['before'] = $before;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $options['isSearch'] = true;
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SearchProfilePostsResponse::fromArray($response);
    }

    /**
     * Search Tagged
     *
     * Search for tagged contents.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /search/tagged
     * @param string|null $tag Tag to search for tagged contents.
     * @param array|null $tags Array of tags to search for tagged contents.
     * @param int|null $page Page number of results.
     * @param int|null $limit Number of results in a page.
     * @return \Lolzteam\Generated\Forum\Models\SearchTaggedResponse
     */
    public function tagged(
        string|null $tag = null,
        array|null $tags = null,
        int|null $page = null,
        int|null $limit = null,
    ): \Lolzteam\Generated\Forum\Models\SearchTaggedResponse {
        $path = '/search/tagged';
        $options = [];
        $json = [];
        if ($tag !== null) {
            $json['tag'] = $tag;
        }
        if ($tags !== null) {
            $json['tags'] = $tags;
        }
        if ($page !== null) {
            $json['page'] = $page;
        }
        if ($limit !== null) {
            $json['limit'] = $limit;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $options['isSearch'] = true;
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SearchTaggedResponse::fromArray($response);
    }

    /**
     * Get Search Results
     *
     * List of search results (with pagination).
     * 
     * Required scopes:
     * + **get**
     *
     * @endpoint GET /search/{search_id}/results
     * @param string|int|null $searchId Search ID.
     * @param int|null $page Page number of results.
     * @param int|null $limit Number of results in a page.
     * @return \Lolzteam\Generated\Forum\Models\SearchResultsResponse
     */
    public function results(
        string|int $searchId,
        int|null $page = null,
        int|null $limit = null,
    ): \Lolzteam\Generated\Forum\Models\SearchResultsResponse {
        $path = '/search/' . rawurlencode((string)$searchId) . '/results';
        $options = [];
        $json = [];
        if ($page !== null) {
            $json['page'] = $page;
        }
        if ($limit !== null) {
            $json['limit'] = $limit;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $options['isSearch'] = true;
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SearchResultsResponse::fromArray($response);
    }
}
