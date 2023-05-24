<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Facade;

interface Payment
{
    public function pay(): string;
}