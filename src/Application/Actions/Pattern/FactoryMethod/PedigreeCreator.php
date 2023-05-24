<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\FactoryMethod;

final class PedigreeCreator extends Creator
{
    protected function factoryMethod(): Product
    {
        return new Pedigree();
    }
}