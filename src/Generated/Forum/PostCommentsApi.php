<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\PostsCommentsGetResponse;
use Lolzteam\Generated\Forum\Models\PostsCommentsCreateResponse;
use Lolzteam\Generated\Forum\Models\PostsCommentsEditResponse;
use Lolzteam\Generated\Forum\Models\SaveChangesResponse;

/**
 * Post comments API group.
 */
class PostCommentsApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Post Comments
     *
     * List of post comments in a thread.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /posts/comments
     * @param int|null $postId Id of post.
     * @param int|null $before The time in milliseconds (e.g. 1652177794083) before last comment date.
     * @param int|null $beforeComment Comment id to get older comments.
     * @return \Lolzteam\Generated\Forum\Models\PostsCommentsGetResponse
     */
    public function commentsGet(
        int|null $postId = null,
        int|null $before = null,
        int|null $beforeComment = null,
    ): \Lolzteam\Generated\Forum\Models\PostsCommentsGetResponse {
        $path = '/posts/comments';
        $options = [];
        $params = [];
        if ($postId !== null) {
            $params['post_id'] = $postId;
        }
        if ($before !== null) {
            $params['before'] = $before;
        }
        if ($beforeComment !== null) {
            $params['before_comment'] = $beforeComment;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\PostsCommentsGetResponse::fromArray($response);
    }

    /**
     * Create Post Comment
     *
     * Create a post comment.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /posts/comments
     * @param int|null $postId Id of post.
     * @param string|null $commentBody Content of the a post comment.
     * @return \Lolzteam\Generated\Forum\Models\PostsCommentsCreateResponse
     */
    public function commentsCreate(
        int|null $postId = null,
        string|null $commentBody = null,
    ): \Lolzteam\Generated\Forum\Models\PostsCommentsCreateResponse {
        $path = '/posts/comments';
        $options = [];
        $json = [];
        if ($postId !== null) {
            $json['post_id'] = $postId;
        }
        if ($commentBody !== null) {
            $json['comment_body'] = $commentBody;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\PostsCommentsCreateResponse::fromArray($response);
    }

    /**
     * Edit Post Comment
     *
     * Edit a post comment.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint PUT /posts/comments
     * @param int|null $postCommentId Id of post.
     * @param string|null $commentBody Content of the new post comment.
     * @return \Lolzteam\Generated\Forum\Models\PostsCommentsEditResponse
     */
    public function commentsEdit(
        int|null $postCommentId = null,
        string|null $commentBody = null,
    ): \Lolzteam\Generated\Forum\Models\PostsCommentsEditResponse {
        $path = '/posts/comments';
        $options = [];
        $json = [];
        if ($postCommentId !== null) {
            $json['post_comment_id'] = $postCommentId;
        }
        if ($commentBody !== null) {
            $json['comment_body'] = $commentBody;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('PUT', $path, $options);
        return \Lolzteam\Generated\Forum\Models\PostsCommentsEditResponse::fromArray($response);
    }

    /**
     * Delete Post Comment
     *
     * Delete a post comment.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint DELETE /posts/comments
     * @param int|null $postCommentId Id of post comment.
     * @param string|null $reason Reason of a post comment removal.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function commentsDelete(
        int|null $postCommentId = null,
        string|null $reason = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/posts/comments';
        $options = [];
        $json = [];
        if ($postCommentId !== null) {
            $json['post_comment_id'] = $postCommentId;
        }
        if ($reason !== null) {
            $json['reason'] = $reason;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }
}
