<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\ProfilePostsListResponse;
use Lolzteam\Generated\Forum\Models\ProfilePostsGetResponse;
use Lolzteam\Generated\Forum\Models\ProfilePostsEditResponse;
use Lolzteam\Generated\Forum\Models\SaveChangesResponse;
use Lolzteam\Generated\Forum\Models\ProfilePostsReportReasonsResponse;
use Lolzteam\Generated\Forum\Models\ProfilePostsCreateResponse;
use Lolzteam\Generated\Forum\Models\ProfilePostsLikesResponse;

/**
 * Profile Posts API group.
 */
class ProfilePostsApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Profile Posts
     *
     * List of profile posts (with pagination).
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /users/{user_id}/profile-posts
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @param int|null $postsUserId Filter to get only posts from the specified user.
     * @param int|null $page Page number of contents.
     * @param int|null $limit Number of contents in a page.
     * @param array|null $fieldsInclude List of fields to include.
     * @return \Lolzteam\Generated\Forum\Models\ProfilePostsListResponse
     */
    public function list(
        string|int $userId,
        int|null $postsUserId = null,
        int|null $page = null,
        int|null $limit = null,
        array|null $fieldsInclude = null,
    ): \Lolzteam\Generated\Forum\Models\ProfilePostsListResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/profile-posts';
        $options = [];
        $params = [];
        if ($postsUserId !== null) {
            $params['posts_user_id'] = $postsUserId;
        }
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($limit !== null) {
            $params['limit'] = $limit;
        }
        if ($fieldsInclude !== null) {
            $params['fields_include'] = $fieldsInclude;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ProfilePostsListResponse::fromArray($response);
    }

    /**
     * Get Profile Post
     *
     * Detail information of a profile post.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /profile-posts/{profile_post_id}
     * @param int|null $profilePostId Id of profile post.
     * @return \Lolzteam\Generated\Forum\Models\ProfilePostsGetResponse
     */
    public function get(
        int $profilePostId,
    ): \Lolzteam\Generated\Forum\Models\ProfilePostsGetResponse {
        $path = '/profile-posts/' . rawurlencode((string)$profilePostId);
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ProfilePostsGetResponse::fromArray($response);
    }

    /**
     * Edit Profile Post
     *
     * Edit a profile post.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint PUT /profile-posts/{profile_post_id}
     * @param int|null $profilePostId Id of profile post.
     * @param string|null $postBody New content of the profile post.
     * @param bool|null $disableComments Disable comments.
     * @return \Lolzteam\Generated\Forum\Models\ProfilePostsEditResponse
     */
    public function edit(
        int $profilePostId,
        string|null $postBody = null,
        bool|null $disableComments = null,
    ): \Lolzteam\Generated\Forum\Models\ProfilePostsEditResponse {
        $path = '/profile-posts/' . rawurlencode((string)$profilePostId);
        $options = [];
        $json = [];
        if ($postBody !== null) {
            $json['post_body'] = $postBody;
        }
        if ($disableComments !== null) {
            $json['disable_comments'] = $disableComments;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('PUT', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ProfilePostsEditResponse::fromArray($response);
    }

    /**
     * Delete Profile Post
     *
     * Delete a profile post.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint DELETE /profile-posts/{profile_post_id}
     * @param int|null $profilePostId Id of profile post.
     * @param string|null $reason Reason of the profile post removal.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function delete(
        int $profilePostId,
        string|null $reason = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/profile-posts/' . rawurlencode((string)$profilePostId);
        $options = [];
        $params = [];
        if ($reason !== null) {
            $params['reason'] = $reason;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Profile Post Report Reasons
     *
     * Get Profile Post Report Reasons.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /profile-posts/{profile_post_id}/report
     * @param int|null $profilePostId Id of profile post.
     * @return \Lolzteam\Generated\Forum\Models\ProfilePostsReportReasonsResponse
     */
    public function reportReasons(
        int $profilePostId,
    ): \Lolzteam\Generated\Forum\Models\ProfilePostsReportReasonsResponse {
        $path = '/profile-posts/' . rawurlencode((string)$profilePostId) . '/report';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ProfilePostsReportReasonsResponse::fromArray($response);
    }

    /**
     * Report a Profile Post
     *
     * Report a profile post.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /profile-posts/{profile_post_id}/report
     * @param int|null $profilePostId Id of profile post.
     * @param string|null $message Reason of the report.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function report(
        int $profilePostId,
        string|null $message = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/profile-posts/' . rawurlencode((string)$profilePostId) . '/report';
        $options = [];
        $json = [];
        if ($message !== null) {
            $json['message'] = $message;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Create Profile Post
     *
     * Create a profile post on a user profile.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /profile-posts
     * @param string|int|null $userId user_id
     * @param string|null $postBody Content of a profile post.
     * @return \Lolzteam\Generated\Forum\Models\ProfilePostsCreateResponse
     */
    public function create(
        string|int|null $userId = null,
        string|null $postBody = null,
    ): \Lolzteam\Generated\Forum\Models\ProfilePostsCreateResponse {
        $path = '/profile-posts';
        $options = [];
        $json = [];
        if ($userId !== null) {
            $json['user_id'] = $userId;
        }
        if ($postBody !== null) {
            $json['post_body'] = $postBody;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ProfilePostsCreateResponse::fromArray($response);
    }

    /**
     * Stick Profile Post
     *
     * Stick a profile post.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /profile-posts/{profile_post_id}/stick
     * @param int|null $profilePostId Id of profile post.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function stick(
        int $profilePostId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/profile-posts/' . rawurlencode((string)$profilePostId) . '/stick';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Unstick Profile Post
     *
     * Unstick a profile post.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint DELETE /profile-posts/{profile_post_id}/stick
     * @param int|null $profilePostId Id of profile post.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function unstick(
        int $profilePostId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/profile-posts/' . rawurlencode((string)$profilePostId) . '/stick';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Profile Post Likes
     *
     * List of users who liked a profile post.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /profile-posts/{profile_post_id}/likes
     * @param int|null $profilePostId Id of profile post.
     * @return \Lolzteam\Generated\Forum\Models\ProfilePostsLikesResponse
     */
    public function likes(
        int $profilePostId,
    ): \Lolzteam\Generated\Forum\Models\ProfilePostsLikesResponse {
        $path = '/profile-posts/' . rawurlencode((string)$profilePostId) . '/likes';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ProfilePostsLikesResponse::fromArray($response);
    }

    /**
     * Like Profile Post
     *
     * Like a profile post.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /profile-posts/{profile_post_id}/likes
     * @param int|null $profilePostId Id of profile post.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function like(
        int $profilePostId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/profile-posts/' . rawurlencode((string)$profilePostId) . '/likes';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Unlike Profile Post
     *
     * Unlike a profile post.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint DELETE /profile-posts/{profile_post_id}/likes
     * @param int|null $profilePostId Id of profile post.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function unlike(
        int $profilePostId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/profile-posts/' . rawurlencode((string)$profilePostId) . '/likes';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }
}
