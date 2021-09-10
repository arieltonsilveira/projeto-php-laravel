<?php

namespace App\Providers;

use App\Interfaces\Repository\AbstractRepositoryInterface;
use App\Interfaces\Repository\PessoaRepositoryInterface;
use App\Interfaces\Repository\TelefoneRepositoryInterface;
use App\Interfaces\Service\PessoaServiceInterface;
use App\Interfaces\Service\TelefoneServiceInterface;
use App\Repository\AbstractRepository;
use App\Repository\PessoaRepository;
use App\Repository\TelefoneRepository;
use App\Service\PessoaService;
use App\Service\TelefoneService;
use Illuminate\Support\ServiceProvider;

class CadastroProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AbstractRepositoryInterface::class, AbstractRepository::class);

        $this->app->bind(PessoaRepositoryInterface::class, PessoaRepository::class);
        $this->app->bind(PessoaServiceInterface::class, PessoaService::class);
        $this->app->bind(TelefoneRepositoryInterface::class, TelefoneRepository::class);
        $this->app->bind(TelefoneServiceInterface::class, TelefoneService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
