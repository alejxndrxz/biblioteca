@extends ('layout.admin')

@section ('content')
<div class="container mx-auto px-4 py-8">      
  <h1 class="text-2xl font-bold mb-6">Categorías</h1>
    <a href="{{ route('categorias.create') }}" 
    class="mb-4 inline-block bg-blue-500 text-white 
    px-4 py-2 rounded hover:bg-blue-600">Agregar Categoría</a> 
    <br></br>
  <div class="bg-white shadow rounded-lg p-6">
    <table class="w-full table-auto">
      <thead>
        <tr class="bg-gray-100">
          <th class="px-4 py-2 text-left">ID</th>
          <th class="px-4 py-2 text-left">Nombre</th>
          <th class="px-4 py-2 text-left">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categorias as $categoria)
        <tr>
          <td class="border-t px-4 py-2">{{ $categoria->id }}</td>
          <td class="border-t px-4 py-2">{{ $categoria->nombre }}</td>
          <td class="border-t px-4 py-2">
          <a href="" class="text-blue-500 hover:text-blue-700 mr-2">Editar</a>
          <form action="" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button>
          </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    @endsection

