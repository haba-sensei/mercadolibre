@extends('../layouts/web/content')

@section('subcontent')

{{-- Componentes Anonimos => resources/views/components/web/  --}}

    <x-web.descuento />

    <x-web.menu-desk />
    <x-web.menu-mobile />

    <x-web.home-slider />

    <div id="homepage-3">

        <x-web.features />

        <x-web.promociones-1 />

        {{-- aqui van los componentes dinamicos --}}

        <x-web.oferta-dia />

        <x-web.lista-por-categorias />


        {{-- fin  --}}

        <x-web.newsletter />

        <x-web.footer />

        <x-web.addons />

        <x-web.search />

    </div>




@endsection













{{-- <x-app-layout></x-app-layout> --}}
