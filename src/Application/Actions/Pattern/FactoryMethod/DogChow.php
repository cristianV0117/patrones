<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\FactoryMethod;

final class DogChow implements Product
{
    public function getNameProduct(): string
    {
        return "Dog chow para perros y gatos";
    }
}