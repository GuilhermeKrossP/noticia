<form action="{{ url('autor/'. $autor->id) }}" method="POST">
    @csrf
    @METHOD('put')
    <!-- Abaixo conferir se está igual na função edit controller -->
    <input value="{{$autor->nome}}" type="text" name="nome" placeholder="Time" required> 
    <button type="submit">Bora Carai</button>
</form>