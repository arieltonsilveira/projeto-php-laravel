<?php


namespace App\Service;

use App\Interfaces\Service\TelefoneServiceInterface as TelefoneServiceInterface;
use App\Interfaces\Repository\TelefoneRepositoryInterface;

class TelefoneService implements TelefoneServiceInterface
{

    /**
     * @var TelefoneRepositoryInterface
     */
    private $TelefoneRepository;

    public function __construct(TelefoneRepositoryInterface $TelefoneRepository)
    {
        $this->TelefoneRepository = $TelefoneRepository;
    }

    public function cadastrarTelefone(array $dado) {
        return $this->TelefoneRepository->create($dado);
    }

    public function atualizarTelefone(array $dado, int $id) {
        return $this->TelefoneRepository->update($dado, $id);
    }

    public function listarTelefones(array $filtro) {
        return $this->TelefoneRepository->show($filtro);
    }

    public function buscarTelefone(int $id) {
        return $this->TelefoneRepository->find($id);
    }

    public function apagarTelefone(int $id) {
        return $this->TelefoneRepository->destroy($id);
    }

    public function listarPessoa(int $id)
    {
        return $this->TelefoneRepository->listPeople($id);
    }
}
