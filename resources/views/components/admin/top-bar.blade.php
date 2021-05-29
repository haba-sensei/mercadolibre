@props(['ruta', 'pagename', 'titulo', 'userauth'])
<!-- BEGIN: TOP BAR -->
<div class="top-bar">
    <!-- BEGIN: BREADCRUMB -->
    <div class="mr-auto -intro-x breadcrumb sm:flex">
        <a href="{{ route('page', ['pageName' => 'home']) }}" class="uppercase">DashBoard</a>
        <i data-feather="chevron-right" class="breadcrumb__icon"></i>
{{-- BEGIN: MANEJADOR DE BREADCRUMBS --}}
        @switch($ruta)

            @case('listar')
                <a href="" class="uppercase breadcrumb--active"> {{ $titulo }} </a>
            @break

            @case('agregar')
            @case('editar')
            @case('actualizar')
            @case('perfil')
            @case('roles y permisos')
                <a href="{{ route('page', ['pageName' => $pagename ]) }}" class="uppercase breadcrumb"> {{ $titulo }} </a>
                <i data-feather="chevron-right" class="breadcrumb__icon"></i>
                <a href="" class="uppercase breadcrumb--active"> {{ $ruta }} </a>
            @break

        @endswitch
{{-- END: MANEJADOR DE BREADCRUMBS --}}
    </div>
    <!-- END: Breadcrumb -->

    <!-- BEGIN: MENU CUENTA | PERFIL | CERRAR SESSION -->
    <div class="w-8 h-8 intro-x dropdown">
        <div class="w-8 h-8 overflow-hidden rounded-full shadow-lg dropdown-toggle image-fit zoom-in">
            @if (isset($userauth->profile_photo_path))
                <img alt="profile pic" src="{{ asset('/storage/'.$userauth->profile_photo_path) }}">
            @else
                <img alt="profile pic" src="{{ asset('/storage/account.svg') }}">
            @endif
        </div>
        <div class="w-56 dropdown-box">
            <div class="text-white dropdown-box__content box bg-theme-38 dark:bg-dark-6">
                <div class="p-4 border-b border-theme-40 dark:border-dark-3">
                    <div class="font-medium">{{ $userauth->name }}</div>
                    <div class="text-xs text-theme-41 dark:text-gray-600">Desarrollador Full Stack</div>
                </div>
                <div class="p-2">
                    <a href="{{ route('web.home') }}" class="flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-theme-1 dark:hover:bg-dark-3">
                        <i data-feather="home" class="w-4 h-4 mr-2"></i> Index Ecommerce
                    </a>
                    <a href="" class="flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-theme-1 dark:hover:bg-dark-3">
                        <i data-feather="user" class="w-4 h-4 mr-2"></i> Perfil
                    </a>

                    <a href="" class="flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-theme-1 dark:hover:bg-dark-3">
                        <i data-feather="edit" class="w-4 h-4 mr-2"></i> Soporte
                    </a>

                </div>
                <div class="p-2 border-t border-theme-40 dark:border-dark-3">

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}" class="flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-theme-1 dark:hover:bg-dark-3" role="menuitem"
                          onclick="event.preventDefault(); this.closest('form').submit();">
                          <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Cerrar Sesion
                        </a>

                      </form>

                </div>
            </div>
        </div>
    </div>
    <!-- END: MENU CUENTA -->
</div>
<!-- END: TOP BAR -->
