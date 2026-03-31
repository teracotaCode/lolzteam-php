<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Generated\Market\Models\ProxyGetResponse;
use Lolzteam\Generated\Market\Models\SaveChangesResponse;

/**
 * Proxy API group.
 */
class ProxyApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Proxy
     *
     * Gets your proxy list.
     *
     * @endpoint GET /proxy
     * @return \Lolzteam\Generated\Market\Models\ProxyGetResponse
     */
    public function get(
    ): \Lolzteam\Generated\Market\Models\ProxyGetResponse {
        $path = '/proxy';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\ProxyGetResponse::fromArray($response);
    }

    /**
     * Add Proxy
     *
     * Add single proxy or proxy list.
     * 
     * 
     * To add single proxy use this parameters:
     * 
     * 
     * + **proxy_ip** (required) - proxy ip or host
     * + **proxy_port** (required) - proxy port
     * + **proxy_user** (optional) - proxy username
     * + **proxy_pass** (optional) - proxy password
     * 
     * To add proxy list use this parameters:
     * 
     * 
     * + **proxy_row** (required) - proxy list in String format ip:port:user:pass. Each proxy must be start with new line (use \n separator)
     *
     * @endpoint POST /proxy
     * @param string|null $proxyIp Proxy ip or host. Required if **proxy_row** is not specified.
     * @param int|null $proxyPort Proxy port. Required if **proxy_row** is not specified.
     * @param string|null $proxyUser Proxy username. Required if **proxy_row** is not specified.
     * @param string|null $proxyPass Proxy password. Required if **proxy_row** is not specified.
     * @param string|null $proxyRow Proxy list in String format ip:port:user:pass. Each proxy must be start with new line (use \r\n separator)
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function add(
        string|null $proxyIp = null,
        int|null $proxyPort = null,
        string|null $proxyUser = null,
        string|null $proxyPass = null,
        string|null $proxyRow = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/proxy';
        $options = [];
        $json = [];
        if ($proxyIp !== null) {
            $json['proxy_ip'] = $proxyIp;
        }
        if ($proxyPort !== null) {
            $json['proxy_port'] = $proxyPort;
        }
        if ($proxyUser !== null) {
            $json['proxy_user'] = $proxyUser;
        }
        if ($proxyPass !== null) {
            $json['proxy_pass'] = $proxyPass;
        }
        if ($proxyRow !== null) {
            $json['proxy_row'] = $proxyRow;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Delete Proxy
     *
     * Delete single or all proxies.
     *
     * @endpoint DELETE /proxy
     * @param int|null $proxyId Id of an existing proxy.
     * @param bool|null $deleteAll Delete all proxies.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function delete(
        int|null $proxyId = null,
        bool|null $deleteAll = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/proxy';
        $options = [];
        $json = [];
        if ($proxyId !== null) {
            $json['proxy_id'] = $proxyId;
        }
        if ($deleteAll !== null) {
            $json['delete_all'] = $deleteAll;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }
}
