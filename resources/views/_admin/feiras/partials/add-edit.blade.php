<div class="form-group">
    
    <label for="inputNome">Nome</label>
    <input type="text"  class="form-control" name="nome" value="{{ old('feiraNome', $feira->feiraNome) }}">


    <br>
    <label for="inputUltimoD">Descrição</label>
    <input type="text" class="form-control" name="descricao" id="inputUltimoD" value="{{ old('feiraDescricao', $feira->feiraDescricao) }}">

    <br>
    <label for="inputImagem">Imagem</label>
    <input type="file" class="form-control" name="imagem" id="inputImagem" value="{{old('feiraImagemURL',$feira->feiraImagemURL)}}">

    <br>
    <label for="inputLocalizacao">Localização</label>
    <input type="text" class="form-control" name="localizacao" id="inputLocalizacao" value="{{ old('feiraLocalizacao', $feira->feiraLocalizacao) }}">

    <br>
    <label for="inputPrimeiroD">Primeiro Dia</label>
    <input type="date" class="form-control" name="dataInicio" id="inputPrimeiroD" value="{{ old('feiraDataInicio', $feira->feiraDataInicio) }}">

    <br>
    <label for="inputUltimoD">Último Dia</label>
    <input type="date" class="form-control" name="dataFim" id="inputUltimoD" value="{{ old('feiraDataFim', $feira->feiraDataFim) }}">

    <br>
    <label for="inputUltimoD">Preço - Entrada €</label>
    <input type="number" class="form-control" name="preco" id="inputUltimoD" value="{{ old('preco', $feira->feiraPreco) }}">

</div>
