<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryEAResponseItemsItemEaGamesApexLegends implements JsonSerializable
{
    public function __construct(
        public readonly string|null $gameId = null, // Game
        public readonly string|null $title = null, // Title
        public readonly int|null $lastActivity = null, // Last
        public readonly int|null $totalPlayed = null, // Total
        public readonly string|null $img = null, // Img
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            gameId: $data['game_id'] ?? null,
            title: $data['title'] ?? null,
            lastActivity: $data['last_activity'] ?? null,
            totalPlayed: $data['total_played'] ?? null,
            img: $data['img'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'game_id' => $this->gameId,
            'title' => $this->title,
            'last_activity' => $this->lastActivity,
            'total_played' => $this->totalPlayed,
            'img' => $this->img,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
