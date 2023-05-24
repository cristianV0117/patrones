<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\AbstractFactory;

interface Factory
{
    public function response(): OutputEntity;
}