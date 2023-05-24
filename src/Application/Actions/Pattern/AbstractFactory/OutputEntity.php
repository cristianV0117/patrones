<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\AbstractFactory;

final class OutputEntity
{
    public function __construct(
        private readonly mixed $response
    )
    {
    }

    public function value(): mixed
    {
        return $this->response;
    }
}
