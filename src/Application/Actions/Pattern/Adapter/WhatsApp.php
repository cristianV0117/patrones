<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Adapter;

final class WhatsApp
{
    public function __invoke(): string
    {
        return "Notification from WhatsApp";
    }
}