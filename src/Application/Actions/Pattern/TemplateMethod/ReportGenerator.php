<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\TemplateMethod;

abstract class ReportGenerator
{
    public function report(
        array $data
    ): string
    {
        $this->getData($data);
        return $this->output();
    }

    protected abstract function getData(array $data): void;

    protected abstract function output(): string;
}