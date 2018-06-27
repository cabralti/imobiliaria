@extends('layouts.site')

@section('content')
<div class="container">

    <div class="row section">
        <h3 class="center-align">Contato</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m7">
            <img src="{{ asset('img/modelo_img_home.jpg') }}" alt="Imagem" class="responsive-img">
        </div>
        <div class="col s12 m5">
            <form action="" class="col s12">
                <div class="input-field">
                    <input type="text" name="nome" class="validate">
                    <label for="nome">Nome:</label>
                </div>
                <div class="input-field">
                    <input type="email" name="email" class="validate">
                    <label for="nome">E-mail:</label>
                </div>
                <div class="input-field">
                    <textarea class="materialize-textarea" name="mensagem"></textarea>
                    <label for="nome">Mensagem:</label>
                </div>

                <button class="btn blue">Enviar</button>
            </form>
        </div>
    </div>
    
</div>
@endsection
