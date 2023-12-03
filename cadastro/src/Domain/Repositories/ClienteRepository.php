<?php 

namespace App\Domain\Repositories;

use App\Domain\Entities\Cliente;

interface ClienteRepository
{
    public function salvar(Cliente $cliente): bool;
    public function verificarId(int $id): array;
}





?>