<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class BatchExecuteResponse implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Forum\Models\BatchExecuteResponseJobs|null $jobs = null, // Jobs
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            jobs: isset($data['jobs']) && is_array($data['jobs']) && !empty($data['jobs']) ? \Lolzteam\Generated\Forum\Models\BatchExecuteResponseJobs::fromArray($data['jobs']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'jobs' => $this->jobs?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
