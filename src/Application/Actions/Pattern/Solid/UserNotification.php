<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Solid;

final class UserNotification extends User
{
    public function __construct(
        private readonly Notification $notification,
        private string $name,
        private string $message
    )
    {
        parent::__construct($this->name);
    }

    public function sendNotification()
    {
        return $this->notification->notify($this->name, $this->message);
    }
}