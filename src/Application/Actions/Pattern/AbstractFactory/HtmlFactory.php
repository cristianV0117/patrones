<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\AbstractFactory;

final class HtmlFactory implements Factory
{
    public function response(): OutputEntity
    {
        return (new HtmlOutput())->sendOutput();
    }
}