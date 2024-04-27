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

    public function formListarDespesa()
    {
        return view('form_listar_despesas');
    }

    public function listarDepesa(Request $request)
    {
        $despesas = Despesas::select('despesas.id', 'codigo', 'beneficiario', 'nome', 'valor', 'parcela', 'emissao', 'vencimento', 'tipo_despesa', 'nomenclatura', 'despesas.updated_at')
                        ->join('tipo_despesa', 'despesas.tipo_despesa', '=', 'tipo_despesa.id' )
                        ->join('table_beneficiario', 'despesas.beneficiario', '=', 'table_beneficiario.id' )
                        ->whereBetween('vencimento', [$request->vencimento_inicial, $request->vencimento_final])
                        ->orderBy('id')->get();
        
        $beneficiarios = TableBeneficiario::select('id', 'codigo', 'nome')->get();
        $tipoDespesas = TipoDespesa::all();
        $scripts = ['https://cdn.jsdelivr.net/npm/jquery-maskmoney@3.0.2/dist/jquery.maskMoney.min.js', 'assets/js/formataValor.js'];

        return view('lista_despesas', [
                'despesas' => $despesas, 'beneficiarios' => $beneficiarios, 
                'tipoDespesas' => $tipoDespesas, 'scripts' => $scripts, 
                'vencimento_inicial' => $request->vencimento_inicial, 'vencimento_final' => $request->vencimento_final                        
        ]);

    }

    public function editarDespesa(Request $request)
    {
        $validateRequest = $request->validate([
            'tipo_despesa' => ['required'],
            'beneficiario' => ['required'],
            'emissao' => ['required'],
            'vencimento' => ['required'],
            'valor' => ['required']
        ]);

        if(!empty($validateRequest)){
            $dadosDespesa = Despesas::find($request->id);
            $colunaEdicao = array_diff($validateRequest, $dadosDespesa->toArray());
            if(count($colunaEdicao) == 0){
                return redirect("despesa/lista?vencimento_inicial=$request->vencimento_inicial&vencimento_final=$request->vencimento_final");
            }

            foreach($colunaEdicao as $key => $valor)
            {   
                $novoValor = $key == 'valor' ? str_replace(',', '.', str_replace('.', '', $request->valor)) : $valor;
                $dadosDespesa->$key = $novoValor;
            }
            $dadosDespesa->save();
            return redirect("despesa/lista?vencimento_inicial=$request->vencimento_inicial&vencimento_final=$request->vencimento_final")
                        ->with('status', 'success')->with('mensagem', 'Despesa editada!');
        }
    }

    public function deletarDespesa(Request $request)
    {   
        $validateRequest = $request->validate([
            'id' => ['required']
        ]);
        $verificaId = Despesas::find($request->id);

        if(!empty($validateRequest) && $verificaId !== null){
            $deleted = Despesas::find($request->id)->delete();
            return redirect("despesa/lista?vencimento_inicial=$request->vencimento_inicial&vencimento_final=$request->vencimento_final")
                        ->with('status', 'warning')->with('mensagem', 'Despesa excluida!');
        }
        
    }
}
