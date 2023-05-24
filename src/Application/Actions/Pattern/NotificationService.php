<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern;

interface NotificationService
{
    public function sendNotification(string $message);
}