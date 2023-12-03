<?php 

namespace App\ValueObjects;

class Celular
{
    private string $celular;

    public function __construct(string $celular)
    {
        // Remover todos os caracteres que não são dígitos
        $celular = preg_replace('/[^0-9]/', '', $celular);

        // Verificar se o número tem 11 dígitos (incluindo o DDD)
        if (strlen($celular) === 11) {
            // Verificar se o DDD está dentro do intervalo válido para celulares no Brasil (11 a 99)
            $ddd = substr($celular, 0, 2);
            if ($ddd >= 11 && $ddd <= 99) {
                return $this->celular = $celular;
            }
        }
        if (strlen($celular) === 0 ) {
            return $this->celular = $celular;
        }

        return throw new \Exception('Número de telefone inválido');
    }

    public function __toString(): string
    {
        return $this->celular;
    }
}






?>