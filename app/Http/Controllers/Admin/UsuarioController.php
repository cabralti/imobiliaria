<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth; //Utilizar o sistema de autenticação do Laravel

class UsuarioController extends Controller
{
    public function login(Request $request){
        $dados = $request->all();
        //dd($dados);

        if(Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['password']])){
            \Session::flash('mensagem', ['msg'=>'Login realizado com sucesso!', 'class'=>'green white-text']);
            
            //Redirecionar o usuario para pagina principal
            return redirect()->route('admin.principal');
        }

        \Session::flash('mensagem', ['msg'=>'E-mail ou senha inválidos',
         'class'=>'red white-text']);
        return redirect()->route('admin.login');
    }
    
}
