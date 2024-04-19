<?php

use App\Http\Controllers\NubankController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaldoController;
use App\Http\Controllers\SimulacaoController;
use App\Http\Controllers\BeneficiarioController;
use App\Http\Controllers\DespesasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->middleware('auth');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/auth', [AuthController::class, 'auth']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register/create', [RegisterController::class, 'register']);

Route::get('/saldo', [SaldoController::class, 'formSaldoLancar'])->middleware('auth');
Route::post('/saldo/lancar', [SaldoController::class, 'lancarSaldo'])->middleware('auth');

Route::get('/simulacao', [SimulacaoController::class, 'index'])->middleware('auth');
Route::post('/simulacao/lancar', [SimulacaoController::class, 'lancarSimulacao'])->middleware('auth');
Route::get('/simulacao/listar', [SimulacaoController::class, 'listarSimulacao'])->middleware('auth');
Route::post('/simulacao/deletar', [SimulacaoController::class, 'deletarSimulacao'])->middleware('auth');

Route::get('/beneficiario', [BeneficiarioController::class, 'index'])->middleware('auth');
Route::get('/beneficiario/cadastro', [BeneficiarioController::class, 'viewCadastro'])->middleware('auth');
Route::post('/beneficiario/cadastro/create', [BeneficiarioController::class, 'cadastrar'])->middleware('auth');
Route::get('/beneficiario/lista', [BeneficiarioController::class, 'listaBeneficiarios'])->middleware('auth');
Route::post('/beneficiario/deletar', [BeneficiarioController::class, 'deletarBeneficiario'])->middleware('auth');
Route::post('/beneficiario/edit', [BeneficiarioController::class, 'editarBeneficiario'])->middleware('auth');

Route::get('/despesas', [DespesasController::class, 'index'])->middleware('auth');
Route::get('/despesas/tipo/cadastro', [DespesasController::class, 'formCadastroDespesas'])->middleware('auth');
Route::post('/despesas/tipo/cadastro/insert', [DespesasController::class, 'cadastrarTipo']);
Route::get('/despesas/tipo/lista', [DespesasController::class, 'listarTipo']);
Route::post('/despesas/tipo/lista/excluir', [DespesasController::class, 'excluirTipo']);
Route::post('/despesas/tipo/lista/editar', [DespesasController::class, 'editarTipo']);