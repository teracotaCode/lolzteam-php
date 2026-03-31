<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Generated\Forum\Models\ThreadsListResponse;
use Lolzteam\Generated\Forum\Models\ThreadsCreateResponse;
use Lolzteam\Generated\Forum\Models\ThreadsCreateContestResponse;
use Lolzteam\Generated\Forum\Models\ThreadsClaimResponse;
use Lolzteam\Generated\Forum\Models\ThreadsGetResponse;
use Lolzteam\Generated\Forum\Models\ThreadsEditResponse;
use Lolzteam\Generated\Forum\Models\SaveChangesResponse;
use Lolzteam\Generated\Forum\Models\ThreadsBumpResponse;
use Lolzteam\Generated\Forum\Models\ThreadsHideResponse;
use Lolzteam\Generated\Forum\Models\ThreadsFollowersResponse;
use Lolzteam\Generated\Forum\Models\ThreadsFollowedResponse;
use Lolzteam\Generated\Forum\Models\ThreadsNavigationResponse;
use Lolzteam\Generated\Forum\Models\ThreadsPollGetResponse;
use Lolzteam\Generated\Forum\Models\ThreadsUnreadResponse;
use Lolzteam\Generated\Forum\Models\ThreadsRecentResponse;

/**
 * Threads API group.
 */
class ThreadsApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Threads
     *
     * List of threads in a forum (with pagination).
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /threads
     * @param int|null $forumId Id of the containing forum.
     * @param string|null $tab Tab to get threads from.
     * @param string|null $state Thread state. Works only if **forum_id** is set.
     * @param string|null $period Filter to get only threads created within the selected period. Works only if **forum_id** is set.
     * @param string|null $title Thread title.
     * @param bool|null $titleOnly Search only in titles.
     * @param int|null $creatorUserId Filter to get only threads created by the specified user.
     * @param bool|null $sticky Filter to get only sticky or non-sticky threads. By default, all threads will be included and sticky ones will be at the top of the result on the first page. In mixed mode, sticky threads are not counted towards **threads_total** and does not affect pagination.
     * @param array|null $prefixIds Filter to get only threads with the specified prefix.
     * @param array|null $prefixIdsNot Filter to get only threads without the specified prefix.
     * @param int|null $threadTagId Filter to get only threads with the specified tag.
     * @param int|null $page Page number of threads.
     * @param int|null $limit Number of threads in a page.
     * @param string|null $order Ordering of threads.
     * @param string|null $direction Direction of threads ordering.
     * @param int|null $threadCreateDate Filter threads by creation date. Only works with 'thread_create_date' and 'thread_create_date_reverse' ordering.
     * @param int|null $threadUpdateDate Filter threads by update date. Only works with 'thread_update_date' and 'thread_update_date_reverse' ordering.
     * @param array|null $fieldsInclude List of fields to include.
     * @return \Lolzteam\Generated\Forum\Models\ThreadsListResponse
     */
    public function list(
        int|null $forumId = null,
        string|null $tab = null,
        string|null $state = null,
        string|null $period = null,
        string|null $title = null,
        bool|null $titleOnly = null,
        int|null $creatorUserId = null,
        bool|null $sticky = null,
        array|null $prefixIds = null,
        array|null $prefixIdsNot = null,
        int|null $threadTagId = null,
        int|null $page = null,
        int|null $limit = null,
        string|null $order = null,
        string|null $direction = null,
        int|null $threadCreateDate = null,
        int|null $threadUpdateDate = null,
        array|null $fieldsInclude = null,
    ): \Lolzteam\Generated\Forum\Models\ThreadsListResponse {
        $path = '/threads';
        $options = [];
        $params = [];
        if ($forumId !== null) {
            $params['forum_id'] = $forumId;
        }
        if ($tab !== null) {
            $params['tab'] = $tab;
        }
        if ($state !== null) {
            $params['state'] = $state;
        }
        if ($period !== null) {
            $params['period'] = $period;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($titleOnly !== null) {
            $params['title_only'] = $titleOnly;
        }
        if ($creatorUserId !== null) {
            $params['creator_user_id'] = $creatorUserId;
        }
        if ($sticky !== null) {
            $params['sticky'] = $sticky;
        }
        if ($prefixIds !== null) {
            $params['prefix_ids[]'] = $prefixIds;
        }
        if ($prefixIdsNot !== null) {
            $params['prefix_ids_not[]'] = $prefixIdsNot;
        }
        if ($threadTagId !== null) {
            $params['thread_tag_id'] = $threadTagId;
        }
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($limit !== null) {
            $params['limit'] = $limit;
        }
        if ($order !== null) {
            $params['order'] = $order;
        }
        if ($direction !== null) {
            $params['direction'] = $direction;
        }
        if ($threadCreateDate !== null) {
            $params['thread_create_date'] = $threadCreateDate;
        }
        if ($threadUpdateDate !== null) {
            $params['thread_update_date'] = $threadUpdateDate;
        }
        if ($fieldsInclude !== null) {
            $params['fields_include'] = $fieldsInclude;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ThreadsListResponse::fromArray($response);
    }

    /**
     * Create Thread
     *
     * Create a new thread.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /threads
     * @param string|null $postBody Content of the new thread.
     * @param int|null $forumId Id of the target forum.
     * @param string|null $title Thread title. Can be skipped if **title_en** set.
     * @param string|null $titleEn Thread english title. Can be skipped if **title** set.
     * @param array|null $prefixId Prefix ids.
     * @param array|null $tags Thread tags.
     * @param bool|null $hideContacts Hide contacts.
     * @param bool|null $allowAskHiddenContent Allow ask hidden content.
     * @param int|null $replyGroup Allow to reply only users with chosen or higher group.
     * @param bool|null $commentIgnoreGroup Allow commenting if user can't post in thread.
     * @param bool|null $dontAlertFollowers Don't alert followers about thread creation.
     * @param string|null $scheduleDate Date to schedule thread creation (format: `DD-MM-YYYY`).
     * @param string|null $scheduleTime Time to schedule thread creation (format: `HH:MM`).
     * @param bool|null $watchThreadState Watch thread state.
     * @param bool|null $watchThread Receive forum notifications of new posts in this thread.
     * @param bool|null $watchThreadEmail Receive email notifications of new posts in this thread.
     * @return \Lolzteam\Generated\Forum\Models\ThreadsCreateResponse
     */
    public function create(
        string|null $postBody = null,
        int|null $forumId = null,
        string|null $title = null,
        string|null $titleEn = null,
        array|null $prefixId = null,
        array|null $tags = null,
        bool|null $hideContacts = null,
        bool|null $allowAskHiddenContent = null,
        int|null $replyGroup = null,
        bool|null $commentIgnoreGroup = null,
        bool|null $dontAlertFollowers = null,
        string|null $scheduleDate = null,
        string|null $scheduleTime = null,
        bool|null $watchThreadState = null,
        bool|null $watchThread = null,
        bool|null $watchThreadEmail = null,
    ): \Lolzteam\Generated\Forum\Models\ThreadsCreateResponse {
        $path = '/threads';
        $options = [];
        $json = [];
        if ($postBody !== null) {
            $json['post_body'] = $postBody;
        }
        if ($forumId !== null) {
            $json['forum_id'] = $forumId;
        }
        if ($title !== null) {
            $json['title'] = $title;
        }
        if ($titleEn !== null) {
            $json['title_en'] = $titleEn;
        }
        if ($prefixId !== null) {
            $json['prefix_id'] = $prefixId;
        }
        if ($tags !== null) {
            $json['tags'] = $tags;
        }
        if ($hideContacts !== null) {
            $json['hide_contacts'] = $hideContacts;
        }
        if ($allowAskHiddenContent !== null) {
            $json['allow_ask_hidden_content'] = $allowAskHiddenContent;
        }
        if ($replyGroup !== null) {
            $json['reply_group'] = $replyGroup;
        }
        if ($commentIgnoreGroup !== null) {
            $json['comment_ignore_group'] = $commentIgnoreGroup;
        }
        if ($dontAlertFollowers !== null) {
            $json['dont_alert_followers'] = $dontAlertFollowers;
        }
        if ($scheduleDate !== null) {
            $json['schedule_date'] = $scheduleDate;
        }
        if ($scheduleTime !== null) {
            $json['schedule_time'] = $scheduleTime;
        }
        if ($watchThreadState !== null) {
            $json['watch_thread_state'] = $watchThreadState;
        }
        if ($watchThread !== null) {
            $json['watch_thread'] = $watchThread;
        }
        if ($watchThreadEmail !== null) {
            $json['watch_thread_email'] = $watchThreadEmail;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ThreadsCreateResponse::fromArray($response);
    }

    /**
     * Create Contest
     *
     * Create a new contest.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /contests
     * @param string|null $postBody Content of the new contest.
     * @param string|null $contestType Contest type.
     * @param string|null $prizeType Prize type.
     * @param int|null $requireLikeCount Sympathies for this week.
     * @param int|null $requireTotalLikeCount Sympathies for all time.
     * @param string|null $title Thread title. Can be skipped if **title_en** set.
     * @param string|null $titleEn Thread english title. Can be skipped if **title** set.
     * @param int|null $lengthValue Giveaway duration value. The maximum duration is 3 days. Required if **contest_type** is **by_finish_date**.
     * @param string|null $lengthOption Giveaway duration type. The maximum duration is 3 days. Required if **contest_type** is **by_finish_date**.
     * @param int|null $countWinners Winner count (prize count). Optional if **prize_type** is **money**.
     * @param float|null $prizeDataMoney How much money will each winner receive. Optional if **prize_type** is **money**.
     * @param bool|null $isMoneyPlaces Enable the distribution of money prizes by places. Optional if **prize_type** is **money**.
     * @param array|null $prizeDataPlaces How much money will receive each place. Required if **is_money_places** is **1**.
     * @param int|null $prizeDataUpgrade Which upgrade will each winner receive. Required if **prize_type** is **upgrades**.
     * @param string|null $secretAnswer Secret answer of your account.
     * @param array|null $tags Thread tags.
     * @param int|null $replyGroup Allow to reply only users with chosen or higher group.
     * @param bool|null $commentIgnoreGroup Allow commenting if user can't post in thread.
     * @param bool|null $dontAlertFollowers Don't alert followers about thread creation.
     * @param bool|null $hideContacts Hide contacts.
     * @param bool|null $allowAskHiddenContent Allow ask hidden content.
     * @param string|null $scheduleDate Date to schedule thread creation (format: `DD-MM-YYYY`).
     * @param string|null $scheduleTime Time to schedule thread creation (format: `HH:MM`).
     * @param bool|null $watchThreadState Watch thread state.
     * @param bool|null $watchThread Receive forum notifications of new posts in this thread.
     * @param bool|null $watchThreadEmail Receive email notifications of new posts in this thread.
     * @return \Lolzteam\Generated\Forum\Models\ThreadsCreateContestResponse
     */
    public function createContest(
        string|null $postBody = null,
        string|null $contestType = null,
        string|null $prizeType = null,
        int|null $requireLikeCount = null,
        int|null $requireTotalLikeCount = null,
        string|null $title = null,
        string|null $titleEn = null,
        int|null $lengthValue = null,
        string|null $lengthOption = null,
        int|null $countWinners = null,
        float|null $prizeDataMoney = null,
        bool|null $isMoneyPlaces = null,
        array|null $prizeDataPlaces = null,
        int|null $prizeDataUpgrade = null,
        string|null $secretAnswer = null,
        array|null $tags = null,
        int|null $replyGroup = null,
        bool|null $commentIgnoreGroup = null,
        bool|null $dontAlertFollowers = null,
        bool|null $hideContacts = null,
        bool|null $allowAskHiddenContent = null,
        string|null $scheduleDate = null,
        string|null $scheduleTime = null,
        bool|null $watchThreadState = null,
        bool|null $watchThread = null,
        bool|null $watchThreadEmail = null,
    ): \Lolzteam\Generated\Forum\Models\ThreadsCreateContestResponse {
        $path = '/contests';
        $options = [];
        $json = [];
        if ($postBody !== null) {
            $json['post_body'] = $postBody;
        }
        if ($title !== null) {
            $json['title'] = $title;
        }
        if ($titleEn !== null) {
            $json['title_en'] = $titleEn;
        }
        if ($contestType !== null) {
            $json['contest_type'] = $contestType;
        }
        if ($lengthValue !== null) {
            $json['length_value'] = $lengthValue;
        }
        if ($lengthOption !== null) {
            $json['length_option'] = $lengthOption;
        }
        if ($prizeType !== null) {
            $json['prize_type'] = $prizeType;
        }
        if ($countWinners !== null) {
            $json['count_winners'] = $countWinners;
        }
        if ($prizeDataMoney !== null) {
            $json['prize_data_money'] = $prizeDataMoney;
        }
        if ($isMoneyPlaces !== null) {
            $json['is_money_places'] = $isMoneyPlaces;
        }
        if ($prizeDataPlaces !== null) {
            $json['prize_data_places'] = $prizeDataPlaces;
        }
        if ($prizeDataUpgrade !== null) {
            $json['prize_data_upgrade'] = $prizeDataUpgrade;
        }
        if ($requireLikeCount !== null) {
            $json['require_like_count'] = $requireLikeCount;
        }
        if ($requireTotalLikeCount !== null) {
            $json['require_total_like_count'] = $requireTotalLikeCount;
        }
        if ($secretAnswer !== null) {
            $json['secret_answer'] = $secretAnswer;
        }
        if ($tags !== null) {
            $json['tags'] = $tags;
        }
        if ($replyGroup !== null) {
            $json['reply_group'] = $replyGroup;
        }
        if ($commentIgnoreGroup !== null) {
            $json['comment_ignore_group'] = $commentIgnoreGroup;
        }
        if ($dontAlertFollowers !== null) {
            $json['dont_alert_followers'] = $dontAlertFollowers;
        }
        if ($hideContacts !== null) {
            $json['hide_contacts'] = $hideContacts;
        }
        if ($allowAskHiddenContent !== null) {
            $json['allow_ask_hidden_content'] = $allowAskHiddenContent;
        }
        if ($scheduleDate !== null) {
            $json['schedule_date'] = $scheduleDate;
        }
        if ($scheduleTime !== null) {
            $json['schedule_time'] = $scheduleTime;
        }
        if ($watchThreadState !== null) {
            $json['watch_thread_state'] = $watchThreadState;
        }
        if ($watchThread !== null) {
            $json['watch_thread'] = $watchThread;
        }
        if ($watchThreadEmail !== null) {
            $json['watch_thread_email'] = $watchThreadEmail;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ThreadsCreateContestResponse::fromArray($response);
    }

    /**
     * Create Claim
     *
     * Create a Claim.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /claims
     * @param string|null $asResponder To whom the complaint is filed. Specify a nickname or a link to the profile.
     * @param bool|null $asIsMarketDeal Did you buy account on the market?
     * @param float|null $asAmount Indicate the amount by which the responder deceived you.
     * @param string|null $transferType The transaction took place through a guarantor or there was a transfer to the market with a hold? Required if **as_is_market_deal** is 0.
     * @param string|null $postBody You should describe what's happened. - describe the situation in a nutshell. If you wish, you can describe the situation in more detail using the "Spoiler" function. - attach screenshots of correspondence. You may upload to the site [Imgur](https://imgur.com/upload) - for convenience, use Ctrl + V when uploading screenshots to the album. - other evidence; - notify the respondent about the complaint you created, familiarize him with hidden content  Describe the situation in as much detail as possible.
     * @param int|null $asMarketItemId Market item id. Required if **as_is_market_deal** is 1.
     * @param string|null $asData Contacts and wallets of the responder. Specify the known data about the responder, if any. Optional if **as_is_market_deal** is 0.
     * @param string|null $currency Currency of Claim.
     * @param string|null $payClaim Pay claim fee now or later. (Only for **transfer_type** = **notsafe**)
     * @param string|null $asFundsReceipt Funds transfer receipt. Upload a receipt for the transfer of funds, use the "View receipt" button in your wallet. May be uploaded to [Imgur](https://imgur.com/upload). Write "no" if you have not paid. Required if **as_is_market_deal** is 0.
     * @param string|null $asTgLoginScreenshot Screenshot showing the respondent's Telegram login. If the correspondence was conducted in Telegram, upload a screenshot that will display the respondent's Telegram login against the background of your dialogue. The screenshot may be uploaded to [Imgur](https://imgur.com/upload). If the correspondence was conducted elsewhere, write "no".
     * @param array|null $tags Thread tags.
     * @param bool|null $hideContacts Hide contacts.
     * @param bool|null $allowAskHiddenContent Allow ask hidden content.
     * @param int|null $replyGroup Allow to reply only users with chosen or higher group.
     * @param bool|null $commentIgnoreGroup Allow commenting if user can't post in thread.
     * @param bool|null $dontAlertFollowers Don't alert followers about thread creation.
     * @param string|null $scheduleDate Date to schedule thread creation (format: `DD-MM-YYYY`).
     * @param string|null $scheduleTime Time to schedule thread creation (format: `HH:MM`).
     * @param bool|null $watchThreadState Watch thread state.
     * @param bool|null $watchThread Receive forum notifications of new posts in this thread.
     * @param bool|null $watchThreadEmail Receive email notifications of new posts in this thread.
     * @return \Lolzteam\Generated\Forum\Models\ThreadsClaimResponse
     */
    public function claim(
        string|null $asResponder = null,
        bool|null $asIsMarketDeal = null,
        float|null $asAmount = null,
        string|null $transferType = null,
        string|null $postBody = null,
        int|null $asMarketItemId = null,
        string|null $asData = null,
        string|null $currency = null,
        string|null $payClaim = null,
        string|null $asFundsReceipt = null,
        string|null $asTgLoginScreenshot = null,
        array|null $tags = null,
        bool|null $hideContacts = null,
        bool|null $allowAskHiddenContent = null,
        int|null $replyGroup = null,
        bool|null $commentIgnoreGroup = null,
        bool|null $dontAlertFollowers = null,
        string|null $scheduleDate = null,
        string|null $scheduleTime = null,
        bool|null $watchThreadState = null,
        bool|null $watchThread = null,
        bool|null $watchThreadEmail = null,
    ): \Lolzteam\Generated\Forum\Models\ThreadsClaimResponse {
        $path = '/claims';
        $options = [];
        $json = [];
        if ($asResponder !== null) {
            $json['as_responder'] = $asResponder;
        }
        if ($asIsMarketDeal !== null) {
            $json['as_is_market_deal'] = $asIsMarketDeal;
        }
        if ($asMarketItemId !== null) {
            $json['as_market_item_id'] = $asMarketItemId;
        }
        if ($asData !== null) {
            $json['as_data'] = $asData;
        }
        if ($asAmount !== null) {
            $json['as_amount'] = $asAmount;
        }
        if ($currency !== null) {
            $json['currency'] = $currency;
        }
        if ($transferType !== null) {
            $json['transfer_type'] = $transferType;
        }
        if ($payClaim !== null) {
            $json['pay_claim'] = $payClaim;
        }
        if ($asFundsReceipt !== null) {
            $json['as_funds_receipt'] = $asFundsReceipt;
        }
        if ($asTgLoginScreenshot !== null) {
            $json['as_tg_login_screenshot'] = $asTgLoginScreenshot;
        }
        if ($tags !== null) {
            $json['tags'] = $tags;
        }
        if ($hideContacts !== null) {
            $json['hide_contacts'] = $hideContacts;
        }
        if ($allowAskHiddenContent !== null) {
            $json['allow_ask_hidden_content'] = $allowAskHiddenContent;
        }
        if ($replyGroup !== null) {
            $json['reply_group'] = $replyGroup;
        }
        if ($commentIgnoreGroup !== null) {
            $json['comment_ignore_group'] = $commentIgnoreGroup;
        }
        if ($dontAlertFollowers !== null) {
            $json['dont_alert_followers'] = $dontAlertFollowers;
        }
        if ($scheduleDate !== null) {
            $json['schedule_date'] = $scheduleDate;
        }
        if ($scheduleTime !== null) {
            $json['schedule_time'] = $scheduleTime;
        }
        if ($watchThreadState !== null) {
            $json['watch_thread_state'] = $watchThreadState;
        }
        if ($watchThread !== null) {
            $json['watch_thread'] = $watchThread;
        }
        if ($watchThreadEmail !== null) {
            $json['watch_thread_email'] = $watchThreadEmail;
        }
        if ($postBody !== null) {
            $json['post_body'] = $postBody;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ThreadsClaimResponse::fromArray($response);
    }

    /**
     * Get Thread
     *
     * Detail information of a thread.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /threads/{thread_id}
     * @param int|null $threadId Id of thread.
     * @param array|null $fieldsInclude List of fields to include.
     * @return \Lolzteam\Generated\Forum\Models\ThreadsGetResponse
     */
    public function get(
        int $threadId,
        array|null $fieldsInclude = null,
    ): \Lolzteam\Generated\Forum\Models\ThreadsGetResponse {
        $path = '/threads/' . rawurlencode((string)$threadId);
        $options = [];
        $params = [];
        if ($fieldsInclude !== null) {
            $params['fields_include'] = $fieldsInclude;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ThreadsGetResponse::fromArray($response);
    }

    /**
     * Edit thread
     *
     * Edit a thread.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint PUT /threads/{thread_id}
     * @param int|null $threadId Id of thread.
     * @param string|null $title Thread title.
     * @param string|null $titleEn Thread title english.
     * @param array|null $prefixId Prefix ids. Set "0" to remove all thread prefixes.
     * @param array|null $tags Thread tags.
     * @param bool|null $discussionOpen Discussion state.
     * @param bool|null $hideContacts Hide contacts.
     * @param bool|null $allowAskHiddenContent Allow ask hidden content.
     * @param int|null $replyGroup Allow to reply only users with chosen or higher group.
     * @param bool|null $commentIgnoreGroup Allow commenting if user can't post in thread.
     * @return \Lolzteam\Generated\Forum\Models\ThreadsEditResponse
     */
    public function edit(
        int $threadId,
        string|null $title = null,
        string|null $titleEn = null,
        array|null $prefixId = null,
        array|null $tags = null,
        bool|null $discussionOpen = null,
        bool|null $hideContacts = null,
        bool|null $allowAskHiddenContent = null,
        int|null $replyGroup = null,
        bool|null $commentIgnoreGroup = null,
    ): \Lolzteam\Generated\Forum\Models\ThreadsEditResponse {
        $path = '/threads/' . rawurlencode((string)$threadId);
        $options = [];
        $json = [];
        if ($title !== null) {
            $json['title'] = $title;
        }
        if ($titleEn !== null) {
            $json['title_en'] = $titleEn;
        }
        if ($prefixId !== null) {
            $json['prefix_id'] = $prefixId;
        }
        if ($tags !== null) {
            $json['tags'] = $tags;
        }
        if ($discussionOpen !== null) {
            $json['discussion_open'] = $discussionOpen;
        }
        if ($hideContacts !== null) {
            $json['hide_contacts'] = $hideContacts;
        }
        if ($allowAskHiddenContent !== null) {
            $json['allow_ask_hidden_content'] = $allowAskHiddenContent;
        }
        if ($replyGroup !== null) {
            $json['reply_group'] = $replyGroup;
        }
        if ($commentIgnoreGroup !== null) {
            $json['comment_ignore_group'] = $commentIgnoreGroup;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('PUT', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ThreadsEditResponse::fromArray($response);
    }

    /**
     * Delete Thread
     *
     * Delete a thread.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint DELETE /threads/{thread_id}
     * @param int|null $threadId Id of thread.
     * @param string|null $reason Reason of the thread removal.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function delete(
        int $threadId,
        string|null $reason = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/threads/' . rawurlencode((string)$threadId);
        $options = [];
        $json = [];
        if ($reason !== null) {
            $json['reason'] = $reason;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Move Thread
     *
     * Move a thread to another forum.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /threads/{thread_id}/move
     * @param int|null $threadId Id of thread.
     * @param string|null $nodeId Forum id.
     * @param string|null $title Thread title.
     * @param string|null $titleEn Thread title english.
     * @param array|null $prefixId Prefix ids. Set "0" to remove all thread prefixes.
     * @param bool|null $applyThreadPrefix Apply thread prefix.
     * @param bool|null $sendAlert Send a notification to users who are followed to target node.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function move(
        int $threadId,
        string|null $nodeId = null,
        string|null $title = null,
        string|null $titleEn = null,
        array|null $prefixId = null,
        bool|null $applyThreadPrefix = null,
        bool|null $sendAlert = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/threads/' . rawurlencode((string)$threadId) . '/move';
        $options = [];
        $json = [];
        if ($nodeId !== null) {
            $json['node_id'] = $nodeId;
        }
        if ($title !== null) {
            $json['title'] = $title;
        }
        if ($titleEn !== null) {
            $json['title_en'] = $titleEn;
        }
        if ($prefixId !== null) {
            $json['prefix_id'] = $prefixId;
        }
        if ($applyThreadPrefix !== null) {
            $json['apply_thread_prefix'] = $applyThreadPrefix;
        }
        if ($sendAlert !== null) {
            $json['send_alert'] = $sendAlert;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Bump Thread
     *
     * Bump a thread.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /threads/{thread_id}/bump
     * @param int|null $threadId Id of thread.
     * @return \Lolzteam\Generated\Forum\Models\ThreadsBumpResponse
     */
    public function bump(
        int $threadId,
    ): \Lolzteam\Generated\Forum\Models\ThreadsBumpResponse {
        $path = '/threads/' . rawurlencode((string)$threadId) . '/bump';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ThreadsBumpResponse::fromArray($response);
    }

    /**
     * Hide Thread
     *
     * Hide a thread from your feed.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /threads/{thread_id}/hide
     * @param int|null $threadId Id of thread.
     * @return \Lolzteam\Generated\Forum\Models\ThreadsHideResponse
     */
    public function hide(
        int $threadId,
    ): \Lolzteam\Generated\Forum\Models\ThreadsHideResponse {
        $path = '/threads/' . rawurlencode((string)$threadId) . '/hide';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ThreadsHideResponse::fromArray($response);
    }

    /**
     * Bookmark Thread
     *
     * Bookmark a thread.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /threads/{thread_id}/star
     * @param int|null $threadId Id of thread.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function star(
        int $threadId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/threads/' . rawurlencode((string)$threadId) . '/star';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Unbookmark Thread
     *
     * Unbookmark a thread.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint DELETE /threads/{thread_id}/star
     * @param int|null $threadId Id of thread.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function unstar(
        int $threadId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/threads/' . rawurlencode((string)$threadId) . '/star';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Thread Followers
     *
     * List of a thread's followers. For privacy reason, only the current user will be included in the list.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /threads/{thread_id}/followers
     * @param int|null $threadId Id of thread.
     * @return \Lolzteam\Generated\Forum\Models\ThreadsFollowersResponse
     */
    public function followers(
        int $threadId,
    ): \Lolzteam\Generated\Forum\Models\ThreadsFollowersResponse {
        $path = '/threads/' . rawurlencode((string)$threadId) . '/followers';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ThreadsFollowersResponse::fromArray($response);
    }

    /**
     * Follow Thread
     *
     * Follow a thread.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /threads/{thread_id}/followers
     * @param int|null $threadId Id of thread.
     * @param bool|null $email Whether to receive notification as email.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function follow(
        int $threadId,
        bool|null $email = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/threads/' . rawurlencode((string)$threadId) . '/followers';
        $options = [];
        $json = [];
        if ($email !== null) {
            $json['email'] = $email;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Unfollow Thread
     *
     * Unfollow a thread.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint DELETE /threads/{thread_id}/followers
     * @param int|null $threadId Id of thread.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function unfollow(
        int $threadId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/threads/' . rawurlencode((string)$threadId) . '/followers';
        $options = [];
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Followed Threads
     *
     * List of followed threads by current user.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /threads/followed
     * @param bool|null $total If included in the request, only the thread count is returned as **threads_total**.
     * @param array|null $fieldsInclude List of fields to include.
     * @return \Lolzteam\Generated\Forum\Models\ThreadsFollowedResponse
     */
    public function followed(
        bool|null $total = null,
        array|null $fieldsInclude = null,
    ): \Lolzteam\Generated\Forum\Models\ThreadsFollowedResponse {
        $path = '/threads/followed';
        $options = [];
        $params = [];
        if ($total !== null) {
            $params['total'] = $total;
        }
        if ($fieldsInclude !== null) {
            $params['fields_include'] = $fieldsInclude;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ThreadsFollowedResponse::fromArray($response);
    }

    /**
     * Get Navigation Elements
     *
     * List of navigation elements to reach the specified thread.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /threads/{thread_id}/navigation
     * @param int|null $threadId Id of thread.
     * @return \Lolzteam\Generated\Forum\Models\ThreadsNavigationResponse
     */
    public function navigation(
        int $threadId,
    ): \Lolzteam\Generated\Forum\Models\ThreadsNavigationResponse {
        $path = '/threads/' . rawurlencode((string)$threadId) . '/navigation';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ThreadsNavigationResponse::fromArray($response);
    }

    /**
     * Get Poll
     *
     * Detail information of a poll.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /threads/{thread_id}/poll
     * @param int|null $threadId Id of thread.
     * @return \Lolzteam\Generated\Forum\Models\ThreadsPollGetResponse
     */
    public function pollGet(
        int $threadId,
    ): \Lolzteam\Generated\Forum\Models\ThreadsPollGetResponse {
        $path = '/threads/' . rawurlencode((string)$threadId) . '/poll';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ThreadsPollGetResponse::fromArray($response);
    }

    /**
     * Vote Poll
     *
     * Vote on a thread poll.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /threads/{thread_id}/poll/votes
     * @param int|null $threadId Id of thread.
     * @param int|null $responseId The id of the response to vote for. Can be skipped if **response_ids** set.
     * @param array|null $responseIds An array of ids of responses (if the poll allows multiple choices).
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function pollVote(
        int $threadId,
        int|null $responseId = null,
        array|null $responseIds = null,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/threads/' . rawurlencode((string)$threadId) . '/poll/votes';
        $options = [];
        $json = [];
        if ($responseId !== null) {
            $json['response_id'] = $responseId;
        }
        if ($responseIds !== null) {
            $json['response_ids'] = $responseIds;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Unread Threads
     *
     * List of unread threads (must be logged in).
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /threads/new
     * @param int|null $limit Maximum number of result threads. The limit may get decreased if the value is too large (depending on the system configuration).
     * @param int|null $forumId Id of the container forum to search for threads. Child forums of the specified forum will be included in the search.
     * @param int|null $dataLimit Number of thread data to be returned. Default value is 20.
     * @return \Lolzteam\Generated\Forum\Models\ThreadsUnreadResponse
     */
    public function unread(
        int|null $limit = null,
        int|null $forumId = null,
        int|null $dataLimit = null,
    ): \Lolzteam\Generated\Forum\Models\ThreadsUnreadResponse {
        $path = '/threads/new';
        $options = [];
        $params = [];
        if ($limit !== null) {
            $params['limit'] = $limit;
        }
        if ($forumId !== null) {
            $params['forum_id'] = $forumId;
        }
        if ($dataLimit !== null) {
            $params['data_limit'] = $dataLimit;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ThreadsUnreadResponse::fromArray($response);
    }

    /**
     * Get Recent Threads
     *
     * List of recent threads.
     * 
     * Required scopes:
     * + **read**
     *
     * @endpoint GET /threads/recent
     * @param int|null $days Maximum number of days to search for threads.
     * @param int|null $limit Maximum number of result threads. The limit may get decreased if the value is too large.
     * @param int|null $forumId Id of the container forum to search for threads. Child forums of the specified forum will be included in the search.
     * @param int|null $dataLimit Number of thread data to be returned. Default value is 20.
     * @return \Lolzteam\Generated\Forum\Models\ThreadsRecentResponse
     */
    public function recent(
        int|null $days = null,
        int|null $limit = null,
        int|null $forumId = null,
        int|null $dataLimit = null,
    ): \Lolzteam\Generated\Forum\Models\ThreadsRecentResponse {
        $path = '/threads/recent';
        $options = [];
        $params = [];
        if ($days !== null) {
            $params['days'] = $days;
        }
        if ($limit !== null) {
            $params['limit'] = $limit;
        }
        if ($forumId !== null) {
            $params['forum_id'] = $forumId;
        }
        if ($dataLimit !== null) {
            $params['data_limit'] = $dataLimit;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Forum\Models\ThreadsRecentResponse::fromArray($response);
    }

    /**
     * Finish Contest
     *
     * Finishes a contest.
     * 
     * Required scopes:
     * + **post**
     *
     * @endpoint POST /contests/{thread_id}/finish
     * @param int|null $threadId Id of thread.
     * @return \Lolzteam\Generated\Forum\Models\SaveChangesResponse
     */
    public function finish(
        int $threadId,
    ): \Lolzteam\Generated\Forum\Models\SaveChangesResponse {
        $path = '/contests/' . rawurlencode((string)$threadId) . '/finish';
        $options = [];
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Forum\Models\SaveChangesResponse::fromArray($response);
    }
}
