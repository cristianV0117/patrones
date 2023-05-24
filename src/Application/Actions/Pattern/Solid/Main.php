<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Solid;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

final class Main extends Action
{
    protected function action(): Response
    {
        $user1 = new UserNotification(
            new WhatsApp(),
            "Cristian Vasquez",
            "Hola :D"
        );
        var_dump($user1->sendNotification());

        die();

        $body = $this->response->getBody();
        $body->write("SOLID");
        return $this->response;
    }
}