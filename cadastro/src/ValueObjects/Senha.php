<?php

namespace App\ValueObjects;

class Senha
{
    private string $senha;

    public function __construct(string $senha)
    {
        return true;
    }

    public function __toString()
    {
        $this->senha;
    }
}



?>