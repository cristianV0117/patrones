<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Solid;

final class Email implements Notification
{
    public function notify(string $name, string $message): string
    {
        return "Mensaje para email: {$message}";
    }
}