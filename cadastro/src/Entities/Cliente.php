<?php

namespace App\Entities;

use App\ValueObjects\Cpf;
use App\ValueObjects\Email;
use App\ValueObjects\Senha;

class Cliente 
{
    private int $id;
    private string $nome;
    private string $sobrenome;
    private Email $email;
    private string $telefone;
    private string $celular;
    private Senha $senha;
    private string $descricao;
    private Cpf $cpf;
    private \DateTime $data_nasc;
    private int $id_endereco;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setSobrenome(string $sobrenome): void
    {
        $this->sobrenome = $sobrenome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function setEmail(Email $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): Email
    {
        return $this->email;
    }

    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function setCelular(string $celular): void
    {
        $this->celular = $celular;
    }

    public function getCelular(): string
    {
        return $this->celular;
    }

    public function setSenha(Senha $senha): void
    {
        $this->senha = $senha;
    }

    public function getSenha(): Senha
    {
        return $this->senha;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setCpf(Cpf $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getCpf(): Cpf
    {
        return $this->cpf;
    }

    public function setData_nasc(\DateTime $data_nasc): void
    {
        $this->data_nasc = $data_nasc;
    }

    public function getData_nasc(): \DateTime
    {
        return $this->data_nasc;
    }

    public function setId_endereco(int $id_endereco): void
    {
        $this->id_endereco = $id_endereco;
    }

    public function getId_endereco(): int
    {
        return $this->id_endereco;
    }
}

?>