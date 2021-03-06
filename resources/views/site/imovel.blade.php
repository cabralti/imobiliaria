@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row section">
            <h3 class="center-align">Imóvel</h3>
            <div class="divider"></div>
        </div>
        <div class="row section">
            <div class="col s12 m8">
                @if($imovel->galeria()->count())
                    <div class="slider">
                        <ul class="slides">
                            @foreach($galeria as $imagem)
                                <li>
                                    <img src="{{ asset($imagem->imagem) }}" alt="" class="responsive-img">
                                    <div class="caption {{$direcaoImagem[rand(0,2)]}}">
                                        <h3>{{$imagem->titulo}}</h3>
                                        <h5>{{$imagem->descricao}}</h5>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="row center-align">
                        <button onclick="sliderPrev()" class="btn blue">Anterior</button>
                        <button onclick="sliderNext()" class="btn blue">Próximo</button>
                    </div>
                @else
                    <img src="{{asset($imovel->imagem)}}" class="responsive-img"/>
                @endif
            </div>
            <div class="col s12 m4">
                <h4>{{ $imovel->titulo }}</h4>
                <blockquote>
                    {{ $imovel->descricao }}
                </blockquote>
                <p><b>Código: </b> {{ $imovel->id }}</p>
                <p><b>Status: </b> {{ $imovel->status }}</p>
                <p><b>Tipo: </b> {{ $imovel->tipo->titulo }}</p>
                <p><b>Dormitórios: </b> {{ $imovel->dormitorios }}</p>
                <p><b>Endereço: </b> {{ $imovel->endereco }}</p>
                <p><b>CEP: </b> {{ $imovel->cep }}</p>
                <p><b>Cidade: </b> {{ $imovel->cidade->nome }}</p>
                <p><b>Valor:</b> R$ {{ number_format($imovel->valor, '2', ',', '.') }}</p>

                <a href="{{ route('site.contato') }}" class="btn deep-orange darken-1">Entrar em contato</a>
            </div>
        </div>
        <div class="row section">
            <div class="col s12 m8">
                <div class="video-container">
                    {!! $imovel->mapa !!}
                </div>
            </div>
            <div class="col s12 m4">
                <h4>Detalhes:</h4>
                <p>
                    {{ $imovel->detalhes }}
                </p>
            </div>
        </div>
    </div>
@endsection
