<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\NullObject;

use App\Application\Actions\Pattern\NotificationService;

final class NotificationApp
{
    public function __construct(
        private readonly NotificationService $notificationService
    )
    {
    }

    public function notifyUser(
        string $message
    ): string
    {
        return $this->notificationService->sendNotification($message);
    }
}