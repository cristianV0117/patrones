<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Solid;

abstract class User
{
    public function __construct(
        private string $name
    )
    {
    }

    protected function setName(string $name): void
    {
        $this->name = $name;
    }

    protected function name(): string
    {
        return $this->name;
    }
}