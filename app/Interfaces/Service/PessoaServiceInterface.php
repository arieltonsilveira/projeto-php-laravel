<?php

namespace App\Interfaces\Service;

interface PessoaServiceInterface
{
    public function cadastrarPessoa(array $dado);
    public function atualizarPessoa(array $dado, int $id);
    public function listarPessoas(array $filtro);
    public function buscarPessoa(int $id);
    public function apagarPessoa(int $id);
    public function listarTelefone(int $id);
}
