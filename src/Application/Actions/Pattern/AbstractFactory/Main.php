<?php

namespace App\Application\Actions\Pattern\AbstractFactory;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

class Main extends Action
{
    protected function action(): Response
    {
        $factory = new HtmlFactory();

        $client = new ResponseClient($factory);

        $body = $this->response->getBody();
        $body->write($client->__invoke()->value());
        return $this->response;
    }
}
