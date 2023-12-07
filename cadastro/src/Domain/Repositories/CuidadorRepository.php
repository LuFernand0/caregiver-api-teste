<?php 

namespace App\Domain\Repositories;

use App\Domain\Entities\Cuidador;

interface CuidadorRepository
{
    public function salvar(Cuidador $cuidador): bool;
    public function verificarId(int $id): array;
}

?>