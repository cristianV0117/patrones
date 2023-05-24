<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Iterator;

final class ListTask implements \Iterator
{
    private array $tasks;

    private int $position;

    public function __construct()
    {
        $this->tasks = [];
        $this->position = 0;
    }

    public function addTask(
        Task $task
    ): void
    {
        $this->tasks[] = $task;
    }

    public function current(): mixed
    {
        return $this->tasks[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }

    public function key(): mixed
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->tasks[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}