<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Command;

interface Command
{
    public function execute(): string;
}