<tfoot>
    <tr class="active">
        <td colspan="8">
            <div class="text-right">
                <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0">
                    {{-- Lien vers la page précédente --}}
                    @if ($paginator->onFirstPage())
                        <li class="disabled page-item"><span>&laquo;</span></li>
                    @else
                        <li class="page-item">
                            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="page-link">&laquo;</a>
                        </li>
                    @endif

                    {{-- Lien vers chaque élément de la pagination --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="disabled page-item"><span>{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="active page-item"><span>{{ $page }}</span></li>
                                @else
                                    <li class="page-item"><a href="{{ $url }}"
                                            class="page-link">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Lien vers la page suivante --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="page-link">&raquo;</a>
                        </li>
                    @else
                        <li class="disabled"><span>&raquo;</span></li>
                    @endif
                </ul>

            </div>
        </td>
    </tr>
</tfoot>
