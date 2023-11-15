<div class="form-group">
    <label for="inputTitle">Titulo</label>
    <input type="text" class="form-control" name="title" id="inputTitle" value="" />
</div>
<div class="form-group">
    <label for="inputDate">Data</label>
    <input type="datetime_local" class="form-control" name="date" id="inputDate"/>
</div>
<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <textarea class="form-control" name="description" id="inputDescription"></textarea>
</div>
<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file" name="image" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div>
<div class="form-group">
    <label for="inputCategory">Categoria</label>
    <select name="category_id" id="inputCategory" class="form-control">
        <option value="xx" >1º Ano</option>
        <option value="xx" >2º Ano</option>
    </select>
</div>
