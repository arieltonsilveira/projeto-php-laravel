<?php


namespace App\Service;

use App\Interfaces\Service\PessoaServiceInterface;
use App\Interfaces\Repository\PessoaRepositoryInterface;

class PessoaService implements PessoaServiceInterface
{

    /**
     * @var PessoaRepositoryInterface
     */
    private $pessoaRepository;

    public function __construct(PessoaRepositoryInterface $pessoaRepository)
    {
        $this->pessoaRepository = $pessoaRepository;
    }

    public function cadastrarPessoa(array $dado) {
        return $this->pessoaRepository->create($dado);
    }

    public function atualizarPessoa(array $dado, int $id) {
        return $this->pessoaRepository->update($dado, $id);
    }

    public function listarPessoas(array $filtro) {
        return $this->pessoaRepository->show($filtro);
    }

    public function buscarPessoa(int $id) {
        return $this->pessoaRepository->find($id);
    }

    public function apagarPessoa(int $id) {
        return $this->pessoaRepository->destroy($id);
    }

    public function listarTelefone(int $id) {
        return $this->pessoaRepository->listFones($id);
    }

}
