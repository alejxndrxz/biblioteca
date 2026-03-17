@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-slate-800">Seleccionar Libro</h1>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden p-6">
        <div class="bg-blue-100 border border-blue-400 rounded-lg p-4 mt-6 mb-6">
            <h2 class="text-xl font-bold mb-4 text-blue-800">Usuario:</h2>
            <p><strong>ID:</strong> {{ $usuario->id }}</p>
            <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
            <p><strong>Email:</strong> {{ $usuario->email }}</p>
        </div>

        <form action="{{route('prestamos.store')}}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="libro" class="block text-gray-700 font-bold mb-2">Libro:</label>
                <select name="libro_id" id="libro" class="w-full border border-gray-300 rounded px-3 py-2" required>
                    <option value="">Seleccionar Libro</option>
                    @foreach($libros as $libro)
                        <option value="{{ $libro->id }}">{{ $libro->nombre }} - {{ $libro->autor }}</option>
                    @endforeach
                </select>
            </div>

            <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">

            <div class="mb-4">
                <input type="submit" value="Prestar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <a href="{{ route('prestamos.index') }}" class="ml-4 bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection