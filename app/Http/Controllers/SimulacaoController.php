<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableLancFuturo;

class SimulacaoController extends Controller
{
    static function index()
    {   
        $scripts = ['https://cdn.jsdelivr.net/npm/jquery-maskmoney@3.0.2/dist/jquery.maskMoney.min.js', 'assets/js/formataValor.js'];
        return view('lancar_saldo_futuro', ['scripts' => $scripts]);
    }

    public function lancarSimulacao(Request $request)
    {   
        $valor = str_replace(',', '.', str_replace('.', '', $request->valor));
        $simulacao = new TableLancFuturo();
        $simulacao->valor = $valor;
        $simulacao->save();

        return redirect('/simulacao')->with('status', 'success')->with('mensagem', 'Simulação registrada com sucesso!');
    }

    static function retornaSimulacao()
    {
        $valor = TableLancFuturo::sum('valor');
        if($valor){
            return $valor;
        }
        return 0.00;
    }
}