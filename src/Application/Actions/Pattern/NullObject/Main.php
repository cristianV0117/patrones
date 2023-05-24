<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\NullObject;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

final class Main extends Action
{
    protected function action(): Response
    {
        $isEmailActiveForUser = true;

        if ($isEmailActiveForUser) {
            $emailService = new EmailService();
        } else {
            $emailService = new NullService();
        }

        $notificationApp = new NotificationApp($emailService);


        $body = $this->response->getBody();
        $body->write($notificationApp->notifyUser("HOLA MUNDO"));
        return $this->response;
    }
}