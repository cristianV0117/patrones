<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\AbstractFactory;

final class HtmlOutput implements Output
{
    public function sendOutput(): OutputEntity
    {
        return new OutputEntity(
            "<br>Hola mundo desde html output</br>"
        );
    }
}