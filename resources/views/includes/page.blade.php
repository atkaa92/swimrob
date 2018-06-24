@if ($paginator->lastPage() > 1)
    <div class="d-flex justify-content-center">
        <ul class="pagination">
            <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                <a href="{{ $paginator->url(1) }}" class="page-link">Предыдущий</a>
            </li>
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a href="{{ $paginator->url($i) }}" class="page-link">{{ $i }}</a>
                </li>
            @endfor
            <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                <a href="{{ $paginator->url($paginator->currentPage()+1) }}" class="page-link" >Cледующий</a>
            </li>
        </ul>
    </div>
@endif