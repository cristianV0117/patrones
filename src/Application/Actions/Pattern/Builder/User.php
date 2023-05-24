<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Builder;

class User
{
    protected string $fullName;

    protected string $email;

    protected string $address;

    protected function setFullName(string $fullName): void
    {
        $this->fullName = $fullName;
    }

    protected function setEmail(string $email): void
    {
        $this->email = $email;
    }

    protected function setAddress(string $address): void
    {
        $this->address = $address;
    }
}