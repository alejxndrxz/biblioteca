@extends ('layout.admin')

@section ('content')

<div class="container mx-auto px-4 py-8">      
<h1 class="text-2xl font-bold mb-6">Agregar Nueva Categor ía</h1>         
    <div class="bg-white shadow rounded-lg p-6">

    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre de la Categoría:</label>
            <input type="text" name="nombre" id="nombre" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500" required>
        </div>

        <div class="mb-4">
         <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Guardar Categoría</button>
        <a href="{{ route('categorias.index') }}" class="ml-4 bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancelar</a>
        </div>
         </form>
    </div>
  @endsection