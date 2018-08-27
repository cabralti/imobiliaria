@extends('layouts.app')

@section('content')

    <div class="container">
        <h2 class="center">Lista de Tipos</h2>

        <div class="row">
            <a class="btn blue right" href="{{ route('admin.tipos.adicionar') }}" title="Adicionar Tipos">
                <i class="material-icons">add</i>
            </a>
        </div>

        <div class="row">
            <nav>
                <div class="nav-wrapper grey lighten-1">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                        <a href="#" class="breadcrumb">Lista de Tipos</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="row">
            <table class="striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>

                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->titulo }}</td>
                        <td>
                            <a class="btn orange" href="{{ route('admin.tipos.editar', $registro->id) }}">Editar</a>
                            <a class="btn red" href="javascript: if(confirm('Deletar esse registro?')){
                                window.location.href = '{{ route('admin.tipos.deletar', $registro->id) }}'
                            }">Deletar</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection