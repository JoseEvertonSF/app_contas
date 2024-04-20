<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoDespesa;

class TipoDespesasController extends Controller
{
    public function formCadastroTipoDespesas()
    {   
        return view('cadastro_tipo_despesas');
    }

    public function cadastrarTipo(Request $request)
    {   
        if($request->nomenclatura !== null){
            $tipoDepesa = new TipoDespesa();
            $tipoDepesa->nomenclatura = $request->nomenclatura;
            $tipoDepesa->save();
    
            return redirect('/despesas/tipo/cadastro')->with('status', 'success')->with('mensagem', 'Tipo de despesa cadastrado com sucesso!');
        }

        return redirect('/despesas/tipo/cadastro')->with('status', 'warning')->with('mensagem', 'A nomenclatura deve ser preenchida!');
    }

    public function listarTipo()
    {
        $tiposDespesas = $ultimoCodigo = TipoDespesa::orderBy('id')->get();

        return view('listar_tipo_despesas', ['tipoDespesas' => $tiposDespesas]);
    }

    public function editarTipo(Request $request)
    {
        $validaRequest = $request->validate([
            'id' => ['required'],
            'nomenclatura' => ['required']
        ]);

        $verificaId = TipoDespesa::find($request->id);

        if(!empty($validaRequest) && $verificaId !== null){
            $tipoDespesa = TipoDespesa::find($request->id);
            $tipoDespesa->nomenclatura = $request->nomenclatura;
            $tipoDespesa->save();
            return redirect('despesas/tipo/lista')->with('status', 'success')->with('mensagem', 'Tipo de despesa editado!');
        }
        
    }

    public function excluirTipo(Request $request)
    {   
        $validaRequest = $request->validate([
            'id' => ['required']
        ]);
        $verificaId = TipoDespesa::find($request->id);

        if(!empty($validaRequest) && $verificaId !== null){
            $deleted = TipoDespesa::find($request->id)->delete();
            return redirect('despesas/tipo/lista')->with('status', 'warning')->with('mensagem', 'Tipo de despesa excluido!');
        }
        
    }

}
