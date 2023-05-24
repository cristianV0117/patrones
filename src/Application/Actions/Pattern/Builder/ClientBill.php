<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Builder;

final class ClientBill
{
    public function __construct(
        private readonly Bill $bill
    )
    {
    }

    public function __invoke(): string
    {
        return $this->bill->generateBill();
    }
}