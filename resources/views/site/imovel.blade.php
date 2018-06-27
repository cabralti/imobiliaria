@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row section">
        <h3 class="center-align">Imóvel</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m8">
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="{{ asset('img/modelo_detalhe_1.jpg') }}" alt="" class="responsive-img">
                        <div class="caption center-align">
                            <h3>Titulo da Imagem</h3>
                            <h5>Descrição do Slide</h5>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('img/modelo_detalhe_2.jpg') }}" alt="" class="responsive-img">
                        <div class="caption center-align">
                            <h3>Titulo da Imagem</h3>
                            <h5>Descrição do Slide</h5>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('img/modelo_detalhe_3.jpg') }}" alt="" class="responsive-img">
                        <div class="caption center-align">
                            <h3>Titulo da Imagem</h3>
                            <h5>Descrição do Slide</h5>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('img/modelo_detalhe_4.jpg') }}" alt="" class="responsive-img">
                        <div class="caption center-align">
                            <h3>Titulo da Imagem</h3>
                            <h5>Descrição do Slide</h5>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="row center-align">
                <button onclick="sliderPrev()" class="btn blue">Anterior</button>
                <button onclick="sliderNext()" class="btn blue">Próximo</button>
            </div>
        </div>
        <div class="col s12 m4">
            <h4>Título do Imóvel</h4>
            <blockquote>
               Descrição breve sobre o imóvel
            </blockquote>
            <p><b>Código: </b> 245</p>
            <p><b>Status: </b> Vender</p>
            <p><b>Tipo: </b> Alvenaria</p>
            <p><b>Endereço: </b> Centro</p>
            <p><b>CEP: </b> 68743-657</p>
            <p><b>Cidade: </b> Castanhal</p>
            <p><b>Valor:</b> R$ 200.000,00</p>

            <a href="{{ route('site.contato') }}" class="btn deep-orange darken-1">Entrar em contato</a>
        </div>
    </div>
</div>
@endsection
