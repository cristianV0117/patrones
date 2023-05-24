<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\AbstractFactory;

final class ResponseClient
{
    public function __construct(
        private readonly Factory $factory
    )
    {
    }

    public function __invoke(): OutputEntity
    {
        return $this->factory->response();
    }
}