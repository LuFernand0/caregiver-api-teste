<?php

namespace App\ValueObjects;


class Email
{
    private string $email;

    public function __construct(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return throw new \Exception("Email invalido!");
        }
    }

    public function __toString(): string
    {
        return $this->email;
    }
}

?>