<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\CategoryGamesResponseGamesItem[]|null $games Games
 */
class CategoryGamesResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $games = null, // Games
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            games: isset($data['games']) && is_array($data['games']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategoryGamesResponseGamesItem::fromArray($item), $data['games']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'games' => $this->games !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->games) : null,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
