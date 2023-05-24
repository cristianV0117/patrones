<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Command;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

final class Main extends Action
{
    protected function action(): Response
    {
        $task = new Task(
            "Completar curso udemy",
            "Cristian Vasquez"
        );

        $assign = new AssignTaskCommand($task);
        $complete = new CompleteTaskCommand($task);

        $body = $this->response->getBody();
        $body->write($complete->execute());
        return $this->response;
    }
}