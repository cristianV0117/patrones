<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Command;

final class Task
{
    public function __construct(
        private readonly string $task,
        private readonly string $user
    )
    {
    }

    public function assignToUser(): string
    {
        return "La tarea {$this->task} ha sido asignada al usuario {$this->user}";
    }

    public function taskComplete(): string
    {
        return "La tarea {$this->task} ha sido completada";
    }
}