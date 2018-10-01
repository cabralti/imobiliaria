<div class="input-field">
    <input type="text" name="nome" class="validate" value="{{ isset($registro->nome) ? $registro->nome: '' }}">
    <label for="nome">Nome:</label>
</div>
<div class="input-field">
    <input type="text" name="estado" class="validate" value="{{ isset($registro->estado) ? $registro->estado: '' }}">
    <label for="estado">Estado:</label>
</div>
<div class="input-field">
    <input type="text" name="sigla_estado" class="validate" value="{{ isset($registro->sigla_estado) ? $registro->sigla_estado: '' }}">
    <label for="sigla_estado">Sigla do Estado:</label>
</div>