@extends ('layout.admin')

@section ('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Editar Libro</h1>

    <form action="{{ route('libros.update', $libro->id) }}" method="POST" class="bg-white shadow rounded-lg p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-medium mb-2">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{ $libro->nombre }}"
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="mb-4">
            <label for="isbn" class="block text-gray-700 font-bold mb-2">ISBN:</label>
            <input type="text" name="isbn" id="isbn" value = "{{ $libro->isbn}}"
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="autor" class="block text-gray-700 font-bold mb-2">Autor:</label>
            <input type="text" name="autor" id="autor" value = "{{ $libro->autor}}"
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="editorial" class="block text-gray-700 font-bold mb-2">Editorial:</label>
            <input type="text" name="editorial" id="editorial" value = "{{ $libro->editorial}}"
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="categoria" class="block text-gray-700 font-bold mb-2">Categoría:</label>
            <select name ="categoria" id="categoria" 
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500" required>
                <option value=""></option>
               @foreach ($categorias as $categoria)
    <option value="{{ $categoria->id }}" {{ $libro->id_categoria == $categoria->id ? 'selected' : '' }}>
        {{ $categoria->nombre }}
    </option>
@endforeach    
            </select>
        </div>

<div class="flex items-center gap-4">
    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">Guardar Cambios </button>
    <a href ="{{route ('home')}}" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition-colors">  Cancelar</a>
</div>
        </form>
        </div>

@endsection
