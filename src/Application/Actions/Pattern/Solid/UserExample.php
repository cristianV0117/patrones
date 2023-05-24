<?php

namespace App\Application\Actions\Pattern\Solid;

class UserExample
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sendMessage($message, $type)
    {
        if ($type === "email") {
            return $this->sendEmail($message);
        } elseif ($type === "sms") {
            return $this->sendSMS($message);
        } else {
            return "Tipo de mensaje no válido.";
        }
    }

    private function sendEmail($message): string
    {
        return "Enviando correo electrónico a {$this->name}: {$message}";
    }

    private function sendSMS($message): string
    {
        return "Enviando SMS a {$this->name}: {$message}";
    }
}

