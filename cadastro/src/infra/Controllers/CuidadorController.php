<?php 

namespace App\infra\Controllers;

use App\infra\Database\MySql;
use App\Domain\Entities\Cuidador;
use App\Domain\Repositories\CuidadorRepository;

class CuidadorController implements CuidadorRepository
{
    private \PDO $conn;

    public function __construct()
    {
        $this->conn = MySql::getInstance()->conexao("microServices", "localhost", "root", "");
    }

    public function salvar(Cuidador $cuidador): bool
    {
        $sql = "INSERT INTO cuidador (id, nome, sobrenome, email, telefone, celular, senha, descricao, cpf, data_nasc) VALUES (:id, :nome, :sobrenome, :email, :telefone, :celular, :senha, :descricao, :cpf, :data_nasc)";
        $stmt = $this->conn->prepare($sql);
        
        if ($cuidador->getEmail() == "" or $cuidador->getCpf() == "") {
            return false;
        }

        $stmt->execute([
            "id" => $cuidador->getId(),
            "nome" => $cuidador->getNome(),
            "sobrenome" => $cuidador->getSobrenome(),
            "email" => $cuidador->getEmail(),
            "telefone" => $cuidador->getTelefone(),
            "celular" => $cuidador->getCelular(),
            "senha" => $cuidador->getSenha(),
            "descricao" => $cuidador->getDescricao(),
            "cpf" => $cuidador->getCpf(),
            "data_nasc" => $cuidador->getData_nasc()
        ]);
        return true;
    }

    public function verificarId(int $id): array
    {
        $result = [];
        $sql = "SELECT id FROM cuidador WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(["id" => $id]);
        $result = $stmt->fetchAll();
        return $result;
    }
}



?>