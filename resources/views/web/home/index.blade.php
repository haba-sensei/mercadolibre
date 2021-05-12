@extends('../layouts/web/content')

@section('subcontent')

{{-- Componentes Anonimos => resources/views/components/web/  --}}

    <x-web.descuento />

    <x-web.header-desk :color="$color" :background="$background" :categories="$categories" />

    <x-web.header-mobile :color="$color" :background="$background"  :mobilcolor="$mobilcolor" :mobilbackground="$mobilbackground"   />
    <x-web.menu-mobile :color="$color" :background="$background" :categories="$categories"   :mobilcolor="$mobilcolor" :mobilbackground="$mobilbackground"   />



    <div id="homepage-3">
        <x-web.home-slider />

        <x-web.features />

        <x-web.promociones-1 />

        {{-- aqui van los componentes dinamicos --}}
        
        <livewire:web.home.lista-por-categoria  >

        <x-web.lista-por-tags :tags="$tags" :categories="$categories" />

        {{-- fin  --}}

        <x-web.newsletter />


        <x-web.footer />
        <x-web.addons />

          <x-web.search />

    </div>
@endsection
