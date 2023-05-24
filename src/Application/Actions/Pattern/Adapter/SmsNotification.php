<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Adapter;

final class SmsNotification implements Notification
{
    public function __construct(private readonly Sms $sms)
    {
    }

    public function sendNotification(): string
    {
        return $this->sms->__invoke();
    }
}