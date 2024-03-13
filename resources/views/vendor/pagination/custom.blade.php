@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-outline">
            @if ($paginator->onFirstPage())
                <li class="page-item previous disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a href="#" class="page-link" tabindex="-1"><i class="previous"></i></a>
                </li>
            @else
                <li class="page-item previous">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="previous"></i></a>
                </li>
            @endif

            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page">
                                <a href="#" class="page-link">{{ $page }}</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item next">
                    <a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next" aria-label="@lang('pagination.next')"><i class="next"></i></a>
                </li>
            @else
                <li class="page-item next disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a href="#" class="page-link" tabindex="-1"><i class="next"></i></a>
                </li>
            @endif
        </ul>
    </nav>
@endif
