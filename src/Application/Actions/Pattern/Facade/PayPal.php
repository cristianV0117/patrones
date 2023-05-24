<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Facade;

final class PayPal implements Payment
{
    public function pay(): string
    {
        return json_encode([
           "status" => 200,
           "message" => "OK",
           "payment_type" => "PayPal"
        ]);
    }
}