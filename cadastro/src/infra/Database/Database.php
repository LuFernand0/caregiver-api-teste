<?php 

namespace App\infra\Database;

interface Database
{
    public function conexao($dbname, $host, $user, $password): \PDO;
    public function desconectar() : void;
}
?>