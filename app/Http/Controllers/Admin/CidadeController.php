<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Cidade;

class CidadeController extends Controller
{
    public function index()
    {
        $registros = Cidade::all();

        return view('admin.cidades.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.cidades.adicionar');
    }

    //Route::post()
    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new Cidade;
        $registro->nome = $dados['nome'];
        $registro->estado = $dados['estado'];
        $registro->sigla_estado = $dados['sigla_estado'];

        $registro->save();

        \Session::flash('mensagem', ['msg' => 'Registro cadastrado com sucesso!', 'class' => 'green white-text']);

        return redirect()->route('admin.cidades');
    }

    public function editar($id)
    {

        $registro = Cidade::find($id);

        return view('admin.cidades.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {

        $registro = Cidade::find($id);
        $dados = $request->all();

        $registro->nome = $dados['nome'];
        $registro->estado = $dados['estado'];
        $registro->sigla_estado = $dados['sigla_estado'];

        $registro->update();

        \Session::flash('mensagem', ['msg' => 'Registro atualizado com sucesso!', 'class' => 'green white-text']);

        return redirect()->route('admin.cidades');
    }

    public function deletar($id)
    {
        $registro = Cidade::find($id);

        $registro->delete();

        \Session::flash('mensagem', ['msg' => 'Registro deletado com sucesso!', 'class' => 'green white-text']);

        return redirect()->route('admin.cidades');

    }
}
