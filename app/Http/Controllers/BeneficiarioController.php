<?php

namespace App\Http\Controllers;

use App\Models\TableBeneficiario;
use Illuminate\Http\Request;

class BeneficiarioController extends Controller
{
    public function index()
    {
        return view('menu_beneficiario');
    }

    public function viewCadastro()
    {
        return view('cadastro_beneficiario', ['scripts' => ['https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js', 'assets/js/formataCgc.js']]);
        
    }

    public function cadastrar(Request $request)
    {   
        $validateRequest = $request->validate([
            'cgc' => ['required'],
            'tipo_pessoa' => ['required'],
            'nome' => ['required']
        ]);

        if(!empty($validateRequest)){
            $codigo = date('d')+date('m')+date('y')+date('h').date('i').date('s');
            $verifyBeneficiario = TableBeneficiario::where('cgc', $request->cgc)->count();
            if($verifyBeneficiario == 0){
                $beneficiario = new TableBeneficiario();
                $beneficiario->codigo = $codigo;
                $beneficiario->cgc = $request->cgc;
                $beneficiario->nome = $request->nome;
                $beneficiario->tipo = $request->tipo_pessoa;
                $beneficiario->save();
                return redirect('/beneficiario/cadastro')->with('status', 'success')->with('mensagem', 'Beneficiário cadastrado com sucesso!');
            }
            return redirect('/beneficiario/cadastro')->with('status', 'warning')->with('mensagem', 'Beneficiário já cadastrado!');
        }
        return redirect('/beneficiario/cadastro')->with('status', 'warning')->with('mensagem', 'Todos os dados devem ser preenchidos!');

    }

    public function listaBeneficiarios()
    {   
        $beneficiarios = TableBeneficiario::all();
        return view('lista_beneficiario', ['beneficiarios' => $beneficiarios]);
    }
}
