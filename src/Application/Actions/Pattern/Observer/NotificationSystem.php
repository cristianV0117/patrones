<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Observer;

final class NotificationSystem
{
    private array $observers = [];

    public function attach(NotificationObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function sendNotification(string $message): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }
}