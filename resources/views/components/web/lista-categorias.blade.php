@foreach ($categories as $category)

<li><a href="{{ route('web.products.show.categories', $category ) }}"><i class="icon-power"></i> {{ $category->name }}  </a>
</li>

@endforeach





