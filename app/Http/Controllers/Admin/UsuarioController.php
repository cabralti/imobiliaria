<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth; //Utilizar o sistema de autenticação do Laravel
use App\User;   // Classe modelo

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

    public function sair(){
        Auth::logout();

        return redirect()->route('admin.login');
    }
    
    public function index(){
        //Pega todos os usuarios da tabela
        $usuarios = User::all();
        //dd($usuarios);

        return view('admin.usuarios.index', compact('usuarios'));
    }

    //Route::get()
    public function adicionar(){
        return view('admin.usuarios.adicionar');
    }

    //Route::post()
    public function salvar(Request $request){
        $dados = $request->all();

        /**
         * Para salvar um usuario preciso:
         * 1 - Modelo User
         * 2 - Criar novo usuario
         * 3 - Setar valores vindos do request
         * 4 - Salvar no BD através do método save()
         */
        
         $usuario = new User();
         $usuario->name = $dados['name'];
         $usuario->email = $dados['email'];
         $usuario->password = bcrypt($dados['password']);
         $usuario->save();

         \Session::flash('mensagem', ['msg'=>'Usuário adicionado com sucesso!', 'class'=>'green white-text']);

         return redirect()->route('admin.usuarios');
    }

    public function editar($id){
        $usuario = User::find($id);

        return view('admin.usuarios.editar', compact('usuario'));
    }

    public function atualizar(Request $request, $id){
        $usuario = User::find($id);
        $dados = $request->all();

        //Verifica se o usuario informou uma nova senha
        if(isset($dados['password']) && strlen($dados['password']) > 5){
            $dados['password'] = bcrypt($dados['password']);
        }else{
            unset($dados['password']);
        }

        $usuario->update($dados);

        
        \Session::flash('mensagem', ['msg'=>'Usuário atualizado com sucesso!', 'class'=>'green white-text']);

        return redirect()->route('admin.usuarios');
    }
}