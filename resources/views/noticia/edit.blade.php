<form action="{{ url('/noticia', $noticia->id) }}" method="POST">
    @csrf
    @METHOD('put')
    <!-- Abaixo conferir se está igual na função edit controller -->
    <input value="{{$noticia->nome}}" type="text" name="nome" placeholder="Time" required> 
    <button type="submit">Reescrever</button>
</form>