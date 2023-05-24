<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Builder;

interface Bill
{
    public function generateBill(): string;
}