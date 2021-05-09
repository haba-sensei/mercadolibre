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
                <a class="ps-logo" href="javascript:"><img src="{{ asset('dist/images/web/logo.png') }}" alt=""></a>
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
                    {{-- aqui va el carrito  --}}
                    <div class="ps-cart--mini"><a class="header__extra" href="#">
                        <i class="icon-bag2"></i><span><i>0</i></span></a>
                        <div class="ps-cart__content">
                            <div class="ps-cart__items">
                                <div class="ps-product--cart-mobile">
                                    <div class="ps-product__thumbnail">
                                        <a href="#"><img src="{{ asset('dist/images/web/products/clothing/7.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="ps-product__content"><a class="ps-product__remove" href="#"><i
                                                class="icon-cross"></i></a><a href="product-default.html">MVMTH
                                            Classical Leather Watch In Black</a>
                                        <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                    </div>
                                </div>
                                <div class="ps-product--cart-mobile">
                                    <div class="ps-product__thumbnail">
                                        <a href="#"><img src="{{ asset('dist/images/web/products/clothing/5.jpg') }} "
                                                alt=""></a>
                                    </div>
                                    <div class="ps-product__content"><a class="ps-product__remove" href="#"><i
                                                class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen
                                            Blend Caro Pane Shirt</a>
                                        <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-cart__footer">
                                <h3>Sub Total:<strong>$59.99</strong></h3>
                                <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn"
                                        href="checkout.html">Checkout</a></figure>
                            </div>
                        </div>
                    </div>


                    {{-- aqui va el login sys --}}
                    @auth
                    <a class="header__extra" href="{{ route('dash') }}" title="DASHBOARD"><i class="icon-speed-fast"></i></a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="header__extra" href="{{ route('logout') }}" title="LOGOUT"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                        ><i class="icon-user-lock"></i></a>

                    </form>
                    @else

                    <div class="ps-cart--mini"><a class="header__extra" title="LOGIN" href="javascript:">
                        <i class="icon-user-plus"></i> </a>

                        <div class="ps-cart__content" style="min-width: 234px; right: -22px; padding-top: 20px;">
                            <div class="ps-cart__items" style="padding: 0px;">
                                <div class="ps-product--cart-mobile menu__content" style="margin-bottom: 0px;">

                                        <ul class="menu--dropdown">

                                            <li><a href="{{ route('login') }}"><i class="icon-user"></i> LOGIN CLIENTE</a>
                                            </li>

                                             <li><a href="javascript:"><i class="icon-user"></i> LOGIN VENDEDOR</a>
                                            </li>
                                        </ul>

                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="ps-cart--mini"><a class="header__extra" title="REGISTRO" href="javascript:">
                        <i class="icon-register"></i> </a>

                        <div class="ps-cart__content" style="min-width: 234px; right: -22px; padding-top: 20px;">
                            <div class="ps-cart__items" style="padding: 0px;">
                                <div class="ps-product--cart-mobile menu__content" style="margin-bottom: 0px;">

                                        <ul class="menu--dropdown">

                                            <li><a href="javascript:"><i class="icon-register"></i> REGISTRO CLIENTE</a>
                                            </li>

                                                <li><a href="javascript:"><i class="icon-register"></i> REGISTRO VENDEDOR</a>
                                            </li>
                                        </ul>

                                </div>

                            </div>

                        </div>
                    </div>
                    @endauth


                </div>
            </div>
        </div>
    </div>

    <x-web.navegacion-desk :color="$color" :background="$background" :categories="$categories" />
</header>
