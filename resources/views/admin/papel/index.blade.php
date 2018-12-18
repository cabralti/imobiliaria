@extends('layouts.app')

@section('content')

    <div class="container">
        <h2 class="center">Lista de Papéis</h2>

        <div class="row">
            <a class="btn blue right" href="{{ route('admin.papel.adicionar') }}" title="Adicionar Papel">
                <i class="material-icons">add</i>
            </a>
        </div>

        <div class="row">
            <nav>
                <div class="nav-wrapper grey lighten-1">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                        <a href="#" class="breadcrumb">Lista de Papéis</a>
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
                    <th>Descrição</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>

                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->nome }}</td>
                        <td>{{ $registro->descricao }}</td>
                        <td>
                            @if($registro->nome != 'admin')

                                <a class="btn orange" href="{{ route('admin.papel.editar', $registro->id) }}">Editar</a>
                                <a class="btn red" href="javascript: if(confirm('Deletar esse registro?')){
                                window.location.href = '{{ route('admin.papel.deletar', $registro->id) }}'
                            }">Deletar</a>
                            @else

                                <a class="btn orange disabled" href="{{ route('admin.papel.editar', $registro->id) }}">Editar</a>
                                <a class="btn red disabled" href="javascript: if(confirm('Deletar esse registro?')){
                                window.location.href = '{{ route('admin.papel.deletar', $registro->id) }}'
                            }">Deletar</a>
                            @endif
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection