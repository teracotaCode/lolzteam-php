<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\PostsListResponse;
use Lolzteam\Generated\Forum\Models\PostsCreateResponse;
use Lolzteam\Generated\Forum\Models\PostsGetResponse;
use Lolzteam\Generated\Forum\Models\PostsEditResponse;
use Lolzteam\Generated\Forum\Models\SaveChangesResponse;
use Lolzteam\Generated\Forum\Models\PostsLikesResponse;
use Lolzteam\Generated\Forum\Models\PostsReportReasonsResponse;

/**
 * Posts API group.
 */
class PostsApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Posts
     *
     * List of posts in a thread (with pagination).
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /posts
     * @param int|null $threadId Id of the containing thread.
     * @param int|null $pageOfPostId Id of a post, posts that are in the same page with the specified post will be returned. **thread_id** may be skipped.
     * @param int|null $page Page number of posts.
     * @param int|null $limit Number of posts in a page.
     * @param string|null $order Ordering of posts.
     * @return \Lolzteam\Generated\Forum\Models\PostsListResponse
     */
    public function list(
        int|null $threadId = null,
        int|null $pageOfPostId = null,
        int|null $page = null,
        int|null $limit = null,
        string|null $order = null,
    ): \Lolzteam\Generated\Forum\Models\PostsListResponse {
        $path = '/posts';
        $options = [];
        $params = [];
        if ($threadId !== null) {
            $params['thread_id'] = $threadId;
        }
        if ($pageOfPostId !== null) {
            $params['page_of_post_id'] = $pageOfPostId;
        }
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($limit !== null) {
            $params['limit'] = $limit;
        }
        if ($order !== null) {
            $params['order'] = $order;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\PostsListResponse::fromArray($response);
    }

    /**
     * Create Post
     *
     * Create a new post.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /posts
     * @param string|null $postBody Content of the new post.
     * @param int|null $threadId Id of the target thread. **quote_post_id** can be skipped if this parameter is provided.
     * @param int|null $quotePostId Id of the quote post. **thread_id** can be skipped if this parameter is provided.
     * @return \Lolzteam\Generated\Forum\Models\PostsCreateResponse
     */
    public function create(
        string|null $postBody = null,
        int|null $threadId = null,
        int|null $quotePostId = null,
    ): \Lolzteam\Generated\Forum\Models\PostsCreateResponse {
        $path = '/posts';
        $options = [];
        $json = [];
        if ($postBody !== null) {
            $json['post_body'] = $postBody;
        }
        if ($threadId !== null) {
            $json['thread_id'] = $threadId;
        }
        if ($quotePostId !== null) {
            $json['quote_post_id'] = $quotePostId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\PostsCreateResponse::fromArray($response);
    }

    /**
     * Get Post
     *
     * Detail information of a post.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /posts/{post_id}
     * @param int|null $postId Id of post.
     * @return \Lolzteam\Generated\Forum\Models\PostsGetResponse
     */
    public function get(
        int $postId,
    ): \Lolzteam\Generated\Forum\Models\PostsGetResponse {
        $path = '/posts/' . rawurlencode((string)$postId);
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\PostsGetResponse::fromArray($response);
    }

    /**
     * Edit Post
     *
     * Edit a post.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint PUT /posts/{post_id}
     * @param int|null $postId Id of post.
     * @param string|null $postBody Content of the post.
     * @return \Lolzteam\Generated\Forum\Models\PostsEditResponse
     */
    public function edit(
        int $postId,
        string|null $postBody = null,
    ): \Lolzteam\Generated\Forum\Models\PostsEditResponse {
        $path = '/posts/' . rawurlencode((string)$postId);
        $options = [];
        $json = [];
        if ($postBody !== null) {
            $json['post_body'] = $postBody;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('PUT', $path, $options);
        return \Lolzteam\Generated\Forum\Models\PostsEditResponse::fromArray($response);
    }

    /**
     * Delete Post
     *
     * Delete a post.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint DELETE /posts/{post_id}
     * @param int|null $postId Id of post.
     * @param string|null $reason Reason of the post removal.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function delete(
        int $postId,
        string|null $reason = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/posts/' . rawurlencode((string)$postId);
        $options = [];
        $json = [];
        if ($reason !== null) {
            $json['reason'] = $reason;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Post Likes
     *
     * List of users who liked a post.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /posts/{post_id}/likes
     * @param int|null $postId Id of post.
     * @param int|null $page Page number of users.
     * @param int|null $limit Number of users in a page.
     * @return \Lolzteam\Generated\Forum\Models\PostsLikesResponse
     */
    public function likes(
        int $postId,
        int|null $page = null,
        int|null $limit = null,
    ): \Lolzteam\Generated\Forum\Models\PostsLikesResponse {
        $path = '/posts/' . rawurlencode((string)$postId) . '/likes';
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
        return \Lolzteam\Generated\Forum\Models\PostsLikesResponse::fromArray($response);
    }

    /**
     * Like Post
     *
     * Like a post.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /posts/{post_id}/likes
     * @param int|null $postId Id of post.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function like(
        int $postId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/posts/' . rawurlencode((string)$postId) . '/likes';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Unlike Post
     *
     * Unlike a post.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint DELETE /posts/{post_id}/likes
     * @param int|null $postId Id of post.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function unlike(
        int $postId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/posts/' . rawurlencode((string)$postId) . '/likes';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Post Report Reasons
     *
     * Get post report reasons.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /posts/{post_id}/report
     * @param int|null $postId Id of post.
     * @return \Lolzteam\Generated\Forum\Models\PostsReportReasonsResponse
     */
    public function reportReasons(
        int $postId,
    ): \Lolzteam\Generated\Forum\Models\PostsReportReasonsResponse {
        $path = '/posts/' . rawurlencode((string)$postId) . '/report';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\PostsReportReasonsResponse::fromArray($response);
    }

    /**
     * Report Post
     *
     * Report a post.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /posts/{post_id}/report
     * @param int|null $postId Id of post.
     * @param string|null $message Reason of the report.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function report(
        int $postId,
        string|null $message = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/posts/' . rawurlencode((string)$postId) . '/report';
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
     * Report Post Comment
     *
     * Report a post comment.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /posts/comments/report
     * @param int|null $postCommentId Id of post comment.
     * @param string|null $message Reason of the report.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function commentsReport(
        int|null $postCommentId = null,
        string|null $message = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/posts/comments/report';
        $options = [];
        $json = [];
        if ($postCommentId !== null) {
            $json['post_comment_id'] = $postCommentId;
        }
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
