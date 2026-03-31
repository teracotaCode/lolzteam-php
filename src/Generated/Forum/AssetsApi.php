<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\AssetsCssResponse;

/**
 * Assets API group.
 */
class AssetsApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get CSS
     *
     * Gets css rulesets for requested selectors.
     *
     * @endpoint GET /css
     * @param array|null $css The names or identifiers of the CSS selectors to retrieve.
     * @return \Lolzteam\Generated\Forum\Models\AssetsCssResponse
     */
    public function css(
        array|null $css = null,
    ): \Lolzteam\Generated\Forum\Models\AssetsCssResponse {
        $path = '/css';
        $options = [];
        $params = [];
        if ($css !== null) {
            $params['css'] = $css;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\AssetsCssResponse::fromArray($response);
    }
}
