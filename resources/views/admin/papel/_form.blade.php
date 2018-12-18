<div class="input-field">
    <input type="text" name="nome" class="validate" value="{{ isset($registro->nome) ? $registro->nome: '' }}">
    <label for="nome">Nome:</label>
</div>
<div class="input-field">
    <input type="text" name="descricao" class="validate" value="{{ isset($registro->descricao) ? $registro->descricao: '' }}">
    <label for="descricao">Descrição:</label>
</div>