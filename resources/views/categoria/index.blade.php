@foreach($categoria as $c)
    <div>
        <h3>{{ $c->nome }}</h3>
        <a href="{{ url('categoria/'.$c->id.'/edit') }}">Editar</a>
        <form action="{{ url('categoria/'.$c->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </div>
@endforeach