<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Solid;

interface Notification
{
    public function notify(string $name, string $message): string;
}