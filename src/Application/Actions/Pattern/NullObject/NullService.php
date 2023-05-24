<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\NullObject;

use App\Application\Actions\Pattern\NotificationService;

final class NullService implements NotificationService
{
    public function sendNotification(string $message)
    {
        return '';
    }
}