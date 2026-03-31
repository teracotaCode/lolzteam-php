<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\OAuthTokenResponse;

/**
 * Authentication API group.
 */
class AuthenticationApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Access Token
     *
     * Obtain an access token using various grant types.
     * 
     * Supports the following grant types:
     * - Client Credentials
     * - Authorization Code
     * - Refresh Token
     * - Password
     *
     * @endpoint POST /oauth/token
     * @param string|null $grantType Grant type.
     * @param string|null $clientId Client ID.
     * @param string|null $clientSecret Client secret.
     * @param array|null $scope Scope.
     * @param string|null $code Authorization code.
     * @param string|null $redirectUri Redirect URI.
     * @param string|null $refreshToken Refresh token.
     * @param string|null $username Account username/email.
     * @param string|null $password Account password.
     * @return \Lolzteam\Generated\Forum\Models\OAuthTokenResponse
     */
    public function token(
        string|null $grantType = null,
        string|null $clientId = null,
        string|null $clientSecret = null,
        array|null $scope = null,
        string|null $code = null,
        string|null $redirectUri = null,
        string|null $refreshToken = null,
        string|null $username = null,
        string|null $password = null,
    ): \Lolzteam\Generated\Forum\Models\OAuthTokenResponse {
        $path = '/oauth/token';
        $options = [];
        $multipart = [];
        if ($grantType !== null) {
            $multipart['grant_type'] = $grantType;
        }
        if ($clientId !== null) {
            $multipart['client_id'] = $clientId;
        }
        if ($clientSecret !== null) {
            $multipart['client_secret'] = $clientSecret;
        }
        if ($scope !== null) {
            $multipart['scope'] = $scope;
        }
        if ($code !== null) {
            $multipart['code'] = $code;
        }
        if ($redirectUri !== null) {
            $multipart['redirect_uri'] = $redirectUri;
        }
        if ($refreshToken !== null) {
            $multipart['refresh_token'] = $refreshToken;
        }
        if ($username !== null) {
            $multipart['username'] = $username;
        }
        if ($password !== null) {
            $multipart['password'] = $password;
        }
        if (!empty($multipart)) {
            $options['multipart'] = $multipart;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\OAuthTokenResponse::fromArray($response);
    }
}
