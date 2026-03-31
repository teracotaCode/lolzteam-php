<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PaymentsInvoiceGetResponseInvoice implements JsonSerializable
{
    public function __construct(
        public readonly string|null $additionalData = null, // Additional
        public readonly int|null $amount = null, // Amount
        public readonly string|null $comment = null, // Comment
        public readonly int|null $expiresAt = null, // Expires
        public readonly int|null $invoiceDate = null, // Invoice
        public readonly int|null $invoiceId = null, // Invoice
        public readonly bool|null $isTest = null, // Is
        public readonly int|null $merchantId = null, // Merchant
        public readonly int|null $paidDate = null, // Paid
        public readonly int|null $payerUserId = null, // Payer
        public readonly string|null $paymentId = null, // Payment
        public readonly int|null $resendAttempts = null, // Resend
        public readonly string|null $status = null, // Status
        public readonly string|null $url = null, // Url
        public readonly string|null $urlCallback = null, // Url
        public readonly string|null $urlSuccess = null, // Url
        public readonly int|null $userId = null, // User
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            additionalData: $data['additional_data'] ?? null,
            amount: $data['amount'] ?? null,
            comment: $data['comment'] ?? null,
            expiresAt: $data['expires_at'] ?? null,
            invoiceDate: $data['invoice_date'] ?? null,
            invoiceId: $data['invoice_id'] ?? null,
            isTest: $data['is_test'] ?? null,
            merchantId: $data['merchant_id'] ?? null,
            paidDate: $data['paid_date'] ?? null,
            payerUserId: $data['payer_user_id'] ?? null,
            paymentId: $data['payment_id'] ?? null,
            resendAttempts: $data['resend_attempts'] ?? null,
            status: $data['status'] ?? null,
            url: $data['url'] ?? null,
            urlCallback: $data['url_callback'] ?? null,
            urlSuccess: $data['url_success'] ?? null,
            userId: $data['user_id'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'additional_data' => $this->additionalData,
            'amount' => $this->amount,
            'comment' => $this->comment,
            'expires_at' => $this->expiresAt,
            'invoice_date' => $this->invoiceDate,
            'invoice_id' => $this->invoiceId,
            'is_test' => $this->isTest,
            'merchant_id' => $this->merchantId,
            'paid_date' => $this->paidDate,
            'payer_user_id' => $this->payerUserId,
            'payment_id' => $this->paymentId,
            'resend_attempts' => $this->resendAttempts,
            'status' => $this->status,
            'url' => $this->url,
            'url_callback' => $this->urlCallback,
            'url_success' => $this->urlSuccess,
            'user_id' => $this->userId,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
