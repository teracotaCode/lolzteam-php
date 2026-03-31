<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\UsersListResponse;
use Lolzteam\Generated\Forum\Models\UsersFieldsResponse;
use Lolzteam\Generated\Forum\Models\UsersFindResponse;
use Lolzteam\Generated\Forum\Models\UsersGetResponse;
use Lolzteam\Generated\Forum\Models\SaveChangesResponse;
use Lolzteam\Generated\Forum\Models\UsersClaimsResponse;
use Lolzteam\Generated\Forum\Models\UsersAvatarUploadResponse;
use Lolzteam\Generated\Forum\Models\UsersAvatarCropResponse;
use Lolzteam\Generated\Forum\Models\UsersBackgroundUploadResponse;
use Lolzteam\Generated\Forum\Models\UsersBackgroundCropResponse;
use Lolzteam\Generated\Forum\Models\UsersFollowersResponse;
use Lolzteam\Generated\Forum\Models\UsersFollowingsResponse;
use Lolzteam\Generated\Forum\Models\UsersLikesResponse;
use Lolzteam\Generated\Forum\Models\UsersIgnoredResponse;
use Lolzteam\Generated\Forum\Models\UsersContentsResponse;
use Lolzteam\Generated\Forum\Models\UsersTrophiesResponse;
use Lolzteam\Generated\Forum\Models\UsersSecretAnswerTypesResponse;
use Lolzteam\Generated\Forum\Models\UsersSAResetResponse;

/**
 * Users API group.
 */
class UsersApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Users
     *
     * List of users (with pagination).
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /users
     * @param int|null $page Page number of users.
     * @param int|null $limit Number of users in a page.
     * @param array|null $fieldsInclude List of fields to include.
     * @return \Lolzteam\Generated\Forum\Models\UsersListResponse
     */
    public function list(
        int|null $page = null,
        int|null $limit = null,
        array|null $fieldsInclude = null,
    ): \Lolzteam\Generated\Forum\Models\UsersListResponse {
        $path = '/users';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($limit !== null) {
            $params['limit'] = $limit;
        }
        if ($fieldsInclude !== null) {
            $params['fields_include'] = $fieldsInclude;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\UsersListResponse::fromArray($response);
    }

    /**
     * Get User Fields
     *
     * List of user fields.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /users/fields
     * @return \Lolzteam\Generated\Forum\Models\UsersFieldsResponse
     */
    public function fields(
    ): \Lolzteam\Generated\Forum\Models\UsersFieldsResponse {
        $path = '/users/fields';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\UsersFieldsResponse::fromArray($response);
    }

    /**
     * Find Users
     *
     * List of users filtered by username, email or custom fields.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /users/find
     * @param string|null $username Username to filter. Usernames start with the query will be returned.
     * @param array|null $customFields Custom fields to filter. Example: **custom_fields[telegram]=telegramLogin**.
     * @param array|null $fieldsInclude List of fields to include.
     * @return \Lolzteam\Generated\Forum\Models\UsersFindResponse
     */
    public function find(
        string|null $username = null,
        array|null $customFields = null,
        array|null $fieldsInclude = null,
    ): \Lolzteam\Generated\Forum\Models\UsersFindResponse {
        $path = '/users/find';
        $options = [];
        $params = [];
        if ($username !== null) {
            $params['username'] = $username;
        }
        if ($customFields !== null) {
            foreach ($customFields as $k => $v) {
                $params['custom_fields[' . $k . ']'] = $v;
            }
        }
        if ($fieldsInclude !== null) {
            $params['fields_include'] = $fieldsInclude;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\UsersFindResponse::fromArray($response);
    }

    /**
     * Get User
     *
     * Detail information of a user.
     * 
     * Required scopes:
     * + **read**
     * + **basic**
     *
     * @endpoint GET /users/{user_id}
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @param array|null $fieldsInclude List of fields to include.
     * @return \Lolzteam\Generated\Forum\Models\UsersGetResponse
     */
    public function get(
        string|int $userId,
        array|null $fieldsInclude = null,
    ): \Lolzteam\Generated\Forum\Models\UsersGetResponse {
        $path = '/users/' . rawurlencode((string)$userId);
        $options = [];
        $params = [];
        if ($fieldsInclude !== null) {
            $params['fields_include'] = $fieldsInclude;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\UsersGetResponse::fromArray($response);
    }

    /**
     * Edit User
     *
     * Edit a user.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint PUT /users/{user_id}
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @param string|null $username New username.
     * @param string|null $userTitle New custom title of the user.
     * @param int|null $displayGroupId Id of the group you want to display.
     * @param int|null $displayIconGroupId Id of the icon group you want to display.
     * @param int|null $displayBannerId Id of the banner you want to display.
     * @param string|null $convWelcomeMessage This message is shown when someone wants to write to you.
     * @param int|null $userDobDay Your date of birth (day).
     * @param int|null $userDobMonth Your date of birth (month).
     * @param int|null $userDobYear Your date of birth (year).
     * @param string|null $secretAnswer Secret answer.
     * @param int|null $secretAnswerType Secret answer type.
     * @param string|null $shortLink Profile short link.
     * @param int|null $languageId User interface language ID.
     * @param string|null $gender User gender.
     * @param string|null $timezone User timezone.
     * @param bool|null $receiveAdminEmail Whether to receive admin emails.
     * @param bool|null $activityVisible Whether user activity is visible.
     * @param bool|null $showDobDate Show date of birth (day and month).
     * @param bool|null $showDobYear Show year of birth.
     * @param bool|null $hideUsernameChangeLogs Hide username change logs.
     * @param string|null $allowViewProfile Who can view your profile.
     * @param string|null $allowPostProfile Who can post on your profile.
     * @param string|null $allowSendPersonalConversation Who can send you personal conversations.
     * @param string|null $allowInviteGroup Who can invite you to groups.
     * @param string|null $allowReceiveNewsFeed Who can see your news feed.
     * @param array|null $alert Alert settings.
     * @param array|null $fields Custom user profile fields.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function edit(
        string|int $userId,
        string|null $username = null,
        string|null $userTitle = null,
        int|null $displayGroupId = null,
        int|null $displayIconGroupId = null,
        int|null $displayBannerId = null,
        string|null $convWelcomeMessage = null,
        int|null $userDobDay = null,
        int|null $userDobMonth = null,
        int|null $userDobYear = null,
        string|null $secretAnswer = null,
        int|null $secretAnswerType = null,
        string|null $shortLink = null,
        int|null $languageId = null,
        string|null $gender = null,
        string|null $timezone = null,
        bool|null $receiveAdminEmail = null,
        bool|null $activityVisible = null,
        bool|null $showDobDate = null,
        bool|null $showDobYear = null,
        bool|null $hideUsernameChangeLogs = null,
        string|null $allowViewProfile = null,
        string|null $allowPostProfile = null,
        string|null $allowSendPersonalConversation = null,
        string|null $allowInviteGroup = null,
        string|null $allowReceiveNewsFeed = null,
        array|null $alert = null,
        array|null $fields = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/users/' . rawurlencode((string)$userId);
        $options = [];
        $json = [];
        if ($username !== null) {
            $json['username'] = $username;
        }
        if ($userTitle !== null) {
            $json['user_title'] = $userTitle;
        }
        if ($displayGroupId !== null) {
            $json['display_group_id'] = $displayGroupId;
        }
        if ($displayIconGroupId !== null) {
            $json['display_icon_group_id'] = $displayIconGroupId;
        }
        if ($displayBannerId !== null) {
            $json['display_banner_id'] = $displayBannerId;
        }
        if ($convWelcomeMessage !== null) {
            $json['conv_welcome_message'] = $convWelcomeMessage;
        }
        if ($userDobDay !== null) {
            $json['user_dob_day'] = $userDobDay;
        }
        if ($userDobMonth !== null) {
            $json['user_dob_month'] = $userDobMonth;
        }
        if ($userDobYear !== null) {
            $json['user_dob_year'] = $userDobYear;
        }
        if ($secretAnswer !== null) {
            $json['secret_answer'] = $secretAnswer;
        }
        if ($secretAnswerType !== null) {
            $json['secret_answer_type'] = $secretAnswerType;
        }
        if ($shortLink !== null) {
            $json['short_link'] = $shortLink;
        }
        if ($languageId !== null) {
            $json['language_id'] = $languageId;
        }
        if ($gender !== null) {
            $json['gender'] = $gender;
        }
        if ($timezone !== null) {
            $json['timezone'] = $timezone;
        }
        if ($receiveAdminEmail !== null) {
            $json['receive_admin_email'] = $receiveAdminEmail;
        }
        if ($activityVisible !== null) {
            $json['activity_visible'] = $activityVisible;
        }
        if ($showDobDate !== null) {
            $json['show_dob_date'] = $showDobDate;
        }
        if ($showDobYear !== null) {
            $json['show_dob_year'] = $showDobYear;
        }
        if ($hideUsernameChangeLogs !== null) {
            $json['hide_username_change_logs'] = $hideUsernameChangeLogs;
        }
        if ($allowViewProfile !== null) {
            $json['allow_view_profile'] = $allowViewProfile;
        }
        if ($allowPostProfile !== null) {
            $json['allow_post_profile'] = $allowPostProfile;
        }
        if ($allowSendPersonalConversation !== null) {
            $json['allow_send_personal_conversation'] = $allowSendPersonalConversation;
        }
        if ($allowInviteGroup !== null) {
            $json['allow_invite_group'] = $allowInviteGroup;
        }
        if ($allowReceiveNewsFeed !== null) {
            $json['allow_receive_news_feed'] = $allowReceiveNewsFeed;
        }
        if ($alert !== null) {
            $json['alert'] = $alert;
        }
        if ($fields !== null) {
            $json['fields'] = $fields;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('PUT', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get User Claims
     *
     * Get user claims.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /users/{user_id}/claims
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @param string|null $type Filter claims by their type.
     * @param string|null $claimState Filter claims by their state.
     * @return \Lolzteam\Generated\Forum\Models\UsersClaimsResponse
     */
    public function claims(
        string|int $userId,
        string|null $type = null,
        string|null $claimState = null,
    ): \Lolzteam\Generated\Forum\Models\UsersClaimsResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/claims';
        $options = [];
        $params = [];
        if ($type !== null) {
            $params['type'] = $type;
        }
        if ($claimState !== null) {
            $params['claim_state'] = $claimState;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\UsersClaimsResponse::fromArray($response);
    }

    /**
     * Upload Avatar
     *
     * Upload avatar for a user.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /users/{user_id}/avatar
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @param string|null $avatar Binary data of the avatar.
     * @param int|null $x The starting point of the selection by width. Default value - 0
     * @param int|null $y The starting point of the selection by height. Default value - 0
     * @param int|null $crop Selection size.
     * @return \Lolzteam\Generated\Forum\Models\UsersAvatarUploadResponse
     */
    public function avatarUpload(
        string|int $userId,
        string|null $avatar = null,
        int|null $x = null,
        int|null $y = null,
        int|null $crop = null,
    ): \Lolzteam\Generated\Forum\Models\UsersAvatarUploadResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/avatar';
        $options = [];
        $multipart = [];
        if ($avatar !== null) {
            $multipart['avatar'] = $avatar;
        }
        if ($x !== null) {
            $multipart['x'] = $x;
        }
        if ($y !== null) {
            $multipart['y'] = $y;
        }
        if ($crop !== null) {
            $multipart['crop'] = $crop;
        }
        if (!empty($multipart)) {
            $options['multipart'] = $multipart;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\UsersAvatarUploadResponse::fromArray($response);
    }

    /**
     * Delete Avatar
     *
     * Delete avatar for a user.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint DELETE /users/{user_id}/avatar
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function avatarDelete(
        string|int $userId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/avatar';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Crop Avatar
     *
     * Crop avatar for a user.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /users/{user_id}/avatar/crop
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @param int|null $x The starting point of the selection by width. Default value - 0
     * @param int|null $y The starting point of the selection by height. Default value - 0
     * @param int|null $crop Selection size.
     * @return \Lolzteam\Generated\Forum\Models\UsersAvatarCropResponse
     */
    public function avatarCrop(
        string|int $userId,
        int|null $x = null,
        int|null $y = null,
        int|null $crop = null,
    ): \Lolzteam\Generated\Forum\Models\UsersAvatarCropResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/avatar/crop';
        $options = [];
        $json = [];
        if ($x !== null) {
            $json['x'] = $x;
        }
        if ($y !== null) {
            $json['y'] = $y;
        }
        if ($crop !== null) {
            $json['crop'] = $crop;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\UsersAvatarCropResponse::fromArray($response);
    }

    /**
     * Upload Background
     *
     * Upload background for a user.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /users/{user_id}/background
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @param string|null $background Binary data of the background. Background image must be 1920x1080 pixels
     * @param int|null $x The starting point of the selection by width. Default value - 0
     * @param int|null $y The starting point of the selection by height. Default value - 0
     * @param int|null $crop Selection size.
     * @return \Lolzteam\Generated\Forum\Models\UsersBackgroundUploadResponse
     */
    public function backgroundUpload(
        string|int $userId,
        string|null $background = null,
        int|null $x = null,
        int|null $y = null,
        int|null $crop = null,
    ): \Lolzteam\Generated\Forum\Models\UsersBackgroundUploadResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/background';
        $options = [];
        $multipart = [];
        if ($background !== null) {
            $multipart['background'] = $background;
        }
        if ($x !== null) {
            $multipart['x'] = $x;
        }
        if ($y !== null) {
            $multipart['y'] = $y;
        }
        if ($crop !== null) {
            $multipart['crop'] = $crop;
        }
        if (!empty($multipart)) {
            $options['multipart'] = $multipart;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\UsersBackgroundUploadResponse::fromArray($response);
    }

    /**
     * Delete Background
     *
     * Delete background for a user.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint DELETE /users/{user_id}/background
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function backgroundDelete(
        string|int $userId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/background';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Crop Background
     *
     * Crop background for a user.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /users/{user_id}/background/crop
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @param int|null $x The starting point of the selection by width. Default value - 0
     * @param int|null $y The starting point of the selection by height. Default value - 0
     * @param int|null $crop Selection size.
     * @return \Lolzteam\Generated\Forum\Models\UsersBackgroundCropResponse
     */
    public function backgroundCrop(
        string|int $userId,
        int|null $x = null,
        int|null $y = null,
        int|null $crop = null,
    ): \Lolzteam\Generated\Forum\Models\UsersBackgroundCropResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/background/crop';
        $options = [];
        $json = [];
        if ($x !== null) {
            $json['x'] = $x;
        }
        if ($y !== null) {
            $json['y'] = $y;
        }
        if ($crop !== null) {
            $json['crop'] = $crop;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\UsersBackgroundCropResponse::fromArray($response);
    }

    /**
     * Get User Followers
     *
     * List of a user's followers.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /users/{user_id}/followers
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @param string|null $order Ordering of followers.
     * @param int|null $page Page number of followers.
     * @param int|null $limit Number of followers in a page.
     * @return \Lolzteam\Generated\Forum\Models\UsersFollowersResponse
     */
    public function followers(
        string|int $userId,
        string|null $order = null,
        int|null $page = null,
        int|null $limit = null,
    ): \Lolzteam\Generated\Forum\Models\UsersFollowersResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/followers';
        $options = [];
        $params = [];
        if ($order !== null) {
            $params['order'] = $order;
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
        return \Lolzteam\Generated\Forum\Models\UsersFollowersResponse::fromArray($response);
    }

    /**
     * Follow User
     *
     * Follow a user.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /users/{user_id}/followers
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function follow(
        string|int $userId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/followers';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Unfollow User
     *
     * Unfollow a user.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint DELETE /users/{user_id}/followers
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function unfollow(
        string|int $userId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/followers';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Followed Users By User
     *
     * List of users whom are followed by a user.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /users/{user_id}/followings
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @param string|null $order Ordering of users.
     * @param int|null $page Page number of users.
     * @param int|null $limit Number of users in a page.
     * @return \Lolzteam\Generated\Forum\Models\UsersFollowingsResponse
     */
    public function followings(
        string|int $userId,
        string|null $order = null,
        int|null $page = null,
        int|null $limit = null,
    ): \Lolzteam\Generated\Forum\Models\UsersFollowingsResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/followings';
        $options = [];
        $params = [];
        if ($order !== null) {
            $params['order'] = $order;
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
        return \Lolzteam\Generated\Forum\Models\UsersFollowingsResponse::fromArray($response);
    }

    /**
     * Get User Likes
     *
     * Get information about user likes.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /users/{user_id}/likes
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @param int|null $nodeId Filter by forum section.
     * @param string|null $likeType Like type.
     * @param string|null $type Likes type.
     * @param int|null $page Page number.
     * @param string|null $contentType Content type.
     * @param int|null $searchUserId Get only likes from specified user.
     * @param bool|null $stats Show weekly statistics.
     * @return \Lolzteam\Generated\Forum\Models\UsersLikesResponse
     */
    public function likes(
        string|int $userId,
        int|null $nodeId = null,
        string|null $likeType = null,
        string|null $type = null,
        int|null $page = null,
        string|null $contentType = null,
        int|null $searchUserId = null,
        bool|null $stats = null,
    ): \Lolzteam\Generated\Forum\Models\UsersLikesResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/likes';
        $options = [];
        $params = [];
        if ($nodeId !== null) {
            $params['node_id'] = $nodeId;
        }
        if ($likeType !== null) {
            $params['like_type'] = $likeType;
        }
        if ($type !== null) {
            $params['type'] = $type;
        }
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($contentType !== null) {
            $params['content_type'] = $contentType;
        }
        if ($searchUserId !== null) {
            $params['search_user_id'] = $searchUserId;
        }
        if ($stats !== null) {
            $params['stats'] = $stats;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\UsersLikesResponse::fromArray($response);
    }

    /**
     * Get Ignored Users
     *
     * List of ignored users of current user.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /users/ignored
     * @param bool|null $total If included in the request, only the user count is returned as **users_total**.
     * @return \Lolzteam\Generated\Forum\Models\UsersIgnoredResponse
     */
    public function ignored(
        bool|null $total = null,
    ): \Lolzteam\Generated\Forum\Models\UsersIgnoredResponse {
        $path = '/users/ignored';
        $options = [];
        $params = [];
        if ($total !== null) {
            $params['total'] = $total;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\UsersIgnoredResponse::fromArray($response);
    }

    /**
     * Ignore User
     *
     * Ignore a user.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /users/{user_id}/ignore
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function ignore(
        string|int $userId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/ignore';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Edit Ignoring Options
     *
     * Edit ignoring options.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint PUT /users/{user_id}/ignore
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @param bool|null $ignoreConversations Ignore user's conversations.
     * @param bool|null $ignoreContent Ignore user's content.
     * @param bool|null $restrictViewProfile Restrict user from viewing your profile.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function ignoreEdit(
        string|int $userId,
        bool|null $ignoreConversations = null,
        bool|null $ignoreContent = null,
        bool|null $restrictViewProfile = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/ignore';
        $options = [];
        $params = [];
        if ($ignoreConversations !== null) {
            $params['ignore_conversations'] = $ignoreConversations;
        }
        if ($ignoreContent !== null) {
            $params['ignore_content'] = $ignoreContent;
        }
        if ($restrictViewProfile !== null) {
            $params['restrict_view_profile'] = $restrictViewProfile;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('PUT', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Unignore User
     *
     * Stop ignoring a user.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint DELETE /users/{user_id}/ignore
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function unignore(
        string|int $userId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/ignore';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Contents
     *
     * List of contents created by user (with pagination).
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /users/{user_id}/timeline
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @param int|null $page Page number of contents.
     * @param int|null $limit Number of contents in a page.
     * @return \Lolzteam\Generated\Forum\Models\UsersContentsResponse
     */
    public function contents(
        string|int $userId,
        int|null $page = null,
        int|null $limit = null,
    ): \Lolzteam\Generated\Forum\Models\UsersContentsResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/timeline';
        $options = [];
        $params = [];
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
        return \Lolzteam\Generated\Forum\Models\UsersContentsResponse::fromArray($response);
    }

    /**
     * Get Trophies
     *
     * List of user trophies.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /users/{user_id}/trophies
     * @param string|int|null $userId User ID. > You can use shortlink `me` to interact with your profile.
     * @return \Lolzteam\Generated\Forum\Models\UsersTrophiesResponse
     */
    public function trophies(
        string|int $userId,
    ): \Lolzteam\Generated\Forum\Models\UsersTrophiesResponse {
        $path = '/users/' . rawurlencode((string)$userId) . '/trophies';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\UsersTrophiesResponse::fromArray($response);
    }

    /**
     * Get Secret Answer Types
     *
     * Get available secret answer types for user account security.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /users/secret-answer/types
     * @return \Lolzteam\Generated\Forum\Models\UsersSecretAnswerTypesResponse
     */
    public function secretAnswerTypes(
    ): \Lolzteam\Generated\Forum\Models\UsersSecretAnswerTypesResponse {
        $path = '/users/secret-answer/types';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\UsersSecretAnswerTypesResponse::fromArray($response);
    }

    /**
     * Reset Secret Answer
     *
     * Request a reset of the secret answer for the account.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /account/secret-answer/reset
     * @return \Lolzteam\Generated\Forum\Models\UsersSAResetResponse
     */
    public function sAReset(
    ): \Lolzteam\Generated\Forum\Models\UsersSAResetResponse {
        $path = '/account/secret-answer/reset';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\UsersSAResetResponse::fromArray($response);
    }

    /**
     * Cancel Secret Answer Reset
     *
     * Cancel a pending secret answer reset request for the account.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint DELETE /account/secret-answer/reset
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function sACancelReset(
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/account/secret-answer/reset';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }
}
