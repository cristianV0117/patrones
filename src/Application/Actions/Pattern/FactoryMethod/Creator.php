<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\FactoryMethod;

abstract class Creator
{
    protected abstract function factoryMethod(): Product;

    public function getOperation(): string
    {
        $product = $this->factoryMethod();

        return $product->getNameProduct();
    }
}