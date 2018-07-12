@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="center">Editar Usuário</h2>

    <div class="row">
        <nav>
            <div class="nav-wrapper grey lighten-1">
                <div class="col s12">
                    <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                    <a href="{{ route('admin.usuarios') }}" class="breadcrumb">Lista de Usuários</a>
                    <a href="#" class="breadcrumb">Editar Usuários</a>
                </div>
            </div>
        </nav>
    </div>
    
    <div class="row">
        <form action="{{ route('admin.usuario.atualizar', $usuario->id) }}" method="post">
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="put"/>

            @include('admin.usuarios._form')

            <button class="btn blue">Atualizar</button>
        </form>
    </div>

</div>

@endsection