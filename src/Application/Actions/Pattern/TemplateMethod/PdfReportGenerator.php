<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\TemplateMethod;

final class PdfReportGenerator extends ReportGenerator
{
    private array $data;

    protected function getData(array $data): void
    {
        $this->data = $data;
    }

    protected function output(): string
    {
        return json_encode([
            "data" => $this->data,
            "type" => "PDF"
        ]);
    }
}