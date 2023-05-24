<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\NullObject;

use App\Application\Actions\Pattern\NotificationService;

final class EmailService implements NotificationService
{
    public function sendNotification(string $message)
    {
        return "Enviando notificacion por correo electronico: {$message}";
    }
}