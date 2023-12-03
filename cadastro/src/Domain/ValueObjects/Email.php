<?php

namespace App\Domain\ValueObjects;


class Email
{
    private string $email;

    public function __construct(string $email)
    {
        if ($email === '') {
            return $this->email = $email;
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->email = $email;
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