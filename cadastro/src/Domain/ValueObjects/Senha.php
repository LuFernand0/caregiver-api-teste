<?php

namespace App\Domain\ValueObjects;

class Senha
{
    private string $senha;
    protected static string $senhaHash;
    protected static string $senhaOriginal;


    public function __construct(string $senha)
    {
        self::$senhaOriginal = $senha;
        self::$senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        return $this->senha = self::$senhaHash;
    }

    public function __toString(): string
    {
        return $this->senha;
    }
}

class SenhaOriginal extends Senha
{
    public static function getSenhaOriginal()
    {
        return parent::$senhaOriginal;
        // return password_verify(parent::$senhaOriginal, parent::$senhaHash);
    }
}

?>