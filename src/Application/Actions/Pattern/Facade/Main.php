<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Facade;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

final class Main extends Action
{
    protected function action(): Response
    {
        $paymentFacade = new PaymentFacade();

        $body = $this->response->getBody();
        $body->write($paymentFacade->payWithPayU());
        return $this->response;
    }
}