<nav class="side-nav">

    <a href="" class="flex items-center pt-4 pl-2 intro-x">

        <x-admin.identidad />

    </a>
    <div class="my-6 side-nav__devider" style="background: white;"></div>
    <ul>

        @foreach ($side_menu as $menu)
        @can($menu['can'])

            @if ($menu == 'devider')
                <li class="my-6 side-nav__devider"></li>
            @else

                <li>

                    <a href="{{ isset($menu['menuPrincipal']) ? route('page', ['pageName' => $menu['page_name']]) : 'javascript:;' }}"
                        class="{{ $first_page_name == $menu['page_name'] ? 'side-menu side-menu--active' : 'side-menu' }}">
                        <div class="side-menu__icon" style=" color: {{ $first_page_name == $menu['page_name'] ? '#42707c;' : 'white;' }}">
                            <i data-feather="{{ $menu['icon'] }}"></i>
                        </div>
                        <div class="side-menu__title">
                            {{ $menu['title'] }}

                            @if (isset($menu['sub_menu']))
                                <i data-feather="chevron-down" class="side-menu__sub-icon"></i>
                            @endif
                        </div>
                    </a>

                    @if (isset($menu['sub_menu']))
                        <ul class="{{ $first_page_name == $menu['page_name'] ? 'side-menu__sub-open' : '' }}">
                            @foreach ($menu['sub_menu'] as $subMenu)
                                <li>
                                    <a href="{{ isset($subMenu['menuPrincipal']) ? route('page', ['pageName' => $subMenu['page_name']]) : 'javascript:;' }}"
                                        class="{{ $second_page_name == $subMenu['page_name'] ? 'side-menu side-menu--active' : 'side-menu' }}">
                                        <div class="side-menu__icon">
                                            <i data-feather="activity"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            {{ $subMenu['title'] }}
                                            @if (isset($subMenu['sub_menu']))
                                                <i data-feather="chevron-down" class="side-menu__sub-icon"></i>
                                            @endif
                                        </div>
                                    </a>
                                    @if (isset($subMenu['sub_menu']))
                                        <ul
                                            class="{{ $second_page_name == $subMenu['page_name'] ? 'side-menu__sub-open' : '' }}">
                                            @foreach ($subMenu['sub_menu'] as $lastSubMenu)
                                                <li>
                                                    <a href="{{ isset($lastSubMenu['menuPrincipal']) ? route('page', ['menuPrincipal' => $lastSubMenu['menuPrincipal'], 'pageName' => $lastSubMenu['page_name']]) : 'javascript:;' }}"
                                                        class="{{ $third_page_name == $lastSubMenu['page_name'] ? 'side-menu side-menu--active' : 'side-menu' }}">
                                                        <div class="side-menu__icon">
                                                            <i data-feather="zap"></i>
                                                        </div>
                                                        <div class="side-menu__title">{{ $lastSubMenu['title'] }}
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif

                </li>

            @endif
            @endcan
        @endforeach
        <li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" class="side-menu"
               onclick="event.preventDefault(); this.closest('form').submit();">
                <div class="side-menu__icon">
                    <i data-feather="toggle-right"></i>
                </div>
                <div class="side-menu__title">
                    Cerrar Session

                </div>
            </a>
        </form>
        </li>
    </ul>
</nav>
