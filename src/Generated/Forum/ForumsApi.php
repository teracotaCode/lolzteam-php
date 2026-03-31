<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\ForumsListResponse;
use Lolzteam\Generated\Forum\Models\ForumsGroupedResponse;
use Lolzteam\Generated\Forum\Models\ForumsGetResponse;
use Lolzteam\Generated\Forum\Models\ForumsFollowersResponse;
use Lolzteam\Generated\Forum\Models\SaveChangesResponse;
use Lolzteam\Generated\Forum\Models\ForumsFollowedResponse;
use Lolzteam\Generated\Forum\Models\ForumsGetFeedOptionsResponse;

/**
 * Forums API group.
 */
class ForumsApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Forums
     *
     * List of all forums in the system.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /forums
     * @param int|null $parentCategoryId Id of parent category. If exists, filter forums that are direct children of that category.
     * @param int|null $parentForumId Id of parent forum. If exists, filter forums that are direct children of that forum.
     * @param string|null $order Ordering of forums.
     * @return \Lolzteam\Generated\Forum\Models\ForumsListResponse
     */
    public function list(
        int|null $parentCategoryId = null,
        int|null $parentForumId = null,
        string|null $order = null,
    ): \Lolzteam\Generated\Forum\Models\ForumsListResponse {
        $path = '/forums';
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
        return \Lolzteam\Generated\Forum\Models\ForumsListResponse::fromArray($response);
    }

    /**
     * Get Forums Tree
     *
     * Returns grouped forums.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /forums/grouped
     * @return \Lolzteam\Generated\Forum\Models\ForumsGroupedResponse
     */
    public function grouped(
    ): \Lolzteam\Generated\Forum\Models\ForumsGroupedResponse {
        $path = '/forums/grouped';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ForumsGroupedResponse::fromArray($response);
    }

    /**
     * Get Forum
     *
     * Detail information of a forum.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /forums/{forum_id}
     * @param int|null $forumId Id of forum.
     * @return \Lolzteam\Generated\Forum\Models\ForumsGetResponse
     */
    public function get(
        int $forumId,
    ): \Lolzteam\Generated\Forum\Models\ForumsGetResponse {
        $path = '/forums/' . rawurlencode((string)$forumId);
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ForumsGetResponse::fromArray($response);
    }

    /**
     * Get Followers
     *
     * List of a forum's followers. For privacy reason, only the current user will be included in the list (if the user follows the specified forum).
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /forums/{forum_id}/followers
     * @param int|null $forumId Id of forum.
     * @return \Lolzteam\Generated\Forum\Models\ForumsFollowersResponse
     */
    public function followers(
        int $forumId,
    ): \Lolzteam\Generated\Forum\Models\ForumsFollowersResponse {
        $path = '/forums/' . rawurlencode((string)$forumId) . '/followers';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ForumsFollowersResponse::fromArray($response);
    }

    /**
     * Follow Forum
     *
     * Follow a forum.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /forums/{forum_id}/followers
     * @param int|null $forumId Id of forum.
     * @param bool|null $post Whether to receive notification for post.
     * @param bool|null $alert Whether to receive notification as alert.
     * @param bool|null $email Whether to receive notification as email.
     * @param array|null $prefixIds Prefix ids.
     * @param int|null $minimalContestAmount Minimal contest amount. (Only for 766 forumId)
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function follow(
        int $forumId,
        bool|null $post = null,
        bool|null $alert = null,
        bool|null $email = null,
        array|null $prefixIds = null,
        int|null $minimalContestAmount = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/forums/' . rawurlencode((string)$forumId) . '/followers';
        $options = [];
        $json = [];
        if ($post !== null) {
            $json['post'] = $post;
        }
        if ($alert !== null) {
            $json['alert'] = $alert;
        }
        if ($email !== null) {
            $json['email'] = $email;
        }
        if ($prefixIds !== null) {
            $json['prefix_ids'] = $prefixIds;
        }
        if ($minimalContestAmount !== null) {
            $json['minimal_contest_amount'] = $minimalContestAmount;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Unfollow Forum
     *
     * Unfollow a forum.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint DELETE /forums/{forum_id}/followers
     * @param int|null $forumId Id of forum.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function unfollow(
        int $forumId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/forums/' . rawurlencode((string)$forumId) . '/followers';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Followed Forums
     *
     * List of followed forums by current user.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /forums/followed
     * @param bool|null $total If included in the request, only the forum count is returned as **forums_total**.
     * @return \Lolzteam\Generated\Forum\Models\ForumsFollowedResponse
     */
    public function followed(
        bool|null $total = null,
    ): \Lolzteam\Generated\Forum\Models\ForumsFollowedResponse {
        $path = '/forums/followed';
        $options = [];
        $params = [];
        if ($total !== null) {
            $params['total'] = $total;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ForumsFollowedResponse::fromArray($response);
    }

    /**
     * Get Feed Options
     *
     * Returns available options for the forums feed.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /forums/feed/options
     * @return \Lolzteam\Generated\Forum\Models\ForumsGetFeedOptionsResponse
     */
    public function getFeedOptions(
    ): \Lolzteam\Generated\Forum\Models\ForumsGetFeedOptionsResponse {
        $path = '/forums/feed/options';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ForumsGetFeedOptionsResponse::fromArray($response);
    }

    /**
     * Edit Feed Options
     *
     * Edit feed options.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint PUT /forums/feed/options
     * @param array|null $nodeIds Array of forum ids to exclude from the feed.
     * @param array|null $keywords List of keywords to exclude specific threads from the feed.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function editFeedOptions(
        array|null $nodeIds = null,
        array|null $keywords = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/forums/feed/options';
        $options = [];
        $json = [];
        if ($nodeIds !== null) {
            $json['node_ids'] = $nodeIds;
        }
        if ($keywords !== null) {
            $json['keywords'] = $keywords;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('PUT', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }
}
