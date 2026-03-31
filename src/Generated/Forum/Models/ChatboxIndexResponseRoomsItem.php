<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ChatboxIndexResponseRoomsItem implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $canReport = null, // Can
        public readonly bool|null $eng = null, // Eng
        public readonly bool|null $market = null, // Market
        public readonly int|null $roomId = null, // Room
        public readonly string|null $title = null, // Title
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            canReport: $data['can_report'] ?? null,
            eng: $data['eng'] ?? null,
            market: $data['market'] ?? null,
            roomId: $data['room_id'] ?? null,
            title: $data['title'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'can_report' => $this->canReport,
            'eng' => $this->eng,
            'market' => $this->market,
            'room_id' => $this->roomId,
            'title' => $this->title,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
