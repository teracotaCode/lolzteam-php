<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class CategoryUplayResponseItemsItemUplayGamesFfffffffFfffFfffFfffFfffffffffff implements JsonSerializable
{
    public function __construct(
        public readonly string|null $title = null, // Title
        public readonly string|null $img = null, // Img
        public readonly int|null $pvpTimePlayed = null, // Pvp Time Played
        public readonly int|null $pveTimePlayed = null, // Pve Time Played
        public readonly string|null $abbr = null, // Abbr
        public readonly string|null $gameId = null, // Game Id
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            title: $data['title'] ?? null,
            img: $data['img'] ?? null,
            pvpTimePlayed: $data['pvpTimePlayed'] ?? null,
            pveTimePlayed: $data['pveTimePlayed'] ?? null,
            abbr: $data['abbr'] ?? null,
            gameId: $data['gameId'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'title' => $this->title,
            'img' => $this->img,
            'pvpTimePlayed' => $this->pvpTimePlayed,
            'pveTimePlayed' => $this->pveTimePlayed,
            'abbr' => $this->abbr,
            'gameId' => $this->gameId,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
