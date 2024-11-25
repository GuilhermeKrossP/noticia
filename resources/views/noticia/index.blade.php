@foreach($noticia as $n) 
<!-- o primeiro $ representa a variavel da funcão e o $ é o apelido da variavel para o foreach -->
    <div>
        <h3>Titulo:: {{ $n->titulo }}</h3>
        <p>Conteudo:: {{ $n->conteudo }}</p>
        <p>Nome:: {{ $n->autor->nome }}</p>
        <p>Categoria:: {{ $n->categoria->nome }}</p>
        <a href="{{ url('noticia/'.$n->id.'/edit') }}">Edit</a>
        <form action="{{ url('noticia/'.$n->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </div>

@endforeach