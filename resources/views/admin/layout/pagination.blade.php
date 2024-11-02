<!-- pagination.blade.php -->
<nav class="text-center">
  <ul class="pagination">
      <li class="previous"><a href="{{ $paginator->previousPageUrl() }}"><span>&laquo;</span></a></li>
      @php
          $start = max(1, $paginator->currentPage() - 4);
          $end = min($paginator->lastPage(), $start + 9);
          // 調整頁籤範圍以確保始終顯示10個頁籤
          if ($end - $start < 9) {
              $start = max(1, $end - 9);
          }
      @endphp
      @for ($i = $start; $i <= $end; $i++)
          <li class="number {{ $paginator->currentPage() == $i ? 'active' : '' }}">
              <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
          </li>
      @endfor
      <li class="next"><a href="{{ $paginator->nextPageUrl() }}"><span>&raquo;</span></a></li>
  </ul>
</nav>
