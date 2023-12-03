<?php

namespace App\ValueObjects;

class Senha
{
    private string $senha;
    private string $senhaHash;


    public function __construct(string $senha)
    {
        $this->senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        return $this->senha = $senha;
    }

    public function __toString(): string
    {
        return $this->senha;
    }

    public function getHash(): string
    {
        return $this->senhaHash;
    }
}



?>