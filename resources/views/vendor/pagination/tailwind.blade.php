@if ($paginator->hasPages())

<!-- INICIO PAGINACAO -->
<nav aria-label="{{ __('Pagination Navigation') }}">

    <!-- INICIO LISTA DE ITENS -->
    <ul class="pagination">

        <!-- INICIO ICONE PAGINA ANTERIOR -->
        @if ($paginator->onFirstPage()) {{-- SE ESTOU NA PRIMEIRA PAGINA: DESABILITA --}}
            <li class="page-item disabled">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">&laquo; Anterior</a>
            </li>
        @else {{-- SE NAO ESTOU NA PRIMEIRA PAGINA: HABILITA --}}
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">&laquo; Anterior</a>
            </li>
        @endif
        <!-- FIM ICONE PAGINA ANTERIOR -->

        <!-- INICIO LISTA DE PAGINAS -->
        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage()) {{-- SE A PAGINA FOR A PAGINA ATUAL: DEIXAR DESTACADO --}}
                    <li class="page-item active">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                    @else {{-- SE A PAGINA NAO FOR A PAGINA ATUAL: DEIXAR NORMAL --}}
                    <li class="page-item">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    <li class="page-item">
                    @endif
                @endforeach
            @endif
        @endforeach
        <!-- FIM LISTA DE PAGINAS -->
        
        <!-- INICIO ICONE PROXIMA PAGINA -->
        @if ($paginator->hasMorePages()) {{-- SE TIVER MAIS PAGINAS: HABILITA --}}
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Próximo &raquo;</a>
        </li>
        @else {{-- SE NAO TIVER MAIS PAGINAS: DESABILITA --}}
        <li class="page-item disabled">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Próximo &raquo;</a>
        </li>
        @endif
        <!-- FIM ICONE PROXIMA PAGINA -->

    </ul>
    <!-- FIM LISTA DE ITENS -->

    <!-- INICIO DESCRICAO DOS REGISTROS --> 
    <p class="text-muted">Listando {{ $paginator->count() }} de {{ $paginator->total() }} registros.</p>
    <!-- FIM DESCRICAO DOS REGISTROS -->

</nav>
<!-- FIM PAGINACAO -->

@endif