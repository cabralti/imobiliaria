@extends('layouts.app')

@section('content')

    <div class="container">
        <h2 class="center">Slides</h2>

        <div class="row">
            <a class="btn blue right" href="{{ route('admin.slides.adicionar') }}"
               title="Adicionar Imagem">
                <i class="material-icons">add</i>
            </a>
        </div>

        <div class="row">
            <nav>
                <div class="nav-wrapper grey lighten-1">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                        <a href="#" class="breadcrumb">Lista de Slides</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="row">
            <table class="striped">
                <thead>
                <tr>
                    <th>Ordem</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Publicado</th>
                    <th>Imagem</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>

                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->ordem }}</td>
                        <td>{{ $registro->titulo }}</td>
                        <td>{{ $registro->descricao }}</td>
                        <td>{{ $registro->publicado }}</td>
                        <td><img src="{{ asset($registro->imagem) }}" alt="" width="100"></td>
                        <td>
                            <a class="btn orange" href="{{ route('admin.slides.editar', $registro->id) }}">Editar</a>
                            <a class="btn red" href="javascript: if(confirm('Deletar esse registro?')){
                                window.location.href = '{{ route('admin.slides.deletar', $registro->id) }}'
                            }">Deletar</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection