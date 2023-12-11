

<form action="/feira" method="POST">
    @csrf

    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required>

    <label for="localizacao">Localização:</label>
    <input type="text" name="localizacao" id="localizacao" required>

    <label for="data_inicio">Data de Início:</label>
    <input type="date" name="data_inicio" id="data_inicio" required>

    <label for="data_fim">Data de Fim:</label>
    <input type="date" name="data_fim" id="data_fim" required>

    <button type="submit">Nova Feira</button>
</form>
