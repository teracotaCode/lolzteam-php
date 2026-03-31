<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ThreadsClaimResponseThreadContestPermissions implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $canFinish = null, // Can
        public readonly bool|null $canParticipate = null, // Can
        public readonly string|null $canParticipateError = null, // Can
        public readonly bool|null $canViewUserList = null, // Can
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            canFinish: $data['can_finish'] ?? null,
            canParticipate: $data['can_participate'] ?? null,
            canParticipateError: $data['can_participate_error'] ?? null,
            canViewUserList: $data['can_view_user_list'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'can_finish' => $this->canFinish,
            'can_participate' => $this->canParticipate,
            'can_participate_error' => $this->canParticipateError,
            'can_view_user_list' => $this->canViewUserList,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
