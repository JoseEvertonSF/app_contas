<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SaldoController;

class HomeController extends Controller
{
    public function index()
    {   $tiposLancamento = ['M' => 'Manualmente', 'A' => 'Automatico'];

        //saldo
        $saldo = SaldoController::retornaSaldo();
        $saldoFormat = $saldo == false ? '0,00' : number_format($saldo, 2, ',', '.');

        // Saldo + lançamentos futuros
        $valoresFuturos = SimulacaoController::retornaSimulacao();
        $lancamentosFuturos = number_format(($saldo + $valoresFuturos), 2, ',', '.');

        return view('home', 
            [
                'saldo' => ['valor' => $saldoFormat],
                'lanc_futuros' => ['valor' => $lancamentosFuturos]
            
            ]
        );
    }
}
