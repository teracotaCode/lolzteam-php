<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\FormsListResponse;
use Lolzteam\Generated\Forum\Models\FormsCreateResponse;

/**
 * Forms API group.
 */
class FormsApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Forms List
     *
     * @endpoint GET /forms
     * @param int|null $page Page number of forms.
     * @return \Lolzteam\Generated\Forum\Models\FormsListResponse
     */
    public function list(
        int|null $page = null,
    ): \Lolzteam\Generated\Forum\Models\FormsListResponse {
        $path = '/forms';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\FormsListResponse::fromArray($response);
    }

    /**
     * Create Form
     *
     * Create Form.
     *
     * @endpoint POST /forms/save
     * @param int|null $formId Form ID
     * @param array|null $fields 
     * @return \Lolzteam\Generated\Forum\Models\FormsCreateResponse
     */
    public function create(
        int|null $formId = null,
        array|null $fields = null,
    ): \Lolzteam\Generated\Forum\Models\FormsCreateResponse {
        $path = '/forms/save';
        $options = [];
        $json = [];
        if ($formId !== null) {
            $json['form_id'] = $formId;
        }
        if ($fields !== null) {
            $json['fields'] = $fields;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\FormsCreateResponse::fromArray($response);
    }
}
