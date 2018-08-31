@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="center">Editar Cidade</h2>

    <div class="row">
        <nav>
            <div class="nav-wrapper grey lighten-1">
                <div class="col s12">
                    <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                    <a href="{{ route('admin.cidades') }}" class="breadcrumb">Lista de Cidades</a>
                    <a href="#" class="breadcrumb">Editar Tipo</a>
                </div>
            </div>
        </nav>
    </div>
    
    <div class="row">
        <form action="{{ route('admin.cidades.atualizar', $registro->id) }}" method="post">
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="put"/>

            @include('admin.cidades._form')

            <button class="btn blue">Atualizar</button>
        </form>
    </div>

</div>

@endsection