@extends('../layouts/admin/main')

@section('head')
    @yield('subhead')
@endsection

@section('content')
{{-- menu mobile --}}
     @include('../components/admin/menu-mobile')

    <div class="flex">
{{-- nav escritorio --}}
        @include('../components/admin/nav-desk')

        <div class="content">

            <x-admin.top-bar :ruta="$ruta" :titulo="$titulo[$page_name]['title']"  :pagename="$page_name" :userauth="$userauth" />

            @yield('subcontent')

        </div>

    </div>

@endsection
