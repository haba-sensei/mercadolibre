<ul class="hidden py-5 border-t border-theme-24">
    @foreach ($side_menu as $menu)
        @if ($menu == 'devider')
            <li class="my-6 menu__devider"></li>
        @else
            <li>
                <a href="{{ isset($menu['menuPrincipal']) ? route('page', ['pageName' => $menu['page_name']]) : 'javascript:;' }}" class="{{ $first_page_name == $menu['page_name'] ? 'menu menu--active' : 'menu' }}">
                    <div class="menu__icon">
                        <i data-feather="{{ $menu['icon'] }}"></i>
                    </div>
                    <div class="menu__title">
                        {{ $menu['title'] }}
                        @if (isset($menu['sub_menu']))
                            <i data-feather="chevron-down" class="menu__sub-icon"></i>
                        @endif
                    </div>
                </a>
                @if (isset($menu['sub_menu']))
                    <ul class="{{ $first_page_name == $menu['page_name'] ? 'menu__sub-open' : '' }}">
                        @foreach ($menu['sub_menu'] as $subMenu)
                            <li>
                                <a href="{{ isset($subMenu['menuPrincipal']) ? route('page', ['pageName' => $subMenu['page_name']]) : 'javascript:;' }}" class="{{ $second_page_name == $subMenu['page_name'] ? 'menu menu--active' : 'menu' }}">
                                    <div class="menu__icon">
                                        <i data-feather="activity"></i>
                                    </div>
                                    <div class="menu__title">
                                        {{ $subMenu['title'] }}
                                        @if (isset($subMenu['sub_menu']))
                                            <i data-feather="chevron-down" class="menu__sub-icon"></i>
                                        @endif
                                    </div>
                                </a>
                                @if (isset($subMenu['sub_menu']))
                                    <ul class="{{ $second_page_name == $subMenu['page_name'] ? 'menu__sub-open' : '' }}">
                                        @foreach ($subMenu['sub_menu'] as $lastSubMenu)
                                            <li>
                                                <a href="{{ isset($lastSubMenu['menuPrincipal']) ? route('page', ['pageName' => $lastSubMenu['page_name']]) : 'javascript:;' }}" class="{{ $third_page_name == $lastSubMenu['page_name'] ? 'menu menu--active' : 'menu' }}">
                                                    <div class="menu__icon">
                                                        <i data-feather="zap"></i>
                                                    </div>
                                                    <div class="menu__title">{{ $lastSubMenu['title'] }}</div>
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
    @endforeach
</ul>