<?php

namespace App\Repository;

use App\Repository\AbstractRepository;
use App\Interfaces\Repository\TelefoneRepositoryInterface;
use App\Models\Telefone;

class TelefoneRepository extends AbstractRepository implements TelefoneRepositoryInterface
{
    public function __construct()
    {
        $this->model = new Telefone();
    }

    public function listPeople(int $telefone_id) {
        return $this->model->find($telefone_id)->with('pessoa')->get();
    }
}
