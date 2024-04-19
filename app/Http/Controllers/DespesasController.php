<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoDespesa;

class DespesasController extends Controller
{
    public function index()
    {
        return view('menu_despesas');
    }

    public function formCadastroDespesas()
    {   
        $ultimoCodigo = TipoDespesa::all()->max('id');
        $codigo = 1;

        if($ultimoCodigo != null){
            $codigo = $ultimoCodigo + 1;
        }

        return view('cadastro_tipo_despesas', ['codigo' => $codigo]);
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
}
