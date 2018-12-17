<?php

namespace App\Http\Controllers\Site;

use App\Cidade;
use App\Slide;
use App\Tipo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imovel;

class HomeController extends Controller
{
    public function index()
    {
//        $imoveis = Imovel::all();
        $imoveis = Imovel::where('publicar', '=', 'sim')->orderBy('id', 'desc')->paginate(20);
        $slides = Slide::where('publicado', '=', 'sim')->orderby('ordem')->get();
        $tipos = Tipo::orderBy('titulo')->get();
        $cidades = Cidade::orderBy('nome')->get();
        $direcaoImagem = ['center-align', 'left-align', 'right-align'];

        $paginacao = true;

        return view('site.home', compact('imoveis', 'slides', 'direcaoImagem', 'tipos', 'cidades', 'paginacao'));
    }

    public function busca(Request $request)
    {
        $busca = $request->all();
        $tipos = Tipo::orderBy('titulo')->get();
        $cidades = Cidade::orderBy('nome')->get();

        $paginacao = false;

        // status
        if ($busca['status'] == 'todos') {
            $status = [
                ['status', '<>', null]
            ];
        } else {
            $status = [
                ['status', '=', $busca['status']]
            ];
        }

        // tipos
        if ($busca['tipo_id'] == 'todos') {
            $tipo = [
                ['tipo_id', '<>', null]
            ];
        } else {
            $tipo = [
                ['tipo_id', '=', $busca['tipo_id']]
            ];
        }

        // cidade
        if ($busca['cidade_id'] == 'todos') {
            $cidade = [
                ['cidade_id', '<>', null]
            ];
        } else {
            $cidade = [
                ['cidade_id', '=', $busca['cidade_id']]
            ];
        }

        // dormitorios
        $dormitorios = [
            ['dormitorios', '>=', '0'],
            ['dormitorios', '=', '1'],
            ['dormitorios', '=', '2'],
            ['dormitorios', '=', '3'],
            ['dormitorios', '>=', '4'],
        ];
        $numDormitorios = $busca['dormitorios'];

        // valor
        $valor = [
            [['valor', '>=', '0']],
            [['valor', '<=', '500']],
            [['valor', '>=', '500'], ['valor', '<=', '1000']],
            [['valor', '>=', '1000'], ['valor', '<=', '5000']],
            [['valor', '>=', '5000'], ['valor', '<=', '10000']],
            [['valor', '>=', '10000']],
        ];

        $numValor = $busca['valor'];

        // bairro
        if($busca['bairro'] != ''){
            $bairro = [
                ['endereco', 'like', '%'.$busca['bairro'].'%']
            ];
        }else{
            $bairro = [
                ['endereco', '<>', null]
            ];
        }

        // consulta
        $imoveis = Imovel::where('publicar', '=', 'sim')
            ->where($status)
            ->where($tipo)
            ->where($cidade)
            ->where([$dormitorios[$numDormitorios]])
            ->where($valor[$numValor])
            ->where($bairro)
            ->orderBy('id', 'desc')->get();

        return view('site.busca', compact('busca', 'imoveis', 'tipos', 'cidades', 'paginacao'));
    }
}