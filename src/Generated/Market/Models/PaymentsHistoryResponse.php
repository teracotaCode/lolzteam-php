<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class PaymentsHistoryResponse implements JsonSerializable
{
    public function __construct(
        public readonly mixed $payments = null, // Payments
        public readonly string|null $perPage = null, // Per Page
        public readonly int|null $page = null, // Page
        public readonly string|null $pageNavLink = null, // Page Nav Link
        public readonly \Lolzteam\Generated\Market\Models\PaymentsHistoryResponsePageNavParams|null $pageNavParams = null, // Page Nav Params
        public readonly string|null $periodLabel = null, // Period Label
        public readonly string|null $periodLabelPhrase = null, // Period Label Phrase
        public readonly bool|null $filterDatesDefault = null, // Filter Dates Default
        public readonly \Lolzteam\Generated\Market\Models\PaymentsHistoryResponseInput|null $input = null, // Input
        public readonly mixed $paymentStats = null, // Payment Stats
        public readonly bool|null $hasNextPage = null, // Has Next Page
        public readonly int|null $lastOperationId = null, // Last Operation Id
        public readonly string|null $nextPageHref = null, // Next Page Href
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            payments: $data['payments'] ?? null,
            perPage: $data['perPage'] ?? null,
            page: $data['page'] ?? null,
            pageNavLink: $data['pageNavLink'] ?? null,
            pageNavParams: isset($data['pageNavParams']) && is_array($data['pageNavParams']) && !empty($data['pageNavParams']) ? \Lolzteam\Generated\Market\Models\PaymentsHistoryResponsePageNavParams::fromArray($data['pageNavParams']) : null,
            periodLabel: $data['periodLabel'] ?? null,
            periodLabelPhrase: $data['periodLabelPhrase'] ?? null,
            filterDatesDefault: $data['filterDatesDefault'] ?? null,
            input: isset($data['input']) && is_array($data['input']) && !empty($data['input']) ? \Lolzteam\Generated\Market\Models\PaymentsHistoryResponseInput::fromArray($data['input']) : null,
            paymentStats: $data['paymentStats'] ?? null,
            hasNextPage: $data['hasNextPage'] ?? null,
            lastOperationId: $data['lastOperationId'] ?? null,
            nextPageHref: $data['nextPageHref'] ?? null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'payments' => $this->payments,
            'perPage' => $this->perPage,
            'page' => $this->page,
            'pageNavLink' => $this->pageNavLink,
            'pageNavParams' => $this->pageNavParams?->toArray(),
            'periodLabel' => $this->periodLabel,
            'periodLabelPhrase' => $this->periodLabelPhrase,
            'filterDatesDefault' => $this->filterDatesDefault,
            'input' => $this->input?->toArray(),
            'paymentStats' => $this->paymentStats,
            'hasNextPage' => $this->hasNextPage,
            'lastOperationId' => $this->lastOperationId,
            'nextPageHref' => $this->nextPageHref,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
