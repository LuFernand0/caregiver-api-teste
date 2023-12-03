<?php 

namespace App\Repositories;

use App\Entities\Cliente;

interface ClienteRepository
{
    public function salvar(Cliente $cliente): bool;
}





?>