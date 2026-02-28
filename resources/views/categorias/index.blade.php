@extends ('layout.admin')

@section ('content')
<div class="container mx-auto px-4 py-8">      
  <h1 class="text-2xl font-bold mb-6">Categorías</h1>
@if (session('success'))  
  <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
    {{ session('success') }}
</div>
@endif


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
        <tr class="hover:bg-gray-50 transition-colors">
          <td class="border-t px-4 py-2">{{ $categoria->id }}</td>
          <td class="border-t px-4 py-2 font-medium">{{ $categoria->nombre }}</td>
          <td class="border-t px-4 py-2">
            <div class="flex items-center gap-2">
              <!-- Botón Editar -->
              <a href="{{ route('categorias.edit', $categoria->id) }}" 
                 class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-blue-500 text-white text-sm font-medium rounded-lg hover:bg-blue-600 transition-colors shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                Editar
              </a>
              
              <!-- Botón Eliminar -->
              <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="inline" 
                    onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta categoría?');">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-red-500 text-white text-sm font-medium rounded-lg hover:bg-red-600 transition-colors shadow-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                  Eliminar
                </button>
              </form>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    @endsection

