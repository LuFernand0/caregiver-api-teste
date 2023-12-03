<?php 

namespace App\Database;

use PDO;

class MySql implements Database
{
    private static MySql $instance;
    private \PDO $conn;

    public static function getInstance(): MySql
    {
        if (!isset(self::$instance)) {
            self::$instance = new MySql();
        }
        return self::$instance;
    }

    public function conexao($dbname, $host, $user, $password): \PDO
    {
        try {
            $this->conn = new PDO("mysql:dbname=$dbname;host=$host;charset=utf8", $user, $password);
            return $this->conn;
        } catch (\PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function desconectar() : void
    {
        $this->conn = null;
    }




}
?>