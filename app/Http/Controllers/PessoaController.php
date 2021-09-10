<?php

namespace App\Http\Controllers;

use App\Http\Requests\PessoaValidate;
use App\Interfaces\Service\PessoaServiceInterface;
use Facade\FlareClient\Http\Response;

class PessoaController extends Controller
{

    /**
     * @var PessoaServiceInterface
     */
    private $pessoaService;

    public function __construct(PessoaServiceInterface $pessoaService)
    {
        $this->pessoaService = $pessoaService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return Response()->json($this->pessoaService->listarPessoas([]));
        } catch (\Exception $exception) {
            return Response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PessoaValidate $request)
    {
        try {
            return Response()->json($this->pessoaService->cadastrarPessoa($request->all()), 201);
        } catch (\Exception $exception) {
            return Response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return Response()->json($this->pessoaService->buscarPessoa($id));
        } catch (\Exception $exception) {
            return Response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, PessoaValidate $request)
    {
        try {
            return Response()->json($this->pessoaService->atualizarPessoa($request->all(), $id));
        } catch (\Exception $exception) {
            return Response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            return Response()->json($this->pessoaService->apagarPessoa($id));
        } catch (\Exception $exception) {
            return Response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    public function pessoaTelefone($id)
    {
        try {
            return Response()->json($this->pessoaService->listarTelefone($id));
        } catch (\Exception $exception) {
            return Response()->json(['error' => $exception->getMessage()], 500);
        }
    }
}
