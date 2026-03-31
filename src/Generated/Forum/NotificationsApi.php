<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\NotificationsListResponse;
use Lolzteam\Generated\Forum\Models\NotificationsGetResponse;
use Lolzteam\Generated\Forum\Models\SaveChangesResponse;

/**
 * Notifications API group.
 */
class NotificationsApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Notifications
     *
     * List of notifications (both read and unread).
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /notifications
     * @param string|null $type Filter notifications by their type.
     * @param int|null $page Page number of notifications.
     * @param int|null $limit Number of notifications in a page.
     * @return \Lolzteam\Generated\Forum\Models\NotificationsListResponse
     */
    public function list(
        string|null $type = null,
        int|null $page = null,
        int|null $limit = null,
    ): \Lolzteam\Generated\Forum\Models\NotificationsListResponse {
        $path = '/notifications';
        $options = [];
        $params = [];
        if ($type !== null) {
            $params['type'] = $type;
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
        return \Lolzteam\Generated\Forum\Models\NotificationsListResponse::fromArray($response);
    }

    /**
     * Get Notification
     *
     * Get associated content of notification. The response depends on the content type.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /notifications/{notification_id}/content
     * @param int|null $notificationId Id of notification.
     * @return \Lolzteam\Generated\Forum\Models\NotificationsGetResponse
     */
    public function get(
        int $notificationId,
    ): \Lolzteam\Generated\Forum\Models\NotificationsGetResponse {
        $path = '/notifications/' . rawurlencode((string)$notificationId) . '/content';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\NotificationsGetResponse::fromArray($response);
    }

    /**
     * Mark Notification Read
     *
     * Mark single notification or all existing notifications read.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /notifications/read
     * @param int|null $notificationId If notification_id is omitted, it's mark all existing notifications as read.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function read(
        int|null $notificationId = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/notifications/read';
        $options = [];
        $json = [];
        if ($notificationId !== null) {
            $json['notification_id'] = $notificationId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }
}
