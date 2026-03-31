<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class ChatboxIndexResponsePermissions implements JsonSerializable
{
    public function __construct(
        public readonly bool|null $deleteAnyMessage = null, // Delete Any Message
        public readonly bool|null $editAnyMessage = null, // Edit Any Message
        public readonly bool|null $viewAnyMessage = null, // View Any Message
        public readonly bool|null $viewMessages = null, // View Messages
        public readonly bool|null $postMessage = null, // Post Message
        public readonly bool|null $ban = null, // Ban
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            deleteAnyMessage: $data['deleteAnyMessage'] ?? null,
            editAnyMessage: $data['editAnyMessage'] ?? null,
            viewAnyMessage: $data['viewAnyMessage'] ?? null,
            viewMessages: $data['viewMessages'] ?? null,
            postMessage: $data['postMessage'] ?? null,
            ban: $data['ban'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'deleteAnyMessage' => $this->deleteAnyMessage,
            'editAnyMessage' => $this->editAnyMessage,
            'viewAnyMessage' => $this->viewAnyMessage,
            'viewMessages' => $this->viewMessages,
            'postMessage' => $this->postMessage,
            'ban' => $this->ban,
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
