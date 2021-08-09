@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')

@section('subcontent')
    @if (session('info'))

        <input id="infomensaje" type="hidden" value="{{ session('info') }}">
        <input id="colormensaje" type="hidden" value="{{ session('color') }}">

    @endif


    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Mi Perfil
        </h2>
    </div>

    <livewire:admin.perfil.mi-perfil-component />


@endsection
