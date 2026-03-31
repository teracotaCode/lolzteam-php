<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class BatchExecuteResponseJobs implements JsonSerializable
{
    public function __construct(
        public readonly array|null $jobId = null, // JobId
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            jobId: $data['job_id'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'job_id' => $this->jobId,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
