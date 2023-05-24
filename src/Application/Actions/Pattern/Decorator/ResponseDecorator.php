<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Decorator;

abstract class ResponseDecorator implements Response
{
    public function __construct(
        protected readonly Response $response
    )
    {
    }

    public function status(): int
    {
        return $this->response->status();
    }

    public function content(): string
    {
        return $this->response->content();
    }

    public function primitiveContent(): string
    {
        return $this->response->primitiveContent();
    }
}