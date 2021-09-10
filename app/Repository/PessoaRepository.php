<?php

namespace App\Repository;

use App\Repository\AbstractRepository;
use App\Interfaces\Repository\PessoaRepositoryInterface;
use App\Models\Pessoa;

class PessoaRepository extends AbstractRepository implements PessoaRepositoryInterface
{
    public function __construct()
    {
        $this->model = new Pessoa();
    }

    public function listFones(int $pessoa_id) {
        return $this->model->find($pessoa_id)->with('telefone')->get();
    }
}
