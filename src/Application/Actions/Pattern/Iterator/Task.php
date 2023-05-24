<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Iterator;

final class Task
{
    public function __construct(
        private readonly string $taskName
    )
    {
    }

    public function taskName(): string
    {
        return $this->taskName;
    }
}