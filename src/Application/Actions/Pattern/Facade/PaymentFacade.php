<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Facade;

final class PaymentFacade
{
    private PayPal $payPal;

    private PayU $payU;

    public function __construct()
    {
        $this->payPal = new PayPal();
        $this->payU = new PayU();
    }

    public function payWithPayPal(): string
    {
        return $this->payPal->pay();
    }

    public function payWithPayU(): string
    {
        return $this->payU->pay();
    }
}