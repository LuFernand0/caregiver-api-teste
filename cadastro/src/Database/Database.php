<?php 

namespace App\Database;

interface Database
{
    public function conexao($dbname, $host, $user, $password): \PDO;
    public function desconectar() : void;
}
?>