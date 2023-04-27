<div class="row">
    <div class="col">

        <p class="text-sm text-gray-700 leading-5">
            Menampilkan
            @if ($paginator->firstItem())
                <span class="font-medium">{{ $paginator->firstItem() }}</span>
                -
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
            @else
                {{ $paginator->count() }}
            @endif
            Dari
            <span class="font-medium">{{ $paginator->total() }}</span>
            Data
        </p>

        @if ($paginator->hasPages())
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-sm">
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                    @else
                        <li class="page-item"><a class="page-link"
                                href="{{ $paginator->previousPageUrl() }}">Previous</a></li>
                    @endif

                    @foreach ($elements as $element)
                        @if (is_string($element))
                            <li class="page-item disabled">{{ $element }}</li>
                        @endif
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active">
                                        <a class="page-link">{{ $page }}</a>
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
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    @endif
                </ul>
        @endif
        </nav>
    </div>
</div>
