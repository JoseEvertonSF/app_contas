<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoDespesa;
use App\Models\Despesas;
use App\Models\TableBeneficiario;

class DespesasController extends Controller
{
    public function index()
    {
        return view('menu_despesas');
    }

   
    public function formCadastroDespesa()
    {   
        $beneficiarios = TableBeneficiario::select('id', 'codigo', 'nome')->get();
        $tipoDespesas = TipoDespesa::all();
        $scripts = ['https://cdn.jsdelivr.net/npm/jquery-maskmoney@3.0.2/dist/jquery.maskMoney.min.js', 'assets/js/formataValor.js'];

        return view('cadastro_despesas', ['beneficiarios' => $beneficiarios, 'tipoDespesas' => $tipoDespesas, 'scripts' => $scripts]);
    }

    public function cadastrarDespesa(Request $request)
    {   
        $validacaoRequest = $request->validate([
            'tipo_despesa' => ['required'],
            'beneficiario' => ['required'],
            'emissao' => ['required'],
            'vencimento' => ['required'],
            'valor' => ['required'],
            'qtde_parcela' => ['required'],
            'tipo_valor' => ['required']
        ]);

        if(!empty($validacaoRequest)){
            $vencimento = $request->vencimento;
            $valor = str_replace(',', '.',str_replace('.', '', $request->valor));
            $valorFinal = $request->tipo_valor == 'total' ? floatval($valor) / intval($request->qtde_parcela) : $valor;
            for($parcela = 1 ; $parcela <=  $request->qtde_parcela; $parcela++){
                $despesa = new Despesas();
                $despesa->beneficiario = $request->beneficiario;
                $despesa->valor = $valorFinal;
                $despesa->parcela = $parcela;
                $despesa->emissao = $request->emissao;
                $despesa->vencimento = $vencimento;
                $despesa->tipo_despesa = $request->tipo_despesa;
                $despesa->save();

                $vencimento = date('Y-m-d', strtotime('+1 month', strtotime($vencimento)));
            }

            return redirect('/despesa/cadastro')->with('status', 'success')->with('mensagem', 'Despesa cadastrada com sucesso!');

        }
    }
}
