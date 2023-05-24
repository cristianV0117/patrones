<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\FactoryMethod;

final class ClientProduct
{
    public function __construct(
        private readonly Creator $creator
    )
    {
    }

    public function __invoke(): string
    {
        return $this->creator->getOperation();
    }
}