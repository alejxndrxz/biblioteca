@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center gap-1">
        {{-- Botón Anterior --}}
        @if ($paginator->onFirstPage())
            <span class="px-4 py-2 rounded-full bg-slate-100 text-slate-400 text-sm cursor-not-allowed">
                Anterior
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" 
               class="px-4 py-2 rounded-full bg-white border border-slate-200 text-slate-700 text-sm hover:bg-slate-50 transition">
                Anterior
            </a>
        @endif

        {{-- Números de página --}}
        @foreach ($elements as $element)
            {{-- "Tres puntos" --}}
            @if (is_string($element))
                <span class="px-3 py-2 text-slate-400">{{ $element }}</span>
            @endif

            {{-- Array de links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="w-10 h-10 rounded-full bg-blue-600 text-white text-sm font-semibold flex items-center justify-center">
                            {{ $page }}
                        </span>
                    @else
                        <a href="{{ $url }}" 
                           class="w-10 h-10 rounded-full bg-white border border-slate-200 text-slate-700 text-sm hover:bg-slate-50 transition flex items-center justify-center">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Botón Siguiente --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" 
               class="px-4 py-2 rounded-full bg-white border border-slate-200 text-slate-700 text-sm hover:bg-slate-50 transition">
                Siguiente
            </a>
        @else
            <span class="px-4 py-2 rounded-full bg-slate-100 text-slate-400 text-sm cursor-not-allowed">
                Siguiente
            </span>
        @endif
    </nav>
@endif