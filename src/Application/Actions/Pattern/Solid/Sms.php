<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Solid;

final class Sms implements Notification
{
    public function notify(string $name, string $message): string
    {
        return "Mensaje para SMS: {$message}";
    }
}