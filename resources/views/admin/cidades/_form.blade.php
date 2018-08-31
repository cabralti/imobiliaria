<div class="input-field">
    <input type="text" name="nome" class="validate" value="{{ isset($registro->nome) ? $registro->nome: '' }}">
    <label for="titulo">Nome:</label>
</div>
<div class="input-field">
    <input type="text" name="estado" class="validate" value="{{ isset($registro->estado) ? $registro->estado: '' }}">
    <label for="titulo">Estado:</label>
</div>
<div class="input-field">
    <input type="text" name="sigla_estado" class="validate" value="{{ isset($registro->sigla_estado) ? $registro->sigla_estado: '' }}">
    <label for="titulo">Sigla:</label>
</div>