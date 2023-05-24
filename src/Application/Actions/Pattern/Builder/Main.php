<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Builder;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

final class Main extends Action
{
    protected function action(): Response
    {
        $userBill = new UserBill();
        $userBill->setFullNameBill("Cristian Vasquez");
        $userBill->setEmailBill("cristian@udemy.com");
        $userBill->setAddressBill("direccion colombia");
        $userBill->setAmount("50000");
        $userBill->setBank("ejemplo");
        $clientBill = new ClientBill($userBill);

        $body = $this->response->getBody();
        $body->write($clientBill->__invoke());
        return $this->response;
    }
}