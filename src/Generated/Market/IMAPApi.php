<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Generated\Market\Models\SaveChangesResponse;

/**
 * IMAP API group.
 */
class IMAPApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Create IMAP Configuration
     *
     * Create an IMAP configuration for a domain.
     *
     * @endpoint POST /imap
     * @param string|null $domain Domain to delete IMAP configuration for.
     * @param string|null $imapServer IMAP server address.
     * @param int|null $port IMAP server port.
     * @param bool|null $secure Whether to use a secure connection.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function create(
        string|null $domain = null,
        string|null $imapServer = null,
        int|null $port = null,
        bool|null $secure = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/imap';
        $options = [];
        $json = [];
        if ($domain !== null) {
            $json['domain'] = $domain;
        }
        if ($imapServer !== null) {
            $json['imap_server'] = $imapServer;
        }
        if ($port !== null) {
            $json['port'] = $port;
        }
        if ($secure !== null) {
            $json['secure'] = $secure;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Delete IMAP Configuration
     *
     * Delete an IMAP configuration for a domain.
     *
     * @endpoint DELETE /imap
     * @param string|null $domain Domain to delete IMAP configuration for.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function delete(
        string|null $domain = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/imap';
        $options = [];
        $json = [];
        if ($domain !== null) {
            $json['domain'] = $domain;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }
}
