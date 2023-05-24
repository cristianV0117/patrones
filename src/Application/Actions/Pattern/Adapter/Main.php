<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Adapter;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

final class Main extends Action
{
    protected function action(): Response
    {
        $notification = new SmsNotification(new Sms());

        $client = new ClientNotification($notification);

        $body = $this->response->getBody();
        $body->write($client->__invoke());
        return $this->response;
    }
}