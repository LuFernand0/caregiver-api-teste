<?php


namespace App\Domain\Entities;

use App\Domain\ValueObjects\Celular;
use App\Domain\ValueObjects\Cpf;
use App\Domain\ValueObjects\Data_nasc;
use App\Domain\ValueObjects\Email;
use App\Domain\ValueObjects\Senha;


class Cuidador
{

    private int $id;
    private string $nome;
    private string $sobrenome;
    private Email $email;
    private string $telefone;
    private Celular $celular;
    private Senha $senha;
    private string $descricao;
    private Cpf $cpf;
    private Data_nasc $data_nasc;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        if (!isset($this->id)) {
            return 0;
        }
        return $this->id;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        if (!isset($this->nome)) {
            return "";
        }
        return $this->nome;
    }

    public function setSobrenome(string $sobrenome): void
    {
        $this->sobrenome = $sobrenome;
    }

    public function getSobrenome(): string
    {
        if (!isset($this->sobrenome)) {
            return "";
        }
        return $this->sobrenome;
    }

    public function setEmail(Email $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): Email
    {
        if (!isset($this->email)) {
            return new Email("");
        }
        return $this->email;
    }

    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

    public function getTelefone(): string
    {
        if (!isset($this->telefone)) {
            return "";
        }
        return $this->telefone;
    }

    public function setCelular(Celular $celular): void
    {
        $this->celular = $celular;
    }

    public function getCelular(): Celular
    {
        if (!isset($this->celular)) {
            return new Celular("");
        }
        return $this->celular;
    }

    public function setSenha(Senha $senha): void
    {
        $this->senha = $senha;
    }

    public function getSenha(): Senha
    {
        if (!isset($this->senha)) {
            return new Senha("");
        }
        return $this->senha;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getDescricao(): string
    {
        if (!isset($this->descricao)) {
            return "";
        }
        return $this->descricao;
    }

    public function setCpf(Cpf $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getCpf(): Cpf
    {
        if (!isset($this->cpf)) {
            return new Cpf("");
        }
        return $this->cpf;
    }

    public function setData_nasc(Data_nasc $data_nasc): void
    {
        $this->data_nasc = $data_nasc;
    }

    public function getData_nasc(): Data_nasc
    {
        if (!isset($this->data_nasc)) {
            return new Data_nasc("");
        }
        return $this->data_nasc;
    }
}


?>