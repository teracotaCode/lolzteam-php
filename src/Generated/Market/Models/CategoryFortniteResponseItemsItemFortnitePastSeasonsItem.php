<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryFortniteResponseItemsItemFortnitePastSeasonsItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $numWins = null, // Num Wins
        public readonly int|null $seasonXp = null, // Season Xp
        public readonly bool|null $purchasedVIP = null, // Purchased Vip
        public readonly int|null $survivorPrestige = null, // Survivor Prestige
        public readonly int|null $seasonLevel = null, // Season Level
        public readonly int|null $numLowBracket = null, // Num Low Bracket
        public readonly int|null $bookLevel = null, // Book Level
        public readonly int|null $numRoyalRoyales = null, // Num Royal Royales
        public readonly int|null $seasonNumber = null, // Season Number
        public readonly int|null $survivorTier = null, // Survivor Tier
        public readonly int|null $numHighBracket = null, // Num High Bracket
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            numWins: $data['numWins'] ?? null,
            seasonXp: $data['seasonXp'] ?? null,
            purchasedVIP: $data['purchasedVIP'] ?? null,
            survivorPrestige: $data['survivorPrestige'] ?? null,
            seasonLevel: $data['seasonLevel'] ?? null,
            numLowBracket: $data['numLowBracket'] ?? null,
            bookLevel: $data['bookLevel'] ?? null,
            numRoyalRoyales: $data['numRoyalRoyales'] ?? null,
            seasonNumber: $data['seasonNumber'] ?? null,
            survivorTier: $data['survivorTier'] ?? null,
            numHighBracket: $data['numHighBracket'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'numWins' => $this->numWins,
            'seasonXp' => $this->seasonXp,
            'purchasedVIP' => $this->purchasedVIP,
            'survivorPrestige' => $this->survivorPrestige,
            'seasonLevel' => $this->seasonLevel,
            'numLowBracket' => $this->numLowBracket,
            'bookLevel' => $this->bookLevel,
            'numRoyalRoyales' => $this->numRoyalRoyales,
            'seasonNumber' => $this->seasonNumber,
            'survivorTier' => $this->survivorTier,
            'numHighBracket' => $this->numHighBracket,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
