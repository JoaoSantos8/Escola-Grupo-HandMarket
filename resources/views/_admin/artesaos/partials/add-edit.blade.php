<div class="form-group">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" name="Nome" id="inputNome" value="{{ old('nome', $artesao->Nome) }}" />

    <label for="inputIdade">Idade</label>
    <input type="text" class="form-control" name="idade" id="inputIdade" value="{{ old('idade', $artesao->idade) }}" />

    <label for="inputTelefone">Telefone</label>
    <input type="text" class="form-control" name="telefone" id="inputTelefone" value="{{ old('telefone', $artesao->telefone) }}" />

    <label for="inputImage">Image</label>
    <input type="file" class="form-control-file" name="image" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">
        Please upload a valid file image. Size of image should not be more
        than 2MB </small>
</div>
