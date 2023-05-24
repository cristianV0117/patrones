<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Adapter;

final class EmailNotification implements Notification
{
    public function __construct(private readonly Email $email)
    {
    }

    public function sendNotification(): string
    {
        return $this->email->__invoke();
    }
}