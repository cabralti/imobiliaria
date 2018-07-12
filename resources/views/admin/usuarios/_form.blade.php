<div class="input-field">
    <input type="text" name="name" class="validate" value="{{ isset($usuario->name) ? $usuario->name : '' }}">
    <label for="name">Nome:</label>
</div>
<div class="input-field">
    <input type="email" name="email" class="validate" value="{{ isset($usuario->email) ? $usuario->email : '' }}">
    <label for="email">E-mail:</label>
</div>
<div class="input-field">
    <input type="password" name="password" class="validate">
    <label for="password">Senha:</label>
</div>