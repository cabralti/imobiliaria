<?php

namespace App\Http\Controllers\Admin;

use App\Galeria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imovel;

class GaleriaController extends Controller
{
    public function index($id)
    {
        $imovel = Imovel::find($id);
        $registros = $imovel->galeria()->orderBy('ordem')->get();
        return view('admin.galerias.index', compact('registros', 'imovel'));
    }

    public function adicionar($id)
    {
        
    }
}
