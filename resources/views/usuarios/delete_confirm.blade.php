@extends ('layout.admin')


@section('content')
<div class="container mx-auto px-4 py-8"> 
    <h1 class="text-2xl font-bold text-slate-800">Eliminar el usuario: {{ $usuario->name }}</h1>
<p class="mb-6">Estas seguro que deseas eliminar este usuario? Esta acción no se puede deshacer.</p>

<table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 border-b text-left text-sm font-medium text-gray-700">ID</th>
                <th class="px-6 py-3 border-b text-left text-sm font-medium text-gray-700">Nombre</th>
                <th class="px-6 py-3 border-b text-left text-sm font-medium text-gray-700">Email</th>
                <th class="px-6 py-3 border-b text-left text-sm font-medium text-gray-700">Tipo de Usuario</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap border-b">{{ $usuario->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap border-b">{{ $usuario->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap border-b">{{ $usuario->email }}</td>
                <td class="px-6 py-4 whitespace-nowrap border-b">{{ $usuario->user_type }}</td>
            </tr>
        </tbody>
</table>

<form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="mt-4 flex gap-2">
    @csrf
    @method('DELETE')

    <button
        type="submit"
        class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">    
        Eliminar
    </button>

    <a href="{{ route('usuarios.index') }}"
       class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
        Cancelar
    </a>
</form>
</div>
    @endsection