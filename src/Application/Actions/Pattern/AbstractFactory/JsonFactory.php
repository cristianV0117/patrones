<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\AbstractFactory;

final class JsonFactory implements Factory
{
    public function response(): OutputEntity
    {
        return (new JsonOutput())->sendOutput();
    }
}