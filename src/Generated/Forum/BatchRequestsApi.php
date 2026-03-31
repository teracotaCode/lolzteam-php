<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\BatchExecuteResponse;

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
     * Execute multiple API requests at once (Separated by comma). Maximum batch jobs is 10.
     * 
     * Required scopes:
     * + Same as called API requests.
     *
     * @endpoint POST /batch
     * @param array $jobs Array of batch job objects with keys: id (string, optional), uri (string, required), method (string, optional), params (array, optional).
     * @return \Lolzteam\Generated\Forum\Models\BatchExecuteResponse
     */
    public function execute(
        array $jobs,
    ): \Lolzteam\Generated\Forum\Models\BatchExecuteResponse {
        $path = '/batch';
        $options = [];
        $options['json'] = $jobs;
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\BatchExecuteResponse::fromArray($response);
    }
}
