<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\FactoryMethod;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

final class Main extends Action
{
    protected function action(): Response
    {
        $clientProduct = new ClientProduct(new DogChowCreator());
        $body = $this->response->getBody();
        $body->write($clientProduct->__invoke());
        return $this->response;
    }
}