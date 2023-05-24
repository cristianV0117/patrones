<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\FactoryMethod;

final class Pedigree implements Product
{
    public function getNameProduct(): string
    {
        return "Pedigree para perros y gatos";
    }
}