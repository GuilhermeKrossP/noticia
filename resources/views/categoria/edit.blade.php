<form action="{{ url('/categoria', $categoria->id) }}" method="POST">
    @csrf
    @METHOD('put')
    <!-- Abaixo conferir se está igual na função edit controller -->
    <input value="{{$categoria->nome}}" type="text" name="nome" placeholder="Time" required> 
    <button type="submit">Reescrever</button>
</form>