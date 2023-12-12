<div class="form-group">
    <label for="inputName">Titulo</label>
    <input type="text" class="form-control" name="titulo" id="inputTitulo" value="{{old('titulo',$noticia->titulo)}}" />
    
    <label for="inputDescricao">Descricao</label>
    <input type="text" class="form-control" name="descricao" id="inputDescricao" value="{{old('descricao',$noticia->descricao)}}" />
{{-- 
    <label for="inputImagem">Imagem</label>
    <input type="text" class="form-control" name="imagem" id="inputImagem" value="{{old('imagem',$noticia->imagem)}}" /> --}}
</div>