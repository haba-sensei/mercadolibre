@extends('../layouts/web/content')
@section('subcontent')
<div id="homepage-3">
    <x-web.home-slider />
    <x-web.features />
    <x-web.promociones-1 />
    <livewire:web.home.lista-por-categoria  >
    <x-web.lista-por-tags :tags="$tags" :categories="$categories" />
</div>

@endsection


