

<h1>Lista de Feiras</h1>

<ul>
    @foreach ($novafeiras as $novafeira)
        <li>
            <strong>Nome:</strong> {{ $novafeira->nome }}<br>
            <strong>Localização:</strong> {{ $novafeira->localizacao }}<br>
            <strong>Data de Início:</strong> {{ $novafeira->data_inicio }}<br>
            <strong>Data de Fim:</strong> {{ $novafeira->data_fim }}<br>
        </li>
    @endforeach
</ul>

<a href="{{ route('novaFeira') }}" class="btn btn-primary">Criar Nova Feira</a>
