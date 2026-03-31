<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

/**
 * Market API Client.
 *
 * Auto-generated from OpenAPI specification.
 */
class MarketClient
{
    public readonly CategorySearchApi $categorySearch;
    public readonly CategoriesApi $categories;
    public readonly AccountsListApi $accountsList;
    public readonly AccountsManagingApi $accountsManaging;
    public readonly CartApi $cart;
    public readonly AccountPurchasingApi $accountPurchasing;
    public readonly CustomDiscountsApi $customDiscounts;
    public readonly AccountPublishingApi $accountPublishing;
    public readonly ProfileApi $profile;
    public readonly InvoicesApi $invoices;
    public readonly PaymentsApi $payments;
    public readonly ProxyApi $proxy;
    public readonly IMAPApi $iMAP;
    public readonly BatchRequestsApi $batchRequests;

    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {
        $this->categorySearch = new CategorySearchApi($this->httpClient);
        $this->categories = new CategoriesApi($this->httpClient);
        $this->accountsList = new AccountsListApi($this->httpClient);
        $this->accountsManaging = new AccountsManagingApi($this->httpClient);
        $this->cart = new CartApi($this->httpClient);
        $this->accountPurchasing = new AccountPurchasingApi($this->httpClient);
        $this->customDiscounts = new CustomDiscountsApi($this->httpClient);
        $this->accountPublishing = new AccountPublishingApi($this->httpClient);
        $this->profile = new ProfileApi($this->httpClient);
        $this->invoices = new InvoicesApi($this->httpClient);
        $this->payments = new PaymentsApi($this->httpClient);
        $this->proxy = new ProxyApi($this->httpClient);
        $this->iMAP = new IMAPApi($this->httpClient);
        $this->batchRequests = new BatchRequestsApi($this->httpClient);
    }
}
