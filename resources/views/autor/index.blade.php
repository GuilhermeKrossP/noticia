@foreach($autor as $a)
    <div>
        <h3>{{ $a->nome }}</h3>
        <a href="{{ url('autor/'. $a->id . '/edit') }}">Editar</a>
        <form action="{{ url('autor/'.$a->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </div>
@endforeach