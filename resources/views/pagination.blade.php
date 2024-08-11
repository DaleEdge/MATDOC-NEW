<div class="aiz-pagination">
    <?php
       // config
       $link_limit = 15; 
       ?>
    @if ($list->lastPage() > 1)
    <ul class="{{$class}} pagination">
       <li class="{{ ($list->currentPage() == 1) ? ' disabled' : '' }} page-item">
          <a class="page-link" href="{{ $list->url($list->currentPage()-1) }}"><</a>
       </li>
       <li class="{{ ($list->currentPage() == '1') ? ' active' : '' }} page-item">
          <a class="page-link" href="{{ $list->url(1) }}">{{ '1' }}</a>
       </li>
       <p style="margin-top: 6px;">...</p>
       @for ($i = 2; $i <= $list->lastPage(); $i++)
       <?php
          $half_total_links = floor($link_limit / 2);
          $from = $list->currentPage() - $half_total_links;
          $to = $list->currentPage() + $half_total_links;
          if ($list->currentPage() < $half_total_links) {
             $to += $half_total_links - $list->currentPage();
          }
          if ($list->lastPage() - $list->currentPage() < $half_total_links) {
              $from -= $half_total_links - ($list->lastPage() - $list->currentPage()) - 1;
          }
          ?>
       @if ($from < $i && $i < $to)
       @if($list->lastPage() != $i)
       <li class="{{ ($list->currentPage() == $i) ? ' active' : '' }} page-item">
          <a class="page-link" href="{{ $list->url($i) }}">{{ $i }}</a>
       </li>
       @endif
       @endif
       @endfor
       <p style="margin-top: 6px;">...</p>
       <li class="{{ ($list->currentPage() == $list->lastPage()) ? ' active' : '' }} page-item">
          <a class="page-link" href="{{ $list->url($list->lastPage()) }}">{{ $list->lastPage() }}</a>
       </li>
       <li class="{{ ($list->currentPage() == $list->lastPage()) ? ' disabled' : '' }} page-item">
          <a class="page-link" href="{{ $list->url($list->currentPage()+1) }}" >></a>
       </li>
    </ul>
    @endif
    <input id="current_page_number" value="{{$list->currentPage()}}" hidden>
 </div>