<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ListStatesResponseUserItemStates implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesStickied|null $stickied = null, // Stickied
        public readonly \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesDiscountRequest|null $discountRequest = null, // Discount
        public readonly \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesInBuyersFavorites|null $inBuyersFavorites = null, // In
        public readonly \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesActive|null $active = null, // Active
        public readonly \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesPaid|null $paid = null, // Paid
        public readonly \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesClosed|null $closed = null, // Closed
        public readonly \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesDeleted|null $deleted = null, // Deleted
        public readonly \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesAwaiting|null $awaiting = null, // Awaiting
        public readonly \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesPreActive|null $preActive = null, // Pre
        public readonly \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesPreUpload|null $preUpload = null, // Pre
        public readonly \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesPendingDeletion|null $pendingDeletion = null, // Pending
        public readonly \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesClosedInactive|null $closedInactive = null, // Closed
        public readonly \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesAutoBump|null $autoBump = null, // Auto
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            stickied: isset($data['stickied']) && is_array($data['stickied']) && !empty($data['stickied']) ? \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesStickied::fromArray($data['stickied']) : null,
            discountRequest: isset($data['discount_request']) && is_array($data['discount_request']) && !empty($data['discount_request']) ? \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesDiscountRequest::fromArray($data['discount_request']) : null,
            inBuyersFavorites: isset($data['in_buyers_favorites']) && is_array($data['in_buyers_favorites']) && !empty($data['in_buyers_favorites']) ? \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesInBuyersFavorites::fromArray($data['in_buyers_favorites']) : null,
            active: isset($data['active']) && is_array($data['active']) && !empty($data['active']) ? \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesActive::fromArray($data['active']) : null,
            paid: isset($data['paid']) && is_array($data['paid']) && !empty($data['paid']) ? \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesPaid::fromArray($data['paid']) : null,
            closed: isset($data['closed']) && is_array($data['closed']) && !empty($data['closed']) ? \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesClosed::fromArray($data['closed']) : null,
            deleted: isset($data['deleted']) && is_array($data['deleted']) && !empty($data['deleted']) ? \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesDeleted::fromArray($data['deleted']) : null,
            awaiting: isset($data['awaiting']) && is_array($data['awaiting']) && !empty($data['awaiting']) ? \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesAwaiting::fromArray($data['awaiting']) : null,
            preActive: isset($data['pre_active']) && is_array($data['pre_active']) && !empty($data['pre_active']) ? \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesPreActive::fromArray($data['pre_active']) : null,
            preUpload: isset($data['pre_upload']) && is_array($data['pre_upload']) && !empty($data['pre_upload']) ? \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesPreUpload::fromArray($data['pre_upload']) : null,
            pendingDeletion: isset($data['pending_deletion']) && is_array($data['pending_deletion']) && !empty($data['pending_deletion']) ? \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesPendingDeletion::fromArray($data['pending_deletion']) : null,
            closedInactive: isset($data['closed_inactive']) && is_array($data['closed_inactive']) && !empty($data['closed_inactive']) ? \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesClosedInactive::fromArray($data['closed_inactive']) : null,
            autoBump: isset($data['auto_bump']) && is_array($data['auto_bump']) && !empty($data['auto_bump']) ? \Lolzteam\Generated\Market\Models\ListStatesResponseUserItemStatesAutoBump::fromArray($data['auto_bump']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'stickied' => $this->stickied?->toArray(),
            'discount_request' => $this->discountRequest?->toArray(),
            'in_buyers_favorites' => $this->inBuyersFavorites?->toArray(),
            'active' => $this->active?->toArray(),
            'paid' => $this->paid?->toArray(),
            'closed' => $this->closed?->toArray(),
            'deleted' => $this->deleted?->toArray(),
            'awaiting' => $this->awaiting?->toArray(),
            'pre_active' => $this->preActive?->toArray(),
            'pre_upload' => $this->preUpload?->toArray(),
            'pending_deletion' => $this->pendingDeletion?->toArray(),
            'closed_inactive' => $this->closedInactive?->toArray(),
            'auto_bump' => $this->autoBump?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
