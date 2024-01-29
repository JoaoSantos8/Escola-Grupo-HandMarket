<div class="form-group">
    <label for="inputNome">Nome</label>
    <input type="text" class="form-control" name="nome" id="inputNome" value="{{ old('nome', $produto->nome) }}" />

    <label for="inputDescricao">Descrição</label>
    <input type="text" class="form-control" name="descricao" id="inputDescricao"
        value="{{ old('descricao', $produto->descricao) }}" />

    <label for="inputImage">Image</label>
    <input type="file" class="form-control-file" name="image" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">
        Please upload a valid file image. Size of image should not be more
        than 2MB </small>
<div class="form-group">
    <label for="inputArtesao">Artesão</label>
    <select name="artesao_id" id="inputArtesao" class="form-control">
        @foreach ($artesaos as $artesao)
            <option value="{{ $artesao->id }}"
                {{ $artesao->id == old('artesao_id', $produto->artesao_id) ? 'selected' : '' }}>
                {{ $artesao->Nome }}
            </option>
        @endforeach
    </select>
</div>


</div>

{{-- <div class="form-group">
    <label for="inputArtesao">Artesão</label>
    <select name="artesao_id" id="inputArtesao" class="form-control">
        @foreach ($artesaos as $artesao)
            <option value="{{ $artesao->id }}"
                {{ old('artesao_id', $produto->artesao_id) == $artesao->id ? 'selected' : '' }}>
                {{ $artesao->Nome }}
            </option>
        @endforeach
    </select>
</div> --}}

