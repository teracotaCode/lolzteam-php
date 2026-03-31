<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\ConversationsListResponse;
use Lolzteam\Generated\Forum\Models\ConversationsCreateResponse;
use Lolzteam\Generated\Forum\Models\ConversationsUpdateResponse;
use Lolzteam\Generated\Forum\Models\SaveChangesResponse;
use Lolzteam\Generated\Forum\Models\ConversationsStartResponse;
use Lolzteam\Generated\Forum\Models\ConversationsGetResponse;
use Lolzteam\Generated\Forum\Models\ConversationsMessagesListResponse;
use Lolzteam\Generated\Forum\Models\ConversationsMessagesCreateResponse;
use Lolzteam\Generated\Forum\Models\ConversationsSearchResponse;
use Lolzteam\Generated\Forum\Models\ConversationsMessagesGetResponse;
use Lolzteam\Generated\Forum\Models\ConversationsMessagesEditResponse;
use Lolzteam\Generated\Forum\Models\ConversationsReadAllResponse;
use Lolzteam\Generated\Forum\Models\ConversationsStarResponse;
use Lolzteam\Generated\Forum\Models\ConversationsUnstarResponse;
use Lolzteam\Generated\Forum\Models\ConversationsAlertsEnableResponse;
use Lolzteam\Generated\Forum\Models\ConversationsAlertsDisableResponse;

/**
 * Conversations API group.
 */
class ConversationsApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Conversations
     *
     * List of conversations (with pagination).
     * 
     * Required scopes:
     * + **read**
     * + **conversate**
     *
     * @endpoint GET /conversations
     * @param string|null $folder Filter conversations by folder.
     * @param int|null $page Page number of conversations.
     * @param int|null $limit Number of conversations in a page.
     * @return \Lolzteam\Generated\Forum\Models\ConversationsListResponse
     */
    public function list(
        string|null $folder = null,
        int|null $page = null,
        int|null $limit = null,
    ): \Lolzteam\Generated\Forum\Models\ConversationsListResponse {
        $path = '/conversations';
        $options = [];
        $params = [];
        if ($folder !== null) {
            $params['folder'] = $folder;
        }
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
        return \Lolzteam\Generated\Forum\Models\ConversationsListResponse::fromArray($response);
    }

    /**
     * Create Conversation
     *
     * Create a new conversation.
     * 
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * @endpoint POST /conversations
     * @param int|null $recipientId Id of recipient. Required if **is_group=false**.
     * @param array|null $recipients List of recipients username's. Max recipients count is 10. Required if **is_group=true**.
     * @param bool|null $isGroup Is group. Set **false** if personal conversation, or set **true** if group.
     * @param string|null $title The title of new conversation. Required if **is_group=1**.
     * @param bool|null $openInvite Open invite.
     * @param bool|null $allowEditMessages Allow edit messages.
     * @param bool|null $allowStickyMessages Allow members to stick messages.
     * @param bool|null $allowDeleteOwnMessages Allow members to delete their own messages.
     * @param string|null $messageBody First message. Required if **is_group**=false
     * @return \Lolzteam\Generated\Forum\Models\ConversationsCreateResponse
     */
    public function create(
        int|null $recipientId = null,
        array|null $recipients = null,
        bool|null $isGroup = null,
        string|null $title = null,
        bool|null $openInvite = null,
        bool|null $allowEditMessages = null,
        bool|null $allowStickyMessages = null,
        bool|null $allowDeleteOwnMessages = null,
        string|null $messageBody = null,
    ): \Lolzteam\Generated\Forum\Models\ConversationsCreateResponse {
        $path = '/conversations';
        $options = [];
        $json = [];
        if ($recipientId !== null) {
            $json['recipient_id'] = $recipientId;
        }
        if ($recipients !== null) {
            $json['recipients'] = $recipients;
        }
        if ($isGroup !== null) {
            $json['is_group'] = $isGroup;
        }
        if ($title !== null) {
            $json['title'] = $title;
        }
        if ($openInvite !== null) {
            $json['open_invite'] = $openInvite;
        }
        if ($allowEditMessages !== null) {
            $json['allow_edit_messages'] = $allowEditMessages;
        }
        if ($allowStickyMessages !== null) {
            $json['allow_sticky_messages'] = $allowStickyMessages;
        }
        if ($allowDeleteOwnMessages !== null) {
            $json['allow_delete_own_messages'] = $allowDeleteOwnMessages;
        }
        if ($messageBody !== null) {
            $json['message_body'] = $messageBody;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ConversationsCreateResponse::fromArray($response);
    }

    /**
     * Edit Conversation
     *
     * Edit conversation.
     * 
     * Required scopes:
     * + **conversate**
     *
     * @endpoint PUT /conversations
     * @param int|null $conversationId Id of conversation.
     * @param string|null $title New conversation title.
     * @param bool|null $openInvite Allow members to invite others.
     * @param bool|null $historyOpen Make conversation history visible to new members.
     * @param bool|null $allowEditMessages Allow members to edit their own messages.
     * @param bool|null $allowStickyMessages Allow members to stick messages.
     * @param bool|null $allowDeleteOwnMessages Allow members to delete their own messages.
     * @return \Lolzteam\Generated\Forum\Models\ConversationsUpdateResponse
     */
    public function update(
        int|null $conversationId = null,
        string|null $title = null,
        bool|null $openInvite = null,
        bool|null $historyOpen = null,
        bool|null $allowEditMessages = null,
        bool|null $allowStickyMessages = null,
        bool|null $allowDeleteOwnMessages = null,
    ): \Lolzteam\Generated\Forum\Models\ConversationsUpdateResponse {
        $path = '/conversations';
        $options = [];
        $json = [];
        if ($conversationId !== null) {
            $json['conversation_id'] = $conversationId;
        }
        if ($title !== null) {
            $json['title'] = $title;
        }
        if ($openInvite !== null) {
            $json['open_invite'] = $openInvite;
        }
        if ($historyOpen !== null) {
            $json['history_open'] = $historyOpen;
        }
        if ($allowEditMessages !== null) {
            $json['allow_edit_messages'] = $allowEditMessages;
        }
        if ($allowStickyMessages !== null) {
            $json['allow_sticky_messages'] = $allowStickyMessages;
        }
        if ($allowDeleteOwnMessages !== null) {
            $json['allow_delete_own_messages'] = $allowDeleteOwnMessages;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('PUT', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ConversationsUpdateResponse::fromArray($response);
    }

    /**
     * Leave Conversation
     *
     * Leave the conversation.
     * 
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * @endpoint DELETE /conversations
     * @param int|null $conversationId Id of conversation.
     * @param string|null $deleteType Deletion type.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function delete(
        int|null $conversationId = null,
        string|null $deleteType = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/conversations';
        $options = [];
        $json = [];
        if ($conversationId !== null) {
            $json['conversation_id'] = $conversationId;
        }
        if ($deleteType !== null) {
            $json['delete_type'] = $deleteType;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Start Conversation
     *
     * Start a new conversation with a user.
     * 
     * Required scopes:
     * + **conversate**
     *
     * @endpoint POST /conversations/start
     * @param string|int|null $userId user_id
     * @return \Lolzteam\Generated\Forum\Models\ConversationsStartResponse
     */
    public function start(
        string|int|null $userId = null,
    ): \Lolzteam\Generated\Forum\Models\ConversationsStartResponse {
        $path = '/conversations/start';
        $options = [];
        $json = [];
        if ($userId !== null) {
            $json['user_id'] = $userId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ConversationsStartResponse::fromArray($response);
    }

    /**
     * Send Content To Saved Messages
     *
     * Send content to Saved Messages.
     * 
     * Required scopes:
     * + **conversate**
     *
     * @endpoint POST /conversations/save
     * @param string|null $link Content url.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function save(
        string|null $link = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/conversations/save';
        $options = [];
        $json = [];
        if ($link !== null) {
            $json['link'] = $link;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Conversation
     *
     * Detail information of a conversation.
     * 
     * Required scopes:
     * + **read**
     * + **conversate**
     *
     * @endpoint GET /conversations/{conversation_id}
     * @param int|null $conversationId Id of conversation.
     * @return \Lolzteam\Generated\Forum\Models\ConversationsGetResponse
     */
    public function get(
        int $conversationId,
    ): \Lolzteam\Generated\Forum\Models\ConversationsGetResponse {
        $path = '/conversations/' . rawurlencode((string)$conversationId);
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ConversationsGetResponse::fromArray($response);
    }

    /**
     * Get Conversation Messages
     *
     * List of messages in a conversation (with pagination).
     * 
     * Required scopes:
     * + **read**
     * + **conversate**
     *
     * @endpoint GET /conversations/{conversation_id}/messages
     * @param int|null $conversationId Id of conversation.
     * @param int|null $page Page number of messages.
     * @param int|null $limit Number of messages in a page.
     * @param string|null $order Ordering of messages.
     * @param int|null $before Date to get older messages.
     * @param int|null $after Date to get newer messages.
     * @return \Lolzteam\Generated\Forum\Models\ConversationsMessagesListResponse
     */
    public function messagesList(
        int $conversationId,
        int|null $page = null,
        int|null $limit = null,
        string|null $order = null,
        int|null $before = null,
        int|null $after = null,
    ): \Lolzteam\Generated\Forum\Models\ConversationsMessagesListResponse {
        $path = '/conversations/' . rawurlencode((string)$conversationId) . '/messages';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($limit !== null) {
            $params['limit'] = $limit;
        }
        if ($order !== null) {
            $params['order'] = $order;
        }
        if ($before !== null) {
            $params['before'] = $before;
        }
        if ($after !== null) {
            $params['after'] = $after;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ConversationsMessagesListResponse::fromArray($response);
    }

    /**
     * Create Conversation Message
     *
     * Create a new conversation message.
     * 
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * @endpoint POST /conversations/{conversation_id}/messages
     * @param int|null $conversationId Id of conversation.
     * @param string|null $messageBody Content of the new message.
     * @param int|null $replyMessageId ID of the message being replied to.
     * @return \Lolzteam\Generated\Forum\Models\ConversationsMessagesCreateResponse
     */
    public function messagesCreate(
        int $conversationId,
        string|null $messageBody = null,
        int|null $replyMessageId = null,
    ): \Lolzteam\Generated\Forum\Models\ConversationsMessagesCreateResponse {
        $path = '/conversations/' . rawurlencode((string)$conversationId) . '/messages';
        $options = [];
        $json = [];
        if ($replyMessageId !== null) {
            $json['reply_message_id'] = $replyMessageId;
        }
        if ($messageBody !== null) {
            $json['message_body'] = $messageBody;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ConversationsMessagesCreateResponse::fromArray($response);
    }

    /**
     * Search Conversations Messages
     *
     * Search for conversations messages or recipients.
     * 
     * Required scopes:
     * + **read**
     * + **conversate**
     *
     * @endpoint POST /conversations/search
     * @param string|null $q Search query string.
     * @param int|null $conversationId Id of conversation.
     * @param bool|null $searchRecipients Search for recipients.
     * @return \Lolzteam\Generated\Forum\Models\ConversationsSearchResponse
     */
    public function search(
        string|null $q = null,
        int|null $conversationId = null,
        bool|null $searchRecipients = null,
    ): \Lolzteam\Generated\Forum\Models\ConversationsSearchResponse {
        $path = '/conversations/search';
        $options = [];
        $json = [];
        if ($q !== null) {
            $json['q'] = $q;
        }
        if ($conversationId !== null) {
            $json['conversation_id'] = $conversationId;
        }
        if ($searchRecipients !== null) {
            $json['search_recipients'] = $searchRecipients;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $options['isSearch'] = true;
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ConversationsSearchResponse::fromArray($response);
    }

    /**
     * Get Conversation Message
     *
     * Detail information of a message.
     * 
     * Required scopes:
     * + **read**
     * + **conversate**
     *
     * @endpoint GET /conversations/messages/{message_id}
     * @param int|null $messageId Id of message.
     * @return \Lolzteam\Generated\Forum\Models\ConversationsMessagesGetResponse
     */
    public function messagesGet(
        int $messageId,
    ): \Lolzteam\Generated\Forum\Models\ConversationsMessagesGetResponse {
        $path = '/conversations/messages/' . rawurlencode((string)$messageId);
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ConversationsMessagesGetResponse::fromArray($response);
    }

    /**
     * Edit Conversation Message
     *
     * Edit a message.
     * 
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * @endpoint PUT /conversations/{conversation_id}/messages/{message_id}
     * @param int|null $conversationId Id of conversation.
     * @param int|null $messageId Id of message.
     * @param string|null $messageBody New content of the message.
     * @return \Lolzteam\Generated\Forum\Models\ConversationsMessagesEditResponse
     */
    public function messagesEdit(
        int $conversationId,
        int $messageId,
        string|null $messageBody = null,
    ): \Lolzteam\Generated\Forum\Models\ConversationsMessagesEditResponse {
        $path = '/conversations/' . rawurlencode((string)$conversationId) . '/messages/' . rawurlencode((string)$messageId);
        $options = [];
        $json = [];
        if ($messageBody !== null) {
            $json['message_body'] = $messageBody;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('PUT', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ConversationsMessagesEditResponse::fromArray($response);
    }

    /**
     * Delete Conversation Message
     *
     * Deletes a message from a conversation.
     * 
     * Required scopes:
     * + **conversate**
     *
     * @endpoint DELETE /conversations/{conversation_id}/messages/{message_id}
     * @param int|null $conversationId Id of conversation.
     * @param int|null $messageId Id of message.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function messagesDelete(
        int $conversationId,
        int $messageId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/conversations/' . rawurlencode((string)$conversationId) . '/messages/' . rawurlencode((string)$messageId);
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Invite Users to Conversation
     *
     * Invite one or more users to an existing conversation.
     * 
     * Required scopes:
     * + **conversate**
     * + **post**
     *
     * @endpoint POST /conversations/{conversation_id}/invite
     * @param int|null $conversationId Id of conversation.
     * @param array|null $recipients List of recipients username's.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function invite(
        int $conversationId,
        array|null $recipients = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/conversations/' . rawurlencode((string)$conversationId) . '/invite';
        $options = [];
        $json = [];
        if ($recipients !== null) {
            $json['recipients'] = $recipients;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Kick User from Conversation
     *
     * Kicks a user from a conversation.
     * 
     * Required scopes:
     * + **conversate**
     *
     * @endpoint POST /conversations/{conversation_id}/kick
     * @param int|null $conversationId Id of conversation.
     * @param int|null $userId Id of user to kick from conversation.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function kick(
        int $conversationId,
        int|null $userId = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/conversations/' . rawurlencode((string)$conversationId) . '/kick';
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
     * Read a Conversation
     *
     * Read a specific conversation.
     * 
     * Required scopes:
     * + **conversate**
     *
     * @endpoint POST /conversations/{conversation_id}/read
     * @param int|null $conversationId Id of conversation.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function read(
        int $conversationId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/conversations/' . rawurlencode((string)$conversationId) . '/read';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Read All Conversations
     *
     * Mark all conversations as read.
     * 
     * Required scopes:
     * + **read**
     * + **conversate**
     *
     * @endpoint POST /conversations/read-all
     * @return \Lolzteam\Generated\Forum\Models\ConversationsReadAllResponse
     */
    public function readAll(
    ): \Lolzteam\Generated\Forum\Models\ConversationsReadAllResponse {
        $path = '/conversations/read-all';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ConversationsReadAllResponse::fromArray($response);
    }

    /**
     * Stick Conversation Message
     *
     * Stick a message in a conversation.
     * 
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * @endpoint POST /conversations/{conversation_id}/messages/{message_id}/stick
     * @param int|null $conversationId Id of conversation.
     * @param int|null $messageId Id of message.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function messagesStick(
        int $conversationId,
        int $messageId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/conversations/' . rawurlencode((string)$conversationId) . '/messages/' . rawurlencode((string)$messageId) . '/stick';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Unstick Conversation Message
     *
     * Unstick a message in a conversation.
     * 
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * @endpoint DELETE /conversations/{conversation_id}/messages/{message_id}/stick
     * @param int|null $conversationId Id of conversation.
     * @param int|null $messageId Id of message.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function messagesUnstick(
        int $conversationId,
        int $messageId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/conversations/' . rawurlencode((string)$conversationId) . '/messages/' . rawurlencode((string)$messageId) . '/stick';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Star Conversation
     *
     * Star conversation.
     * 
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * @endpoint POST /conversations/{conversation_id}/star
     * @param int|null $conversationId Id of conversation.
     * @return \Lolzteam\Generated\Forum\Models\ConversationsStarResponse
     */
    public function star(
        int $conversationId,
    ): \Lolzteam\Generated\Forum\Models\ConversationsStarResponse {
        $path = '/conversations/' . rawurlencode((string)$conversationId) . '/star';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ConversationsStarResponse::fromArray($response);
    }

    /**
     * Unstar Conversation
     *
     * Unstar conversation.
     * 
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * @endpoint DELETE /conversations/{conversation_id}/star
     * @param int|null $conversationId Id of conversation.
     * @return \Lolzteam\Generated\Forum\Models\ConversationsUnstarResponse
     */
    public function unstar(
        int $conversationId,
    ): \Lolzteam\Generated\Forum\Models\ConversationsUnstarResponse {
        $path = '/conversations/' . rawurlencode((string)$conversationId) . '/star';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ConversationsUnstarResponse::fromArray($response);
    }

    /**
     * Enable Conversation Alerts
     *
     * Enable alerts for conversation.
     * 
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * @endpoint POST /conversations/{conversation_id}/alerts
     * @param int|null $conversationId Id of conversation.
     * @return \Lolzteam\Generated\Forum\Models\ConversationsAlertsEnableResponse
     */
    public function alertsEnable(
        int $conversationId,
    ): \Lolzteam\Generated\Forum\Models\ConversationsAlertsEnableResponse {
        $path = '/conversations/' . rawurlencode((string)$conversationId) . '/alerts';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ConversationsAlertsEnableResponse::fromArray($response);
    }

    /**
     * Disable Conversation Alerts
     *
     * Disable alerts for conversation.
     * 
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * @endpoint DELETE /conversations/{conversation_id}/alerts
     * @param int|null $conversationId Id of conversation.
     * @return \Lolzteam\Generated\Forum\Models\ConversationsAlertsDisableResponse
     */
    public function alertsDisable(
        int $conversationId,
    ): \Lolzteam\Generated\Forum\Models\ConversationsAlertsDisableResponse {
        $path = '/conversations/' . rawurlencode((string)$conversationId) . '/alerts';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ConversationsAlertsDisableResponse::fromArray($response);
    }
}
