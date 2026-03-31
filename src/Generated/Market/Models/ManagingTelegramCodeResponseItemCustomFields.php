<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ManagingTelegramCodeResponseItemCustomFields implements JsonSerializable
{
    public function __construct(
        public readonly string|null $_4 = null,
        public readonly array|null $allowSelfUnban = null, // Allow Self Unban
        public readonly string|null $banReason = null, // Ban
        public readonly string|null $discord = null, // Discord
        public readonly string|null $github = null, // Github
        public readonly string|null $jabber = null, // Jabber
        public readonly string|null $lztUnbanAmount = null, // Lzt Unban Amount
        public readonly string|null $steam = null, // Steam
        public readonly string|null $telegram = null, // Telegram
        public readonly string|null $vk = null, // Vk
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            _4: $data['_4'] ?? null,
            allowSelfUnban: $data['allowSelfUnban'] ?? null,
            banReason: $data['ban_reason'] ?? null,
            discord: $data['discord'] ?? null,
            github: $data['github'] ?? null,
            jabber: $data['jabber'] ?? null,
            lztUnbanAmount: $data['lztUnbanAmount'] ?? null,
            steam: $data['steam'] ?? null,
            telegram: $data['telegram'] ?? null,
            vk: $data['vk'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            '_4' => $this->_4,
            'allowSelfUnban' => $this->allowSelfUnban,
            'ban_reason' => $this->banReason,
            'discord' => $this->discord,
            'github' => $this->github,
            'jabber' => $this->jabber,
            'lztUnbanAmount' => $this->lztUnbanAmount,
            'steam' => $this->steam,
            'telegram' => $this->telegram,
            'vk' => $this->vk,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
