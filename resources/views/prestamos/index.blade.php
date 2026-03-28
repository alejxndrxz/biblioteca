@extends ('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-slate-800">Prestamos</h1>
        
        
        <a href="{{ route('prestamos.create') }}"  class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
            Crear Prestamo </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
     <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Libro</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Usuario</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Fecha</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Estatus</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Fecha de entrega</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Acciones</th>
                </tr>
            </thead>
            <tbody>
    @foreach ($prestamos as $prestamo)
    <tr>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $prestamo->id }}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $prestamo->libro->nombre }}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $prestamo->usuario->name }}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $prestamo->created_at->format('d/m/Y') }}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
            @if ($prestamo->estado == 'pendiente')
                <span class="px-2 py-1 text-xs font-semibold text-yellow-800 bg-yellow-200 rounded-full">Prestado</span>
            @else
                <span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-200 rounded-full">Entregado</span>
            @endif
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ ($prestamo->fecha_entrega) ? \Carbon\Carbon::parse($prestamo->fecha_entrega)->format('d/m/Y H:i') : '' }}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
        @if ($prestamo->estado == 'pendiente')
        <a href="{{ route('prestamos.entregar', $prestamo->id) }}" class="text-blue-600 hover:text-blue-900">Entregar</a>
    @endif
    </td>
</tr>
@endforeach
</tbody>
</table>
</div>
    </div>
    @endsection



