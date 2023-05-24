<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\AbstractFactory;

interface Output
{
    public function sendOutput(): OutputEntity;
}