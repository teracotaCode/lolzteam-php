<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\NavigationListResponse;

/**
 * Navigation API group.
 */
class NavigationApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Navigation
     *
     * List of navigation elements within the system.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /navigation
     * @param int|null $parent Id of parent element. If exists, filter elements that are direct children of that element.
     * @return \Lolzteam\Generated\Forum\Models\NavigationListResponse
     */
    public function list(
        int|null $parent = null,
    ): \Lolzteam\Generated\Forum\Models\NavigationListResponse {
        $path = '/navigation';
        $options = [];
        $params = [];
        if ($parent !== null) {
            $params['parent'] = $parent;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\NavigationListResponse::fromArray($response);
    }
}
