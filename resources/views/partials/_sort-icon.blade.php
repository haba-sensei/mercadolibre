@if ($sortBy !== $campo)
 <img src="{{ asset('dist/images/sort.svg') }}" width="10" height="10"/>
@elseif($sortDirection == "asc")
<img src="{{ asset('dist/images/sort-up.svg') }}" width="10" height="10"/>
@else
<img src="{{ asset('dist/images/sort-down.svg') }}" width="10" height="10"/>
@endif
 