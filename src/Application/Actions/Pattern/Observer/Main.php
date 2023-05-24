<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Observer;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

final class Main extends Action
{
    protected function action(): Response
    {
        $notificationSystem = new NotificationSystem();
        $user1 = new User("Cristian");
        $user2 = new User("Andrea");

        $notificationSystem->attach($user1);
        $notificationSystem->attach($user2);

        $notificationSystem->sendNotification("Hola mundo");
        $notificationSystem->sendNotification("Adios");

        $body = $this->response->getBody();
        $body->write($user2->notifications());
        return $this->response;
    }
}