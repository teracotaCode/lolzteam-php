<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Generated\Market\Models\BatchResponse;

/**
 * Batch requests API group.
 */
class BatchRequestsApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Batch
     *
     * Execute multiple API requests at once (separated by comma). Maximum batch jobs is 10.
     * Following methods are unavailable in Batch:
     * - GET /{item_id}/image
     * - /item/fast-sell
     *
     * @endpoint POST /batch
     * @param array $jobs Array of batch job objects with keys: id (string, optional), uri (string, required), method (string, optional), params (array, optional).
     * @return \Lolzteam\Generated\Market\Models\BatchResponse
     */
    public function batch(
        array $jobs,
    ): \Lolzteam\Generated\Market\Models\BatchResponse {
        $path = '/batch';
        $options = [];
        $options['json'] = $jobs;
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\BatchResponse::fromArray($response);
    }
}
