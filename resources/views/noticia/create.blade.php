<form action="{{ url('noticia') }}" method="POST">
    @csrf
    <input type="text" name="titulo" placeholder="titulo" required>
    <input name="conteudo" placeholder="conteudo" required></input>

    <label for="autor" class="block mb-2 text-sm font-medium text-gray-900">Autor</label>
    <select name="autor_id" id="autor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    <option selected>Escolha um Autor</option>
		@foreach($autores as $autor)
    <option value="{{ $autor->id}}">{{ $autor->nome }}</option>
		@endforeach
    </select>
    
    <label for="categoria" class="block mb-2 text-sm font-medium text-gray-900">Categoria</label>
    <select name="categoria_id" id="categoria" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    <option selected>Categoria</option>
		@foreach($categorias as $categoria)
    <option value="{{ $categoria->id}}">{{ $categoria->nome }}</option>
		@endforeach
    </select>
    <button type="submit">Cadastrar noticia</button>
</form>

