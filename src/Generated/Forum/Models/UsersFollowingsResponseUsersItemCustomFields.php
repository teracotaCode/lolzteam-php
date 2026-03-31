<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersFollowingsResponseUsersItemCustomFields implements JsonSerializable
{
    public function __construct(
        public readonly string|null $_4 = null,
        public readonly array|null $allowSelfUnban = null, // Allow self unban
        public readonly string|null $discord = null, // Discord
        public readonly string|null $github = null, // Github
        public readonly string|null $jabber = null, // Jabber
        public readonly string|null $lztAwardUserTrophy = null, // Lzt award user trophy
        public readonly string|null $lztCuratorNodeTitle = null, // Lzt curator node title
        public readonly string|null $lztCuratorNodeTitleEn = null, // Lzt curator node title en
        public readonly string|null $lztDeposit = null, // Lzt deposit
        public readonly string|null $lztInnovation20Link = null, // Lzt innovation link
        public readonly string|null $lztInnovation30Link = null, // Lzt innovation link
        public readonly string|null $lztInnovationLink = null, // Lzt innovation link
        public readonly string|null $lztLikesIncreasing = null, // Lzt likes increasing
        public readonly string|null $lztLikesZeroing = null, // Lzt likes zeroing
        public readonly string|null $lztSympathyIncreasing = null, // Lzt sympathy increasing
        public readonly string|null $lztSympathyZeroing = null, // Lzt sympathy zeroing
        public readonly string|null $maecenasValue = null, // Maecenas value
        public readonly string|null $scamURL = null, // Scam url
        public readonly string|null $steam = null, // Steam
        public readonly string|null $telegram = null, // Telegram
        public readonly string|null $vk = null, // Vk
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            _4: $data['_4'] ?? null,
            allowSelfUnban: $data['allowSelfUnban'] ?? null,
            discord: $data['discord'] ?? null,
            github: $data['github'] ?? null,
            jabber: $data['jabber'] ?? null,
            lztAwardUserTrophy: $data['lztAwardUserTrophy'] ?? null,
            lztCuratorNodeTitle: $data['lztCuratorNodeTitle'] ?? null,
            lztCuratorNodeTitleEn: $data['lztCuratorNodeTitleEn'] ?? null,
            lztDeposit: $data['lztDeposit'] ?? null,
            lztInnovation20Link: $data['lztInnovation20Link'] ?? null,
            lztInnovation30Link: $data['lztInnovation30Link'] ?? null,
            lztInnovationLink: $data['lztInnovationLink'] ?? null,
            lztLikesIncreasing: $data['lztLikesIncreasing'] ?? null,
            lztLikesZeroing: $data['lztLikesZeroing'] ?? null,
            lztSympathyIncreasing: $data['lztSympathyIncreasing'] ?? null,
            lztSympathyZeroing: $data['lztSympathyZeroing'] ?? null,
            maecenasValue: $data['maecenasValue'] ?? null,
            scamURL: $data['scamURL'] ?? null,
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
            'discord' => $this->discord,
            'github' => $this->github,
            'jabber' => $this->jabber,
            'lztAwardUserTrophy' => $this->lztAwardUserTrophy,
            'lztCuratorNodeTitle' => $this->lztCuratorNodeTitle,
            'lztCuratorNodeTitleEn' => $this->lztCuratorNodeTitleEn,
            'lztDeposit' => $this->lztDeposit,
            'lztInnovation20Link' => $this->lztInnovation20Link,
            'lztInnovation30Link' => $this->lztInnovation30Link,
            'lztInnovationLink' => $this->lztInnovationLink,
            'lztLikesIncreasing' => $this->lztLikesIncreasing,
            'lztLikesZeroing' => $this->lztLikesZeroing,
            'lztSympathyIncreasing' => $this->lztSympathyIncreasing,
            'lztSympathyZeroing' => $this->lztSympathyZeroing,
            'maecenasValue' => $this->maecenasValue,
            'scamURL' => $this->scamURL,
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
