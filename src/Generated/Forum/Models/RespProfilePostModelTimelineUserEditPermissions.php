<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class RespProfilePostModelTimelineUserEditPermissions implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $password = null, // Password
        public readonly bool|null $userEmail = null, // User
        public readonly bool|null $username = null, // Username
        public readonly bool|null $userTitle = null, // User
        public readonly bool|null $shortLink = null, // Short
        public readonly bool|null $hideUsernameLogs = null, // Hide
        public readonly bool|null $primaryGroupId = null, // Primary
        public readonly bool|null $secondaryGroupIds = null, // Secondary
        public readonly bool|null $userDobDay = null, // User
        public readonly bool|null $userDobMonth = null, // User
        public readonly bool|null $userDobYear = null, // User
        public readonly bool|null $fields = null, // Fields
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            password: $data['password'] ?? null,
            userEmail: $data['user_email'] ?? null,
            username: $data['username'] ?? null,
            userTitle: $data['user_title'] ?? null,
            shortLink: $data['short_link'] ?? null,
            hideUsernameLogs: $data['hide_username_logs'] ?? null,
            primaryGroupId: $data['primary_group_id'] ?? null,
            secondaryGroupIds: $data['secondary_group_ids'] ?? null,
            userDobDay: $data['user_dob_day'] ?? null,
            userDobMonth: $data['user_dob_month'] ?? null,
            userDobYear: $data['user_dob_year'] ?? null,
            fields: $data['fields'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'password' => $this->password,
            'user_email' => $this->userEmail,
            'username' => $this->username,
            'user_title' => $this->userTitle,
            'short_link' => $this->shortLink,
            'hide_username_logs' => $this->hideUsernameLogs,
            'primary_group_id' => $this->primaryGroupId,
            'secondary_group_ids' => $this->secondaryGroupIds,
            'user_dob_day' => $this->userDobDay,
            'user_dob_month' => $this->userDobMonth,
            'user_dob_year' => $this->userDobYear,
            'fields' => $this->fields,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
