<div class="input-field">
    <input type="text" name="titulo" class="validate" value="{{ isset($pagina->titulo) ? $pagina->titulo : '' }}">
    <label for="titulo">Título:</label>
</div>
<div class="input-field">
    <input type="text" name="decricao" class="validate"
           value="{{ isset($pagina->descricao) ? $pagina->descricao : '' }}">
    <label for="decricao">Descrição:</label>
</div>

@if(isset($pagina->email))
    <div class="input-field">
        <input type="email" name="email" class="validate" value="{{ isset($pagina->email) ? $pagina->email : '' }}">
        <label for="email">E-mail:</label>
    </div>
@endif

<div class="input-field">
    <textarea name="texto" id="texto" cols="30" rows="10" class="materialize-textarea">{{ isset($pagina->texto) ? $pagina->texto : '' }}
    </textarea>
    <label for="texto">Texto:</label>
</div>

<div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn">
            <span>Imagem</span>
            <input type="file" name="imagem">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validate">
        </div>
    </div>
    <div class="col m6 s12">
        @if(isset($pagina->imagem))
            <img src="{{ asset($pagina->imagem) }}" alt="" width="120">
        @endif
    </div>
</div>

<div class="input-field">
    <textarea name="mapa" id="mapa" cols="30" rows="10" class="materialize-textarea">{{ isset($pagina->mapa) ? $pagina->mapa : '' }}
    </textarea>
    <label for="texto">Mapa:</label>
</div>