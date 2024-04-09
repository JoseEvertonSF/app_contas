<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $dadosUsuario = $request->validate([
            'nome' => ['required'],
            'dtnascimento' => ['required', 'date'],
            'email' => ['required', 'email'],
            'username' => ['required'],
            'senha' => ['required'],
        ]);

        if($dadosUsuario){
            $novoUsuario = new User();
            $novoUsuario->username = $request->username;
            $novoUsuario->password = Hash::make($request->senha);
            $novoUsuario->name = strtoupper($request->name);
            $novoUsuario->email = $request->email;
            $novoUsuario->data_nascimento = $request->dtnascimento;
            $novoUsuario->save();

            return redirect('login')->with('status', 'success')->with('mensagem', 'Usuário cadastrado com sucesso!');
        }

        return redirect('register')->with('status', 'danger')->with('mensagem', 'Preencha todos os dados para completar o cadastro!');
    }
}
