<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class UsersIgnoredResponseUsersItemCustomFields implements JsonSerializable
{
    public function __construct(
        public readonly string|null $_4 = null,
        public readonly mixed $scamURL = null, // Scam Url
        public readonly mixed $lztLikesZeroing = null, // Lzt Likes Zeroing
        public readonly mixed $lztLikesIncreasing = null, // Lzt Likes Increasing
        public readonly mixed $lztSympathyZeroing = null, // Lzt Sympathy Zeroing
        public readonly mixed $lztSympathyIncreasing = null, // Lzt Sympathy Increasing
        public readonly mixed $telegram = null, // Telegram
        public readonly string|null $vk = null, // Vk
        public readonly string|null $discord = null, // Discord
        public readonly string|null $steam = null, // Steam
        public readonly mixed $matrix = null, // Matrix
        public readonly string|null $jabber = null, // Jabber
        public readonly string|null $github = null, // Github
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            _4: $data['_4'] ?? null,
            scamURL: $data['scamURL'] ?? null,
            lztLikesZeroing: $data['lztLikesZeroing'] ?? null,
            lztLikesIncreasing: $data['lztLikesIncreasing'] ?? null,
            lztSympathyZeroing: $data['lztSympathyZeroing'] ?? null,
            lztSympathyIncreasing: $data['lztSympathyIncreasing'] ?? null,
            telegram: $data['telegram'] ?? null,
            vk: $data['vk'] ?? null,
            discord: $data['discord'] ?? null,
            steam: $data['steam'] ?? null,
            matrix: $data['matrix'] ?? null,
            jabber: $data['jabber'] ?? null,
            github: $data['github'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            '_4' => $this->_4,
            'scamURL' => $this->scamURL,
            'lztLikesZeroing' => $this->lztLikesZeroing,
            'lztLikesIncreasing' => $this->lztLikesIncreasing,
            'lztSympathyZeroing' => $this->lztSympathyZeroing,
            'lztSympathyIncreasing' => $this->lztSympathyIncreasing,
            'telegram' => $this->telegram,
            'vk' => $this->vk,
            'discord' => $this->discord,
            'steam' => $this->steam,
            'matrix' => $this->matrix,
            'jabber' => $this->jabber,
            'github' => $this->github,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
