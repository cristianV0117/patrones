<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\AbstractFactory;

final class JsonOutput implements Output
{
    public function sendOutput(): OutputEntity
    {
        return new OutputEntity(json_encode([
            "saludo" => "hola mundo desde json output"
        ]));
    }
}