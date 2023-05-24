<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Builder;

final class UserBill extends User implements Bill
{
    private string $amount;

    private string $bank;

    public function setFullNameBill(string $fullName): void
    {
        $this->setFullName($fullName);
    }

    public function setEmailBill(string $email): void
    {
        $this->setEmail($email);
    }

    public function setAddressBill(string $address): void
    {
        $this->setAddress($address);
    }

    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
    }

    public function setBank(string $bank): void
    {
        $this->bank = $bank;
    }

    public function generateBill(): string
    {
        return json_encode([
            'fullName' => $this->fullName,
            'address' => $this->address,
            'email' => $this->email,
            'amount' => $this->amount,
            'bank' => $this->bank
        ]);
    }
}