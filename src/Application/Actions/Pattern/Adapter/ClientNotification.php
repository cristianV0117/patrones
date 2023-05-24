<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Adapter;

final class ClientNotification
{
    public function __construct(
        private readonly Notification $notification
    )
    {
    }

    public function __invoke(): string
    {
        return $this->notification->sendNotification();
    }
}