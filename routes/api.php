<?php

use App\Http\Controllers\Filtros;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\TelefoneController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('pessoa', PessoaController::class);
Route::resource('telefone', TelefoneController::class);

Route::get('pessoa/telefone/{pessoa_id}', [PessoaController::class, 'pessoaTelefone']);
Route::get('telefone/pessoa/{telefone_id}', [TelefoneController::class, 'telefonePessoa']);
