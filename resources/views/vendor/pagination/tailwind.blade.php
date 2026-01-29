@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}">
        <div class="flex justify-center mt-6 space-x-1">

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="px-3 py-1 text-sm font-medium text-gray-400 bg-gray-200 border border-gray-400 rounded-md cursor-not-allowed">
                &laquo; {{ __("Anterior")}}
            </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                   class="px-3 py-1 text-sm font-medium text-gray-700 bg-gray-100 border border-gray-400 rounded-md hover:bg-gray-200 transition">
                    &laquo; {{ __("Anterior")}}
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="px-3 py-1 text-sm font-medium text-gray-500 bg-gray-100 border border-gray-400 rounded-md cursor-default">
                    {{ $element }}
                </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            {{-- Página actual --}}
                            <span aria-current="page"
                                  class="px-3 py-1 text-sm font-medium text-white border border-gray-400 rounded-md"
                                  style="background-color: oklch(45% 0.24 277.023) !important;"> <!-- Azul oscuro real -->
                            {{ $page }}
                        </span>
                        @else
                            <a href="{{ $url }}"
                               class="px-3 py-1 text-sm font-medium text-gray-700 bg-gray-100 border border-gray-400 rounded-md hover:bg-gray-200 transition">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                   class="px-3 py-1 text-sm font-medium text-gray-700 bg-gray-100 border border-gray-400 rounded-md hover:bg-gray-200 transition">
                    {{ __("Siguiente")}} &raquo;
                </a>
            @else
                <span class="px-3 py-1 text-sm font-medium text-gray-400 bg-gray-200 border border-gray-400 rounded-md cursor-not-allowed">
                {{ __("Siguiente")}} &raquo;
            </span>
            @endif
        </div>
    </nav>
@endif
