<div class="form-group">
    <label for="inputName">Titulo</label>
    <input type="text" class="form-control" name="titulo" id="inputTitulo" value="{{old('titulo',$noticia->titulo)}}" />

    <label for="inputDescricao">Descricao</label>
    <input type="text" class="form-control" name="descricao" id="inputDescricao"
        value="{{old('descricao',$noticia->descricao)}}" />

    <label for="inputImage">Image</label>
    <input type="file" class="form-control-file" name="image" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">
        Please upload a valid file image. Size of image should not be more
        than 2MB </small>
</div>