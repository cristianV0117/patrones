<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Solid;

final class WhatsApp implements Notification
{
    public function notify(string $name, string $message): string
    {
        return "Hola {$name} - Mensaje para WSSP: {$message}";
    }
}