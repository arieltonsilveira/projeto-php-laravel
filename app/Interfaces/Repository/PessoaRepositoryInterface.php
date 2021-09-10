<?php


namespace App\Interfaces\Repository;


interface PessoaRepositoryInterface
{
    public function listFones(int $pessoa_id);
}
