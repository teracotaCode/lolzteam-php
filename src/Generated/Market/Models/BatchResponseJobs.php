<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class BatchResponseJobs implements JsonSerializable
{
    public function __construct(
        public readonly \Lolzteam\Generated\Market\Models\BatchResponseJobsJobId|null $jobId = null, // JobId
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            jobId: isset($data['job_id']) && is_array($data['job_id']) && !empty($data['job_id']) ? \Lolzteam\Generated\Market\Models\BatchResponseJobsJobId::fromArray($data['job_id']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'job_id' => $this->jobId?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
