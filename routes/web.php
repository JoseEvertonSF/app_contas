<?php

use App\Http\Controllers\NubankController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaldoController;
use App\Http\Controllers\SimulacaoController;
use App\Http\Controllers\BeneficiarioController;
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

Route::get('/saldo', [SaldoController::class, 'formSaldoLancar']);
Route::post('/saldo/lancar', [SaldoController::class, 'lancarSaldo']);

Route::get('/simulacao', [SimulacaoController::class, 'index']);
Route::post('/simulacao/lancar', [SimulacaoController::class, 'lancarSimulacao']);
Route::get('/simulacao/listar', [SimulacaoController::class, 'listarSimulacao']);
Route::post('/simulacao/deletar', [SimulacaoController::class, 'deletarSimulacao']);

Route::get('/beneficiario', [BeneficiarioController::class, 'index']);
Route::get('/beneficiario/cadastro', [BeneficiarioController::class, 'viewCadastro']);
Route::post('/beneficiario/cadastro/create', [BeneficiarioController::class, 'cadastrar']);
Route::get('/beneficiario/lista', [BeneficiarioController::class, 'listaBeneficiarios']);

