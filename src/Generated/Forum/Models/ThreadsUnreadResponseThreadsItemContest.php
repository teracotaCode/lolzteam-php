<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ThreadsUnreadResponseThreadsItemContest implements JsonSerializable
{
    public function __construct(
        public readonly string|null $type = null, // Type
        public readonly int|null $finishDate = null, // Finish
        public readonly int|null $nowCountMembers = null, // Now
        public readonly int|null $neededMembers = null, // Needed
        public readonly int|null $isFinished = null, // Is
        public readonly int|null $countWinners = null, // Count
        public readonly int|null $requireLikeCount = null, // Require
        public readonly int|null $requireTotalLikeCount = null, // Require
        public readonly string|null $prizeType = null, // Prize
        public readonly string|null $prizeTypePhrase = null, // Prize
        public readonly int|null $prizeData = null, // Prize
        public readonly int|null $isMoneyPlaces = null, // Is
        public readonly float|null $chanceToWin = null, // Chance
        public readonly array|null $winners = null, // Winners
        public readonly bool|null $alreadyParticipate = null, // Already
        public readonly \Lolzteam\Generated\Forum\Models\ThreadsUnreadResponseThreadsItemContestPermissions|null $permissions = null, // Permissions
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            type: $data['type'] ?? null,
            finishDate: $data['finish_date'] ?? null,
            nowCountMembers: $data['now_count_members'] ?? null,
            neededMembers: $data['needed_members'] ?? null,
            isFinished: $data['is_finished'] ?? null,
            countWinners: $data['count_winners'] ?? null,
            requireLikeCount: $data['require_like_count'] ?? null,
            requireTotalLikeCount: $data['require_total_like_count'] ?? null,
            prizeType: $data['prize_type'] ?? null,
            prizeTypePhrase: $data['prize_type_phrase'] ?? null,
            prizeData: $data['prize_data'] ?? null,
            isMoneyPlaces: $data['is_money_places'] ?? null,
            chanceToWin: $data['chance_to_win'] ?? null,
            winners: $data['winners'] ?? null,
            alreadyParticipate: $data['already_participate'] ?? null,
            permissions: isset($data['permissions']) && is_array($data['permissions']) && !empty($data['permissions']) ? \Lolzteam\Generated\Forum\Models\ThreadsUnreadResponseThreadsItemContestPermissions::fromArray($data['permissions']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'type' => $this->type,
            'finish_date' => $this->finishDate,
            'now_count_members' => $this->nowCountMembers,
            'needed_members' => $this->neededMembers,
            'is_finished' => $this->isFinished,
            'count_winners' => $this->countWinners,
            'require_like_count' => $this->requireLikeCount,
            'require_total_like_count' => $this->requireTotalLikeCount,
            'prize_type' => $this->prizeType,
            'prize_type_phrase' => $this->prizeTypePhrase,
            'prize_data' => $this->prizeData,
            'is_money_places' => $this->isMoneyPlaces,
            'chance_to_win' => $this->chanceToWin,
            'winners' => $this->winners,
            'already_participate' => $this->alreadyParticipate,
            'permissions' => $this->permissions?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
