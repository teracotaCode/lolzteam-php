<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\ProfilePostsCommentsListResponse;
use Lolzteam\Generated\Forum\Models\ProfilePostsCommentsCreateResponse;
use Lolzteam\Generated\Forum\Models\ProfilePostsCommentsEditResponse;
use Lolzteam\Generated\Forum\Models\SaveChangesResponse;
use Lolzteam\Generated\Forum\Models\ProfilePostsCommentsGetResponse;

/**
 * Profile Post Comments API group.
 */
class ProfilePostCommentsApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Profile Post Comments
     *
     * List of comments of a profile post.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /profile-posts/comments
     * @param int|null $profilePostId Id of profile post.
     * @param int|null $before Date to get older comments. Please note that this entry point does not support the page parameter but it still does support **limit**.
     * @param int|null $limit Number of profile posts in a page.
     * @return \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsListResponse
     */
    public function commentsList(
        int|null $profilePostId = null,
        int|null $before = null,
        int|null $limit = null,
    ): \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsListResponse {
        $path = '/profile-posts/comments';
        $options = [];
        $params = [];
        if ($profilePostId !== null) {
            $params['profile_post_id'] = $profilePostId;
        }
        if ($before !== null) {
            $params['before'] = $before;
        }
        if ($limit !== null) {
            $params['limit'] = $limit;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsListResponse::fromArray($response);
    }

    /**
     * Create Profile Post Comment
     *
     * Create a new profile post comment.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /profile-posts/comments
     * @param int|null $profilePostId Id of profile post.
     * @param string|null $commentBody Content of the new profile post comment.
     * @return \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsCreateResponse
     */
    public function commentsCreate(
        int|null $profilePostId = null,
        string|null $commentBody = null,
    ): \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsCreateResponse {
        $path = '/profile-posts/comments';
        $options = [];
        $json = [];
        if ($profilePostId !== null) {
            $json['profile_post_id'] = $profilePostId;
        }
        if ($commentBody !== null) {
            $json['comment_body'] = $commentBody;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsCreateResponse::fromArray($response);
    }

    /**
     * Edit Profile Post Comment
     *
     * Edit a profile post comment.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint PUT /profile-posts/comments
     * @param int|null $commentId Id of profile post comment.
     * @param string|null $commentBody New content for the profile post comment.
     * @return \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsEditResponse
     */
    public function commentsEdit(
        int|null $commentId = null,
        string|null $commentBody = null,
    ): \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsEditResponse {
        $path = '/profile-posts/comments';
        $options = [];
        $json = [];
        if ($commentId !== null) {
            $json['comment_id'] = $commentId;
        }
        if ($commentBody !== null) {
            $json['comment_body'] = $commentBody;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('PUT', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsEditResponse::fromArray($response);
    }

    /**
     * Delete Profile Post Comment
     *
     * Delete a profile post comment.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint DELETE /profile-posts/comments
     * @param int|null $commentId Id of profile post comment.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function commentsDelete(
        int|null $commentId = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/profile-posts/comments';
        $options = [];
        $json = [];
        if ($commentId !== null) {
            $json['comment_id'] = $commentId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Profile Post Comment
     *
     * Detail information of a profile post comment.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /profile-posts/{profile_post_id}/comments/{comment_id}
     * @param int|null $profilePostId Id of profile post.
     * @param int|null $commentId Id of profile post comment.
     * @return \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsGetResponse
     */
    public function commentsGet(
        int $profilePostId,
        int $commentId,
    ): \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsGetResponse {
        $path = '/profile-posts/' . rawurlencode((string)$profilePostId) . '/comments/' . rawurlencode((string)$commentId);
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ProfilePostsCommentsGetResponse::fromArray($response);
    }

    /**
     * Report a Profile Post Comment
     *
     * Report a profile post comment.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /profile-posts/comments/{comment_id}/report
     * @param int|null $commentId Id of profile post comment.
     * @param string|null $message Reason of the report.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function commentsReport(
        int $commentId,
        string|null $message = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/profile-posts/comments/' . rawurlencode((string)$commentId) . '/report';
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
}
