<?php

namespace App\Application\Actions\Pattern\Adapter;

interface Notification
{
    public function sendNotification(): string;
}