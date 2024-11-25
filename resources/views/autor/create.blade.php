<form action="{{ url('autor') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" required>
    <button type="submit">Create Product</button>
</form>