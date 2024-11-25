<form action="{{ url('categoria') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Name" required>
    <button type="submit">Create Product</button>
</form>