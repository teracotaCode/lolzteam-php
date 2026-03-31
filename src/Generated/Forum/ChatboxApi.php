<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\ChatboxIndexResponse;
use Lolzteam\Generated\Forum\Models\ChatboxGetMessagesResponse;
use Lolzteam\Generated\Forum\Models\ChatboxPostMessageResponse;
use Lolzteam\Generated\Forum\Models\ChatboxEditMessageResponse;
use Lolzteam\Generated\Forum\Models\SaveChangesResponse;
use Lolzteam\Generated\Forum\Models\ChatboxOnlineResponse;
use Lolzteam\Generated\Forum\Models\ChatboxReportReasonsResponse;
use Lolzteam\Generated\Forum\Models\ChatboxGetLeaderboardResponse;
use Lolzteam\Generated\Forum\Models\ChatboxGetIgnoreResponse;

/**
 * Chatbox API group.
 */
class ChatboxApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Chats
     *
     * Get chat rooms.
     * 
     * Required scopes:
     * + **chatbox**
     *
     * @endpoint GET /chatbox
     * @param array $jobs Array of batch job objects with keys: id (string, optional), uri (string, required), method (string, optional), params (array, optional).
     * @param int|null $roomId Room id.
     * @return \Lolzteam\Generated\Forum\Models\ChatboxIndexResponse
     */
    public function index(
        array $jobs,
        int|null $roomId = null,
    ): \Lolzteam\Generated\Forum\Models\ChatboxIndexResponse {
        $path = '/chatbox';
        $options = [];
        $params = [];
        if ($roomId !== null) {
            $params['room_id'] = $roomId;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $options['json'] = $jobs;
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ChatboxIndexResponse::fromArray($response);
    }

    /**
     * Get Chat Messages
     *
     * Get chat messages.
     * 
     * Required scopes:
     * + **chatbox**
     *
     * @endpoint GET /chatbox/messages
     * @param array $jobs Array of batch job objects with keys: id (string, optional), uri (string, required), method (string, optional), params (array, optional).
     * @param int|null $roomId Room id.
     * @param int|null $beforeMessageId Message id to get older chat messages.
     * @return \Lolzteam\Generated\Forum\Models\ChatboxGetMessagesResponse
     */
    public function getMessages(
        array $jobs,
        int|null $roomId = null,
        int|null $beforeMessageId = null,
    ): \Lolzteam\Generated\Forum\Models\ChatboxGetMessagesResponse {
        $path = '/chatbox/messages';
        $options = [];
        $params = [];
        if ($roomId !== null) {
            $params['room_id'] = $roomId;
        }
        if ($beforeMessageId !== null) {
            $params['before_message_id'] = $beforeMessageId;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $options['json'] = $jobs;
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ChatboxGetMessagesResponse::fromArray($response);
    }

    /**
     * Create Chat Message
     *
     * Create chat message.
     * 
     * Required scopes:
     * + **chatbox**
     *
     * @endpoint POST /chatbox/messages
     * @param int|null $roomId Room ID.
     * @param string|null $message Content of the chat message.
     * @param int|null $replyMessageId ID of the message being replied to.
     * @return \Lolzteam\Generated\Forum\Models\ChatboxPostMessageResponse
     */
    public function postMessage(
        int|null $roomId = null,
        string|null $message = null,
        int|null $replyMessageId = null,
    ): \Lolzteam\Generated\Forum\Models\ChatboxPostMessageResponse {
        $path = '/chatbox/messages';
        $options = [];
        $json = [];
        if ($roomId !== null) {
            $json['room_id'] = $roomId;
        }
        if ($replyMessageId !== null) {
            $json['reply_message_id'] = $replyMessageId;
        }
        if ($message !== null) {
            $json['message'] = $message;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ChatboxPostMessageResponse::fromArray($response);
    }

    /**
     * Edit Chat Message
     *
     * Edit chat message.
     * 
     * Required scopes:
     * + **chatbox**
     *
     * @endpoint PUT /chatbox/messages
     * @param int|null $messageId Message id.
     * @param string|null $message New content of the chat message.
     * @return \Lolzteam\Generated\Forum\Models\ChatboxEditMessageResponse
     */
    public function editMessage(
        int|null $messageId = null,
        string|null $message = null,
    ): \Lolzteam\Generated\Forum\Models\ChatboxEditMessageResponse {
        $path = '/chatbox/messages';
        $options = [];
        $json = [];
        if ($messageId !== null) {
            $json['message_id'] = $messageId;
        }
        if ($message !== null) {
            $json['message'] = $message;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('PUT', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ChatboxEditMessageResponse::fromArray($response);
    }

    /**
     * Delete Chat Message
     *
     * Delete chat message.
     * 
     * Required scopes:
     * + **chatbox**
     *
     * @endpoint DELETE /chatbox/messages
     * @param int|null $messageId Message id.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function deleteMessage(
        int|null $messageId = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/chatbox/messages';
        $options = [];
        $json = [];
        if ($messageId !== null) {
            $json['message_id'] = $messageId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Chat Online
     *
     * Get chat Online Users.
     * 
     * Required scopes:
     * + **chatbox**
     *
     * @endpoint GET /chatbox/messages/online
     * @param int|null $roomId Room id.
     * @return \Lolzteam\Generated\Forum\Models\ChatboxOnlineResponse
     */
    public function online(
        int|null $roomId = null,
    ): \Lolzteam\Generated\Forum\Models\ChatboxOnlineResponse {
        $path = '/chatbox/messages/online';
        $options = [];
        $params = [];
        if ($roomId !== null) {
            $params['room_id'] = $roomId;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ChatboxOnlineResponse::fromArray($response);
    }

    /**
     * Get Chat Message Report Reasons
     *
     * Report chat message.
     * 
     * Required scopes:
     * + **chatbox**
     *
     * @endpoint GET /chatbox/messages/report
     * @param int|null $messageId Message id.
     * @return \Lolzteam\Generated\Forum\Models\ChatboxReportReasonsResponse
     */
    public function reportReasons(
        int|null $messageId = null,
    ): \Lolzteam\Generated\Forum\Models\ChatboxReportReasonsResponse {
        $path = '/chatbox/messages/report';
        $options = [];
        $params = [];
        if ($messageId !== null) {
            $params['message_id'] = $messageId;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ChatboxReportReasonsResponse::fromArray($response);
    }

    /**
     * Report Chat Message
     *
     * Report chat message.
     * 
     * Required scopes:
     * + **chatbox**
     *
     * @endpoint POST /chatbox/messages/report
     * @param int|null $messageId Message id.
     * @param string|null $reason Report reason.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function report(
        int|null $messageId = null,
        string|null $reason = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/chatbox/messages/report';
        $options = [];
        $json = [];
        if ($messageId !== null) {
            $json['message_id'] = $messageId;
        }
        if ($reason !== null) {
            $json['reason'] = $reason;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Chat Leaderboard
     *
     * Get chat leaderboard.
     * 
     * Required scopes:
     * + **chatbox**
     *
     * @endpoint GET /chatbox/messages/leaderboard
     * @param string|null $duration Duration.
     * @return \Lolzteam\Generated\Forum\Models\ChatboxGetLeaderboardResponse
     */
    public function getLeaderboard(
        string|null $duration = null,
    ): \Lolzteam\Generated\Forum\Models\ChatboxGetLeaderboardResponse {
        $path = '/chatbox/messages/leaderboard';
        $options = [];
        $params = [];
        if ($duration !== null) {
            $params['duration'] = $duration;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ChatboxGetLeaderboardResponse::fromArray($response);
    }

    /**
     * Get Ignored Chat Users
     *
     * Get list of ignored chat users.
     * 
     * Required scopes:
     * + **chatbox**
     *
     * @endpoint GET /chatbox/ignore
     * @return \Lolzteam\Generated\Forum\Models\ChatboxGetIgnoreResponse
     */
    public function getIgnore(
    ): \Lolzteam\Generated\Forum\Models\ChatboxGetIgnoreResponse {
        $path = '/chatbox/ignore';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ChatboxGetIgnoreResponse::fromArray($response);
    }

    /**
     * Ignore Chat User
     *
     * Ignore chat user.
     * 
     * Required scopes:
     * + **chatbox**
     *
     * @endpoint POST /chatbox/ignore
     * @param string|int|null $userId user_id
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function postIgnore(
        string|int|null $userId = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/chatbox/ignore';
        $options = [];
        $json = [];
        if ($userId !== null) {
            $json['user_id'] = $userId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Unignore Chat User
     *
     * Unignore chat user.
     * 
     * Required scopes:
     * + **chatbox**
     *
     * @endpoint DELETE /chatbox/ignore
     * @param string|int|null $userId user_id
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function deleteIgnore(
        string|int|null $userId = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/chatbox/ignore';
        $options = [];
        $json = [];
        if ($userId !== null) {
            $json['user_id'] = $userId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }
}
