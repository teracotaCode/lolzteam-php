<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ProfilePostsGetResponseProfilePostTimelineUserBirthday implements JsonSerializable
{
    public function __construct(
        public readonly int|null $age = null, // Age
        public readonly \Lolzteam\Generated\Forum\Models\ProfilePostsGetResponseProfilePostTimelineUserBirthdayTimeStamp|null $timeStamp = null, // Time Stamp
        public readonly string|null $format = null, // Format
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            age: $data['age'] ?? null,
            timeStamp: isset($data['timeStamp']) && is_array($data['timeStamp']) && !empty($data['timeStamp']) ? \Lolzteam\Generated\Forum\Models\ProfilePostsGetResponseProfilePostTimelineUserBirthdayTimeStamp::fromArray($data['timeStamp']) : null,
            format: $data['format'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'age' => $this->age,
            'timeStamp' => $this->timeStamp?->toArray(),
            'format' => $this->format,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
