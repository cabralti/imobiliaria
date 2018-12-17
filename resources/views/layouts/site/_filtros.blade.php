<div class="row">
    <form action="{{route('site.busca')}}">
        <div class="input-field col s6 m4">
            <select name="status" id="status">
                <option {{ isset($busca['status']) && $busca['status'] == 'todos' ? 'selected' : '' }} value="todos">Aluga e Vende</option>
                <option {{ isset($busca['status']) && $busca['status'] == 'aluga' ? 'selected' : '' }} value="aluga">Aluga</option>
                <option {{ isset($busca['status']) && $busca['status'] == 'vende' ? 'selected' : '' }} value="vende">Vende</option>
            </select>
            <label for="status">Status</label>
        </div>
        <div class="input-field col s6 m4">
            <select name="tipo_id" id="tipo_id">
                <option {{ isset($busca['tipo_id']) && $busca['tipo_id'] == 'todos' ? 'selected' : '' }} value="todos">Todos os Tipos</option>
                @foreach($tipos as $tipo)
                    <option {{ isset($busca['tipo_id']) && $busca['tipo_id'] == $tipo->id ? 'selected' : '' }} value="{{$tipo->id}}">{{$tipo->titulo}}</option>
                @endforeach
            </select>
            <label for="tipo_id">Tipo de imóvel</label>
        </div>
        <div class="input-field col s6 m4">
            <select name="cidade_id" id="cidade">
                <option {{ isset($busca['cidade_id']) && $busca['cidade_id'] == 'todos' ? 'selected' : '' }}  value="todos">Todas as Cidades</option>
                @foreach($cidades as $cidade)
                    <option {{ isset($busca['cidade_id']) && $busca['cidade_id'] == $cidade->id ? 'selected' : '' }}  value="{{$cidade->id}}">{{$cidade->nome}}</option>
                @endforeach
            </select>
            <label for="cidade">Cidade</label>
        </div>
        <div class="input-field col s6 m3">
            <select name="dormitorios" id="dormitorios">
                <option {{ isset($busca['dormitorios']) && $busca['dormitorios'] == '0' ? 'selected' : '' }}  value="0">Todos</option>
                <option {{ isset($busca['dormitorios']) && $busca['dormitorios'] == '1' ? 'selected' : '' }}  value="1">1</option>
                <option {{ isset($busca['dormitorios']) && $busca['dormitorios'] == '2' ? 'selected' : '' }}  value="2">2</option>
                <option {{ isset($busca['dormitorios']) && $busca['dormitorios'] == '3' ? 'selected' : '' }}  value="3">3</option>
                <option {{ isset($busca['dormitorios']) && $busca['dormitorios'] == '4' ? 'selected' : '' }}  value="4">Mais</option>
            </select>
            <label for="dormitorios">Dormitórios</label>
        </div>
        <div class="input-field col s12 m4">
            <select name="valor" id="valor">
                <option {{ isset($busca['valor']) && $busca['valor'] == '0' ? 'selected' : '' }} value="0">Todos os Valores</option>
                <option {{ isset($busca['valor']) && $busca['valor'] == '1' ? 'selected' : '' }} value="1">Até R$ 500,00</option>
                <option {{ isset($busca['valor']) && $busca['valor'] == '2' ? 'selected' : '' }} value="2">R$ 500,00 a 1.000,00</option>
                <option {{ isset($busca['valor']) && $busca['valor'] == '3' ? 'selected' : '' }} value="3">R$ 1.000,00 a 5.000,00</option>
                <option {{ isset($busca['valor']) && $busca['valor'] == '4' ? 'selected' : '' }} value="4">R$ 5.000,00 a 10.000,00</option>
                <option {{ isset($busca['valor']) && $busca['valor'] == '5' ? 'selected' : '' }} value="5">Acima de R$ 10.000,00</option>
            </select>
            <label for="valor">Valor</label>
        </div>
        <div class="input-field col s12 m3">
            <input type="text" class="validate" name="bairro" value="{{ isset($busca['bairro']) ? $busca['bairro'] : ''}}">
            <label for="bairro">Bairro</label>
        </div>
        <div class="input-field col s12 m2">
            <button class="btn deep-orange darken-1 right">Filtrar</button>
        </div>
    </form>
</div>