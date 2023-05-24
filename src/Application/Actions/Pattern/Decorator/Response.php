<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Decorator;

interface Response
{
    public function status(): int;

    public function content(): string;

    public function primitiveContent(): array|string;
}