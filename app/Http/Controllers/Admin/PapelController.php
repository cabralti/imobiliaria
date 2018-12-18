<?php

namespace App\Http\Controllers\Admin;

use App\Papel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PapelController extends Controller
{
    public function index()
    {
        $registros = Papel::all();

        return view('admin.papel.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.papel.adicionar');
    }

    public function salvar()
    {
        
    }
}
