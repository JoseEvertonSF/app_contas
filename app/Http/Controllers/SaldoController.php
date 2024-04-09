<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saldo;

class SaldoController extends Controller
{
    public function formSaldoLancar()
    {   
        $scripts = ['https://cdn.jsdelivr.net/npm/jquery-maskmoney@3.0.2/dist/jquery.maskMoney.min.js', 'assets/js/formataValor.js'];
        return view('lancar_saldo', ['scripts' => $scripts]);
    }

    public function lancarSaldo(Request $request)
    {   
        $hora = date('H:i:s');
        $dataHora = $request->data.' '.$hora;
        $valor = str_replace(',', '.', str_replace('.', '', $request->valor));
        $saldo = new Saldo();
        $saldo->valor = $valor;
        $saldo->lancamento = 'M';
        $saldo->created_at = $dataHora;
        $saldo->save();

        return redirect('saldo')->with('status', 'success')->with('mensagem', 'Saldo registrado com sucesso!');
    }

    static function retornaSaldo()
    {
        $saldo = Saldo::orderBy('created_at', 'DESC')->first();
        if(isset($saldo->valor) && $saldo->count() > 0){
            return $saldo->valor;
        }

        return false;
    }
}
