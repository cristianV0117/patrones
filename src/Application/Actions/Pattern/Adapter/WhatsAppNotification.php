<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Adapter;

final class WhatsAppNotification implements Notification
{
    public function __construct(private readonly WhatsApp $whatsApp)
    {
    }

    public function sendNotification(): string
    {
        return $this->whatsApp->__invoke();
    }
}