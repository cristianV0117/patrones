<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Decorator;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

final class Main extends Action
{
    protected function action(): Response
    {
        $clientResponse = new ClientResponse(
            200,
            [
                "name" => "Cristian Vasquez",
                "age" => 24
            ]
        );

        $body = $this->response->getBody();
        $body->write($clientResponse->__invoke());
        return $this->response;
    }
}