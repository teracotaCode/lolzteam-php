<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ProfileGetResponseUserCustomFields implements JsonSerializable
{
    public function __construct(
        public readonly string|null $_4 = null,
        public readonly array|null $allowSelfUnban = null, // Allow Self Unban
        public readonly string|null $banReason = null, // Ban
        public readonly string|null $discord = null, // Discord
        public readonly string|null $github = null, // Github
        public readonly string|null $jabber = null, // Jabber
        public readonly string|null $lztAwardUserTrophy = null, // Lzt Award User Trophy
        public readonly string|null $lztLikesIncreasing = null, // Lzt Likes Increasing
        public readonly string|null $lztLikesZeroing = null, // Lzt Likes Zeroing
        public readonly string|null $lztSympathyIncreasing = null, // Lzt Sympathy Increasing
        public readonly string|null $lztSympathyZeroing = null, // Lzt Sympathy Zeroing
        public readonly string|null $lztUnbanAmount = null, // Lzt Unban Amount
        public readonly string|null $maecenasValue = null, // Maecenas Value
        public readonly string|null $scamURL = null, // Scam Url
        public readonly string|null $steam = null, // Steam
        public readonly string|null $telegram = null, // Telegram
        public readonly string|null $vk = null, // Vk
        public readonly string|null $favoritePorn = null, // Favorite Porn
        public readonly string|null $favoriteVape = null, // Favorite Vape
        public readonly string|null $favoriteAnime = null, // Favorite Anime
        public readonly string|null $matrix = null, // Matrix
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
            lztAwardUserTrophy: $data['lztAwardUserTrophy'] ?? null,
            lztLikesIncreasing: $data['lztLikesIncreasing'] ?? null,
            lztLikesZeroing: $data['lztLikesZeroing'] ?? null,
            lztSympathyIncreasing: $data['lztSympathyIncreasing'] ?? null,
            lztSympathyZeroing: $data['lztSympathyZeroing'] ?? null,
            lztUnbanAmount: $data['lztUnbanAmount'] ?? null,
            maecenasValue: $data['maecenasValue'] ?? null,
            scamURL: $data['scamURL'] ?? null,
            steam: $data['steam'] ?? null,
            telegram: $data['telegram'] ?? null,
            vk: $data['vk'] ?? null,
            favoritePorn: $data['favoritePorn'] ?? null,
            favoriteVape: $data['favoriteVape'] ?? null,
            favoriteAnime: $data['favoriteAnime'] ?? null,
            matrix: $data['matrix'] ?? null,
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
            'lztAwardUserTrophy' => $this->lztAwardUserTrophy,
            'lztLikesIncreasing' => $this->lztLikesIncreasing,
            'lztLikesZeroing' => $this->lztLikesZeroing,
            'lztSympathyIncreasing' => $this->lztSympathyIncreasing,
            'lztSympathyZeroing' => $this->lztSympathyZeroing,
            'lztUnbanAmount' => $this->lztUnbanAmount,
            'maecenasValue' => $this->maecenasValue,
            'scamURL' => $this->scamURL,
            'steam' => $this->steam,
            'telegram' => $this->telegram,
            'vk' => $this->vk,
            'favoritePorn' => $this->favoritePorn,
            'favoriteVape' => $this->favoriteVape,
            'favoriteAnime' => $this->favoriteAnime,
            'matrix' => $this->matrix,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
