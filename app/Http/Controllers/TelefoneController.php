<?php

namespace App\Http\Controllers;

use App\Http\Requests\TelefoneValidate;
use App\Interfaces\Service\TelefoneServiceInterface;
use Facade\FlareClient\Http\Response;

class TelefoneController extends Controller
{

    /**
     * @var TelefoneServiceInterface
     */
    private $TelefoneService;

    public function __construct(TelefoneServiceInterface $TelefoneService)
    {
        $this->TelefoneService = $TelefoneService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return Response()->json($this->TelefoneService->listarTelefones([]));
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
    public function store(TelefoneValidate $request)
    {
        try {
            return Response()->json($this->TelefoneService->cadastrarTelefone($request->all()), 201);
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
            return Response()->json($this->TelefoneService->buscarTelefone($id));
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
    public function update(TelefoneValidate $request, $id)
    {
        try {
            return Response()->json($this->TelefoneService->atualizarTelefone($request->all(), $id));
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
            return Response()->json($this->TelefoneService->apagarTelefone($id));
        } catch (\Exception $exception) {
            return Response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    public function telefonePessoa($id)
    {
        try {
            return Response()->json($this->TelefoneService->listarPessoa($id));
        } catch (\Exception $exception) {
            return Response()->json(['error' => $exception->getMessage()], 500);
        }
    }
}
