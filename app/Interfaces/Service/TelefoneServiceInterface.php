<?php

namespace App\Interfaces\Service;

interface TelefoneServiceInterface
{
    public function cadastrarTelefone(array $dado);
    public function atualizarTelefone(array $dado, int $id);
    public function listarTelefones(array $filtro);
    public function buscarTelefone(int $id);
    public function apagarTelefone(int $id);
    public function listarPessoa(int $id);
}
