<?php 

namespace App\infra\Controllers;

use App\infra\Database\MySql;
use App\Domain\Entities\Cliente;
use App\Domain\Repositories\ClienteRepository;

class ClienteController implements ClienteRepository
{
    private \PDO $conn;

    public function __construct()
    {
        $this->conn = MySql::getInstance()->conexao("microServices", "localhost", "root", "");
    }

    public function salvar(Cliente $cliente): bool
    {
        $sql = "INSERT INTO cliente (id,nome, sobrenome, email, telefone, celular, senha, descricao, cpf, data_nasc) VALUES (:id, :nome, :sobrenome, :email, :telefone, :celular, :senha, :descricao, :cpf, :data_nasc)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            "id" => $cliente->getId(),
            "nome" => $cliente->getNome(),
            "sobrenome" => $cliente->getSobrenome(),
            "email" => $cliente->getEmail(),
            "telefone" => $cliente->getTelefone(),
            "celular" => $cliente->getCelular(),
            "senha" => $cliente->getSenha(),
            "descricao" => $cliente->getDescricao(),
            "cpf" => $cliente->getCpf(),
            "data_nasc" => $cliente->getData_nasc()
        ]);
        return true;
    }

    public function verificarId(int $id): array
    {
        $result = [];
        $sql = "SELECT id FROM cliente WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(["id" => $id]);
        $result = $stmt->fetchAll();
        return $result;
    }
}



?>