<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class BatchResponseJobsJobId implements JsonSerializable
{
    public function __construct(
        public readonly string|null $jobResult = null,
        public readonly string|null $jobError = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            jobResult: $data['_job_result'] ?? null,
            jobError: $data['_job_error'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            '_job_result' => $this->jobResult,
            '_job_error' => $this->jobError,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
