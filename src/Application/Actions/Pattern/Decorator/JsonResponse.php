<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Decorator;

final class JsonResponse extends ResponseDecorator
{
    public function json(): string
    {
        $content = $this->response->primitiveContent();

        return json_encode($content);
    }
}