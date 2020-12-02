@if ($paginator->hasPages())
    
        <ul class="pagination pagination-lg justify-content-start">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="pagination__item pagination__item--prev disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <i class="fa fa-angle-left" aria-hidden="true"></i><span>Back</span>
                </li>
            @else
                <li class="pagination__item pagination__item--prev">
                    <a class="" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                        <i class="fa fa-angle-left" aria-hidden="true"></i><span>Back</span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="pagination__item disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="pagination__item active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li class="pagination__item"><a class="" href="{{ $url }}"><span>{{ $page }}</span></a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="pagination__item pagination__item--next">
                    <a class="" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        <span>Next</span><i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </li>
            @else
                <li class="pagination__item pagination__item--next disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span>Next</span><i class="fa fa-angle-right" aria-hidden="true"></i>
                </li>
            @endif
        </ul>
    
@endif
