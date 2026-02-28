@extends ('layout.admin')


@section ('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Editar Categoría</h1>

    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST" class="bg-white shadow rounded-lg p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-medium mb-2">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{ $categoria->nombre }}" 
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
</div>
<div class="flex items-center gap-4">
    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">Guardar Cambios </button>
    <a href ="{{ route('categorias.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition-colors">  Cancelar</a>
</div>
        </form>
        </div>

@endsection