<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Iterator;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

final class Main extends Action
{
    protected function action(): Response
    {
        $taskOne = new Task("Primer tarea");
        $taskTwo = new Task("Segunda tarea");
        $taskThree = new Task("Tercera tarea");

        $listTask = new ListTask();

        $listTask->addTask($taskOne);
        $listTask->addTask($taskTwo);
        $listTask->addTask($taskThree);

        $body = $this->response->getBody();
        $body->write("iterator");
        return $this->response;
    }
}