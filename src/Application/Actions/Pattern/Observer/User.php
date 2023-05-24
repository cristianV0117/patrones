<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Observer;

final class User implements NotificationObserver
{
    private array $notifications = [];

    public function __construct(private readonly string $name)
    {
    }

    public function update(string $message): void
    {
        $this->notifications[] = "Usuario {$this->name}: Has recibido una notificacion - {$message}";
    }

    public function notifications(): string
    {
        return json_encode($this->notifications);
    }
}