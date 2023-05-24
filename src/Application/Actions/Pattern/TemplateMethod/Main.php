<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\TemplateMethod;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

final class Main extends Action
{
    protected function action(): Response
    {
        $pdfReport = new PdfReportGenerator();

        $body = $this->response->getBody();
        $body->write($pdfReport->report([
            "name" => "Cristian Vasquez",
            "age" => 24
        ]));
        return $this->response;
    }
}