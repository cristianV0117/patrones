<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Decorator;

final class BaseResponse implements Response
{
    public function __construct(
        private readonly int $status,
        private readonly array|string $content
    )
    {
    }

    public function status(): int
    {
        return $this->status;
    }

    public function content(): string
    {
        return (!is_array($this->content)) ? $this->content : "Se esta retornando un array";
    }

    public function primitiveContent(): array|string
    {
        return $this->content;
    }
}