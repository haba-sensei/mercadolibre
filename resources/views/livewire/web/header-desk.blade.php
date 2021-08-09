<header class="header header--standard header--market-place-1" data-sticky="true">

    <div class="header__content " style="background: {{ $background }}; color: {{ $color }};">
        <div class="container">
            <div class="header__content-left">
                <div class="menu--product-categories">
                    <div class="menu__toggle"><i class="icon-menu"></i><span style="color: {{ $color }};"> LISTA
                            DE CATEGORIAS </span></div>
                    <div class="menu__content">
                        <ul class="menu--dropdown">

                            <x-web.lista-categorias :categories="$categories" />

                        </ul>
                    </div>
                </div>
                <a class="ps-logo" href="{{ route('web.home') }}"><img src="{{ asset('dist/images/web/logo.png') }}" alt=""></a>
            </div>
            <div class="header__content-center">
                <form class="ps-form--quick-search" action="javascript:" method="get">

                    <input class="form-control" type="text" placeholder="Buscador de productos...">
                    <button>Buscar</button>
                </form>
            </div>
            <div class="header__content-right">
                <div class="header__actions">

                    {{-- aqui va el whishlist --}}
                    <a class="header__extra" href="#"><i class="icon-heart"></i><span><i>0</i></span></a>
                    {{-- aqui va el carrito --}}

                    <livewire:web.shopcart.shopping-cart-mini-component />

                    {{-- aqui va el login sys --}}
                    @auth
                        <a class="header__extra" href="{{ route('dash') }}" title="DASHBOARD"><i
                                class="icon-speed-fast"></i></a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="header__extra" href="{{ route('logout') }}" title="LOGOUT"
                                onclick="event.preventDefault(); this.closest('form').submit();"><i
                                    class="icon-user-lock"></i></a>

                        </form>
                    @else
                    <a class="header__extra" href="{{ route('login') }}" title="LOGIN">
                        <i class="icon-user-plus"></i> </a>

                    <a class="header__extra" href="{{ route('register') }}" title="REGISTRO">
                        <i class="icon-register"></i> </a>
                    @endauth


                </div>
            </div>
        </div>
    </div>

    <x-web.navegacion-desk :color="$color" :background="$background" :categories="$categories" />
</header>
