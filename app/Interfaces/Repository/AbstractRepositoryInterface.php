<?php


namespace App\Interfaces\Repository;


interface AbstractRepositoryInterface
{
    public function create(array $dado);
    public function update(array $dado, int $id);
    public function show(array $filtro);
    public function find(int $id);
    public function destroy(int $id);
}
