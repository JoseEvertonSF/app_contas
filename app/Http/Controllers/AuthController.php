<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $credenciais = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect('/');
        }

        return redirect('login')->with('status', 'danger')->with('mensagem', 'Usuário ou senha incorretos!');
    }
}
