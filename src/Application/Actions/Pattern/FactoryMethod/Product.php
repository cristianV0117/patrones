<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\FactoryMethod;

interface Product
{
    public function getNameProduct(): string;
}