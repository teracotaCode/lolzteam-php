<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\LinksListResponse;
use Lolzteam\Generated\Forum\Models\LinksGetResponse;

/**
 * Link Forums API group.
 */
class LinkForumsApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Links Forum
     *
     * List of all link forums.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /link-forums
     * @return \Lolzteam\Generated\Forum\Models\LinksListResponse
     */
    public function list(
    ): \Lolzteam\Generated\Forum\Models\LinksListResponse {
        $path = '/link-forums';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\LinksListResponse::fromArray($response);
    }

    /**
     * Get Link Forum
     *
     * Detail information of a link forum.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /link-forums/{link_id}
     * @param int|null $linkId Id of link forum.
     * @return \Lolzteam\Generated\Forum\Models\LinksGetResponse
     */
    public function get(
        int $linkId,
    ): \Lolzteam\Generated\Forum\Models\LinksGetResponse {
        $path = '/link-forums/' . rawurlencode((string)$linkId);
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\LinksGetResponse::fromArray($response);
    }
}
