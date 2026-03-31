<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Generated\Market\Models\PaymentsCurrencyResponse;
use Lolzteam\Generated\Market\Models\SaveChangesResponse;
use Lolzteam\Generated\Market\Models\PaymentsFeeResponse;
use Lolzteam\Generated\Market\Models\PaymentsHistoryResponse;
use Lolzteam\Generated\Market\Models\AutoPaymentsListResponse;
use Lolzteam\Generated\Market\Models\AutoPaymentsCreateResponse;
use Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponse;

/**
 * Payments API group.
 */
class PaymentsApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Currency
     *
     * Get currency list.
     *
     * @endpoint GET /currency
     * @return \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponse
     */
    public function currency(
    ): \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponse {
        $path = '/currency';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\PaymentsCurrencyResponse::fromArray($response);
    }

    /**
     * Get List Of Balances
     *
     * Returns list of balances.
     *
     * @endpoint GET /balance/exchange
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function balanceList(
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/balance/exchange';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Exchange Balance
     *
     * Transfer funds from one balance to another.
     *
     * @endpoint POST /balance/exchange
     * @param string|null $fromBalance Source balance type
     * @param string|null $toBalance Target balance type
     * @param int|null $amount Amount to exchange
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function balanceExchange(
        string|null $fromBalance = null,
        string|null $toBalance = null,
        int|null $amount = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/balance/exchange';
        $options = [];
        $json = [];
        if ($fromBalance !== null) {
            $json['from_balance'] = $fromBalance;
        }
        if ($toBalance !== null) {
            $json['to_balance'] = $toBalance;
        }
        if ($amount !== null) {
            $json['amount'] = $amount;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Transfer Money
     *
     * Transfer money to any user.
     * 
     * Required scopes:
     * + **payment**
     *
     * @endpoint POST /balance/transfer
     * @param int|null $amount Amount to send in your currency.
     * @param string|null $currency Currency
     * @param int|null $userId User id of receiver. If **user_id** specified, **username** is not required.
     * @param string|null $username Username of receiver. If **username** specified, **user_id** is not required.
     * @param string|null $comment Transfer comment.
     * @param bool|null $telegramDeal Is the deal happening on Telegram? 
     * @param string|null $telegramUsername Telegram username of the user you are dialoguing with.
     * @param bool|null $transferHold Hold transfer or not.
     * @param int|null $holdLengthValue Hold length value.
     * @param string|null $holdLengthOption Hold length option.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function transfer(
        int|null $amount = null,
        string|null $currency = null,
        int|null $userId = null,
        string|null $username = null,
        string|null $comment = null,
        bool|null $telegramDeal = null,
        string|null $telegramUsername = null,
        bool|null $transferHold = null,
        int|null $holdLengthValue = null,
        string|null $holdLengthOption = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/balance/transfer';
        $options = [];
        $json = [];
        if ($userId !== null) {
            $json['user_id'] = $userId;
        }
        if ($username !== null) {
            $json['username'] = $username;
        }
        if ($amount !== null) {
            $json['amount'] = $amount;
        }
        if ($currency !== null) {
            $json['currency'] = $currency;
        }
        if ($comment !== null) {
            $json['comment'] = $comment;
        }
        if ($telegramDeal !== null) {
            $json['telegram_deal'] = $telegramDeal;
        }
        if ($telegramUsername !== null) {
            $json['telegram_username'] = $telegramUsername;
        }
        if ($transferHold !== null) {
            $json['transfer_hold'] = $transferHold;
        }
        if ($holdLengthValue !== null) {
            $json['hold_length_value'] = $holdLengthValue;
        }
        if ($holdLengthOption !== null) {
            $json['hold_length_option'] = $holdLengthOption;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Check Transfer Fee
     *
     * Get transfer limits and get fee amount for transfer.
     * 
     * Required scopes:
     * + **payment**
     *
     * @endpoint GET /balance/transfer/fee
     * @param float|null $amount Amount you want to send in your currency.
     * @return \Lolzteam\Generated\Market\Models\PaymentsFeeResponse
     */
    public function fee(
        float|null $amount = null,
    ): \Lolzteam\Generated\Market\Models\PaymentsFeeResponse {
        $path = '/balance/transfer/fee';
        $options = [];
        $params = [];
        if ($amount !== null) {
            $params['amount'] = $amount;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\PaymentsFeeResponse::fromArray($response);
    }

    /**
     * Cancel Transfer
     *
     * Cancels a transfer with a hold that was sent to your account.
     * 
     * Required scopes:
     * + **payment**
     *
     * @endpoint POST /balance/transfer/cancel
     * @param int|null $paymentId Payment id.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function cancel(
        int|null $paymentId = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/balance/transfer/cancel';
        $options = [];
        $json = [];
        if ($paymentId !== null) {
            $json['payment_id'] = $paymentId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Payments History
     *
     * Displays list of your payments.
     * 
     * Required scopes:
     * + **payment**
     *
     * @endpoint GET /user/payments
     * @param string|null $type Type of operation.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $currency Currency.
     * @param int|null $page The number of the page to display results from.
     * @param int|null $operationIdLt Id of the operation from which the result begins.
     * @param string|null $receiver Username of user, which receive money from you.
     * @param string|null $sender Username of user, which sent money to you.
     * @param bool|null $isApi Returns payments that are done via API.
     * @param string|null $startDate Start date of operation (RFC 3339 date format).
     * @param string|null $endDate End date of operation (RFC 3339 date format).
     * @param string|null $wallet Wallet, which used for money payouts.
     * @param string|null $comment Comment for money transfers.
     * @param bool|null $isHold Display hold operations.
     * @param bool|null $showPaymentStats Display payment stats for selected period (outgoing value, incoming value).
     * @return \Lolzteam\Generated\Market\Models\PaymentsHistoryResponse
     */
    public function history(
        string|null $type = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $currency = null,
        int|null $page = null,
        int|null $operationIdLt = null,
        string|null $receiver = null,
        string|null $sender = null,
        bool|null $isApi = null,
        string|null $startDate = null,
        string|null $endDate = null,
        string|null $wallet = null,
        string|null $comment = null,
        bool|null $isHold = null,
        bool|null $showPaymentStats = null,
    ): \Lolzteam\Generated\Market\Models\PaymentsHistoryResponse {
        $path = '/user/payments';
        $options = [];
        $params = [];
        if ($type !== null) {
            $params['type'] = $type;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($operationIdLt !== null) {
            $params['operation_id_lt'] = $operationIdLt;
        }
        if ($receiver !== null) {
            $params['receiver'] = $receiver;
        }
        if ($sender !== null) {
            $params['sender'] = $sender;
        }
        if ($isApi !== null) {
            $params['is_api'] = $isApi;
        }
        if ($startDate !== null) {
            $params['startDate'] = $startDate;
        }
        if ($endDate !== null) {
            $params['endDate'] = $endDate;
        }
        if ($wallet !== null) {
            $params['wallet'] = $wallet;
        }
        if ($comment !== null) {
            $params['comment'] = $comment;
        }
        if ($isHold !== null) {
            $params['is_hold'] = $isHold;
        }
        if ($showPaymentStats !== null) {
            $params['show_payment_stats'] = $showPaymentStats;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\PaymentsHistoryResponse::fromArray($response);
    }

    /**
     * Get Auto Payments
     *
     * Get auto payments list.
     * 
     * Required scopes:
     * + **payment**
     *
     * @endpoint GET /auto-payments
     * @return \Lolzteam\Generated\Market\Models\AutoPaymentsListResponse
     */
    public function list(
    ): \Lolzteam\Generated\Market\Models\AutoPaymentsListResponse {
        $path = '/auto-payments';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\AutoPaymentsListResponse::fromArray($response);
    }

    /**
     * Create Auto Payment
     *
     * Creates auto payment.
     * 
     * Required scopes:
     * + **payment**
     *
     * @endpoint POST /auto-payment
     * @param string|null $usernameReceiver Username of the payment receiver.
     * @param int|null $day Day of the month for the payment. (Use "0" for the last day of the month)
     * @param float|null $amount Amount to be transferred.
     * @param string|null $secretAnswer Secret answer.
     * @param string|null $currency Currency
     * @param string|null $description Payment description.
     * @return \Lolzteam\Generated\Market\Models\AutoPaymentsCreateResponse
     */
    public function create(
        string|null $usernameReceiver = null,
        int|null $day = null,
        float|null $amount = null,
        string|null $secretAnswer = null,
        string|null $currency = null,
        string|null $description = null,
    ): \Lolzteam\Generated\Market\Models\AutoPaymentsCreateResponse {
        $path = '/auto-payment';
        $options = [];
        $json = [];
        if ($secretAnswer !== null) {
            $json['secret_answer'] = $secretAnswer;
        }
        if ($usernameReceiver !== null) {
            $json['username_receiver'] = $usernameReceiver;
        }
        if ($day !== null) {
            $json['day'] = $day;
        }
        if ($amount !== null) {
            $json['amount'] = $amount;
        }
        if ($currency !== null) {
            $json['currency'] = $currency;
        }
        if ($description !== null) {
            $json['description'] = $description;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\AutoPaymentsCreateResponse::fromArray($response);
    }

    /**
     * Delete Auto Payment
     *
     * Deletes an auto payment.
     * 
     * Required scopes:
     * + **payment**
     *
     * @endpoint DELETE /auto-payment
     * @param int|null $autoPaymentId Auto payment ID.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function delete(
        int|null $autoPaymentId = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/auto-payment';
        $options = [];
        $json = [];
        if ($autoPaymentId !== null) {
            $json['auto_payment_id'] = $autoPaymentId;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('DELETE', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Get Payout Services
     *
     * Get a list of available payout services.
     *
     * @endpoint GET /balance/payout/services
     * @return \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponse
     */
    public function payoutServices(
    ): \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponse {
        $path = '/balance/payout/services';
        $options = [];
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\PaymentsPayoutServicesResponse::fromArray($response);
    }

    /**
     * Create Payout
     *
     * Creates a payout request.
     *
     * @endpoint POST /balance/payout
     * @param string|null $paymentSystem Payment System
     * @param string|null $wallet Wallet
     * @param float|null $amount Amount
     * @param string|null $currency Currency
     * @param bool|null $includeFee Include Fee
     * @param array|null $extra 
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function payout(
        string|null $paymentSystem = null,
        string|null $wallet = null,
        float|null $amount = null,
        string|null $currency = null,
        bool|null $includeFee = null,
        array|null $extra = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/balance/payout';
        $options = [];
        $json = [];
        if ($paymentSystem !== null) {
            $json['payment_system'] = $paymentSystem;
        }
        if ($wallet !== null) {
            $json['wallet'] = $wallet;
        }
        if ($amount !== null) {
            $json['amount'] = $amount;
        }
        if ($currency !== null) {
            $json['currency'] = $currency;
        }
        if ($includeFee !== null) {
            $json['include_fee'] = $includeFee;
        }
        if ($extra !== null) {
            $json['extra'] = $extra;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }
}
