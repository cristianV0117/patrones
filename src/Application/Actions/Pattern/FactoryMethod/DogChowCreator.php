<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\FactoryMethod;

final class DogChowCreator extends Creator
{
    protected function factoryMethod(): Product
    {
        return new DogChow();
    }
}