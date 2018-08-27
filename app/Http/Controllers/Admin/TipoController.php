<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Tipo;

class TipoController extends Controller
{
    public function index()
    {
        //Pega todos os registros da tabela
        $registros = Tipo::all();

        return view('admin.tipos.index', compact('registros'));
    }

    //Route::get()
    public function adicionar()
    {
        return view('admin.tipos.adicionar');
    }

    //Route::post()
    public function salvar(Request $request)
    {
        $dados = $request->all();

        /**
         * Para salvar um usuario preciso:
         * 1 - Modelo User
         * 2 - Criar novo usuario
         * 3 - Setar valores vindos do request
         * 4 - Salvar no BD através do método save()
         */

        $registro = new Tipo();
        $registro->titulo = $dados['titulo'];
        $registro->save();

        \Session::flash('mensagem', ['msg' => 'Registro adicionado com sucesso!', 'class' => 'green white-text']);

        return redirect()->route('admin.tipos');
    }

    public function editar($id)
    {
        $registro = Tipo::find($id);

        return view('admin.tipos.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Tipo::find($id);
        $dados = $request->all();

        $registro->titulo = $dados['titulo'];
        $registro->update();


        \Session::flash('mensagem', ['msg' => 'Registro atualizado com sucesso!', 'class' => 'green white-text']);

        return redirect()->route('admin.tipos');
    }

    /*
     * Deletar, recebendo id
     * */
    public function deletar($id)
    {
        Tipo::find($id)->delete();
        \Session::flash('mensagem', ['msg' => 'Registro deletado com sucesso!', 'class' => 'green white-text']);

        return redirect()->route('admin.tipos');
    }
}
