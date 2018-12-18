@extends('layouts.app')

@section('content')

    <div class="container">
        <h2 class="center">Lista de Usuarios</h2>

        <div class="row">
            <a class="btn blue right" href="{{ route('admin.usuarios.adicionar') }}" title="Adicionar Usuário">
                <i class="material-icons">add</i>
            </a>
        </div>

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
                            <a class="btn orange" href="{{ route('admin.usuario.editar', $user->id) }}">Editar</a>
                            <a class="btn blue" href="{{ route('admin.usuarios.papel', $user->id) }}">Papel</a>
                            <a class="btn red" href="javascript: if(confirm('Deletar esse registro?')){
                                window.location.href = '{{ route('admin.usuarios.deletar', $user->id) }}'
                            }">Deletar</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection