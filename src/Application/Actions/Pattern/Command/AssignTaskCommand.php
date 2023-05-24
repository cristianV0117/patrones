<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Command;

final class AssignTaskCommand implements Command
{
    public function __construct(
        private readonly Task $task
    )
    {
    }

    public function execute(): string
    {
        return $this->task->assignToUser();
    }
}