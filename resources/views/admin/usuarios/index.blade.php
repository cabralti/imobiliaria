@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="center">Lista de Usuarios</h2>

    <div class="row">
        <nav>
            <div class="nav-wrapper grey lighten-1">
            <div class="col s12">
                <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                <a href="#" class="breadcrumb">Lista de Usuários</a>
            </div>
            </div>
        </nav>
    </div>

    <div class="row">
        <table class="striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>

                @foreach($usuarios as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a class="btn orange" href="#">Editar</a>
                        <a class="btn red" href="#">Deletar</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>



@endsection