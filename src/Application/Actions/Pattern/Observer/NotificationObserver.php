<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Observer;

interface NotificationObserver
{
    public function update(string $message): void;
}