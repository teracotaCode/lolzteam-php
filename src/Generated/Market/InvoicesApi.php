<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Generated\Market\Models\PaymentsInvoiceGetResponse;
use Lolzteam\Generated\Market\Models\PaymentsInvoiceCreateResponse;
use Lolzteam\Generated\Market\Models\PaymentsInvoiceListResponse;

/**
 * Invoices API group.
 */
class InvoicesApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Invoice
     *
     * Get invoice.
     * 
     * Required scopes:
     * + **invoice**
     *
     * @endpoint GET /invoice
     * @param int|null $invoiceId Invoice ID.
     * @param string|null $paymentId Payment ID.
     * @return \Lolzteam\Generated\Market\Models\PaymentsInvoiceGetResponse
     */
    public function invoiceGet(
        int|null $invoiceId = null,
        string|null $paymentId = null,
    ): \Lolzteam\Generated\Market\Models\PaymentsInvoiceGetResponse {
        $path = '/invoice';
        $options = [];
        $params = [];
        if ($invoiceId !== null) {
            $params['invoice_id'] = $invoiceId;
        }
        if ($paymentId !== null) {
            $params['payment_id'] = $paymentId;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\PaymentsInvoiceGetResponse::fromArray($response);
    }

    /**
     * Create Invoice
     *
     * Create invoice.
     * 
     * Required scopes:
     * + **invoice**
     *
     * @endpoint POST /invoice
     * @param string|null $currency Currency
     * @param float|null $amount Invoice amount.
     * @param string|null $paymentId Payment ID in your system (must be unique within the merchant / invoices).
     * @param string|null $comment Comment to the invoice.
     * @param string|null $urlSuccess URL to redirect to after successful payment.
     * @param int|null $merchantId Merchant ID.
     * @param string|null $urlCallback Callback url.
     * @param int|null $requiredTelegramId Telegram User ID for which the invoice was created.
     * @param string|null $requiredTelegramUsername Telegram Username (including @) for which the invoice was created (if any).
     * @param float|null $lifetime Invoice lifetime.
     * @param string|null $additionalData Additional information for you.
     * @param bool|null $isTest Create a test invoice.
     * @return \Lolzteam\Generated\Market\Models\PaymentsInvoiceCreateResponse
     */
    public function invoiceCreate(
        string|null $currency = null,
        float|null $amount = null,
        string|null $paymentId = null,
        string|null $comment = null,
        string|null $urlSuccess = null,
        int|null $merchantId = null,
        string|null $urlCallback = null,
        int|null $requiredTelegramId = null,
        string|null $requiredTelegramUsername = null,
        float|null $lifetime = null,
        string|null $additionalData = null,
        bool|null $isTest = null,
    ): \Lolzteam\Generated\Market\Models\PaymentsInvoiceCreateResponse {
        $path = '/invoice';
        $options = [];
        $json = [];
        if ($currency !== null) {
            $json['currency'] = $currency;
        }
        if ($amount !== null) {
            $json['amount'] = $amount;
        }
        if ($paymentId !== null) {
            $json['payment_id'] = $paymentId;
        }
        if ($comment !== null) {
            $json['comment'] = $comment;
        }
        if ($urlSuccess !== null) {
            $json['url_success'] = $urlSuccess;
        }
        if ($urlCallback !== null) {
            $json['url_callback'] = $urlCallback;
        }
        if ($merchantId !== null) {
            $json['merchant_id'] = $merchantId;
        }
        if ($requiredTelegramId !== null) {
            $json['required_telegram_id'] = $requiredTelegramId;
        }
        if ($requiredTelegramUsername !== null) {
            $json['required_telegram_username'] = $requiredTelegramUsername;
        }
        if ($lifetime !== null) {
            $json['lifetime'] = $lifetime;
        }
        if ($additionalData !== null) {
            $json['additional_data'] = $additionalData;
        }
        if ($isTest !== null) {
            $json['is_test'] = $isTest;
        }
        if (!empty($json)) {
            $options['json'] = $json;
        }
        $response = $this->httpClient->request('POST', $path, $options);
        return \Lolzteam\Generated\Market\Models\PaymentsInvoiceCreateResponse::fromArray($response);
    }

    /**
     * Get Invoice List
     *
     * Get invoice list.
     * 
     * Required scopes:
     * + **invoice**
     *
     * @endpoint GET /invoice/list
     * @param int|null $page The number of the page to display results from.
     * @param string|null $currency Currency of the created invoice.
     * @param string|null $status Status of the invoice.
     * @param float|null $amount Invoice amount.
     * @param int|null $merchantId Merchant ID.
     * @return \Lolzteam\Generated\Market\Models\PaymentsInvoiceListResponse
     */
    public function invoiceList(
        int|null $page = null,
        string|null $currency = null,
        string|null $status = null,
        float|null $amount = null,
        int|null $merchantId = null,
    ): \Lolzteam\Generated\Market\Models\PaymentsInvoiceListResponse {
        $path = '/invoice/list';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($status !== null) {
            $params['status'] = $status;
        }
        if ($amount !== null) {
            $params['amount'] = $amount;
        }
        if ($merchantId !== null) {
            $params['merchant_id'] = $merchantId;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\PaymentsInvoiceListResponse::fromArray($response);
    }
}
