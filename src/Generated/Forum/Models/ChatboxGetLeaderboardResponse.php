<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Forum\Models\ChatboxGetLeaderboardResponseLeaderboardItem[]|null $leaderboard Leaderboard
 */
class ChatboxGetLeaderboardResponse implements JsonSerializable
{
    public function __construct(
        public readonly array|null $leaderboard = null, // Leaderboard
        public readonly mixed $systemInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            leaderboard: isset($data['leaderboard']) && is_array($data['leaderboard']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Forum\Models\ChatboxGetLeaderboardResponseLeaderboardItem::fromArray($item), $data['leaderboard']) : null,
            systemInfo: $data['system_info'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'leaderboard' => $this->leaderboard !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->leaderboard) : null,
            'system_info' => $this->systemInfo,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
