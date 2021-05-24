<header class="header header--mobile" style="background: {{ $background }}; color: {{ $color }};  "
    data-sticky="true">

    <div class="navigation--mobile" style="background: {{ $background }};">
        <div class="navigation__left">
            <a class="ps-logo" href="javascript:"><img src="{{ asset('dist/images/web/logo_light.png') }}" alt=""></a>
        </div>
        <div class="navigation__right">
            <div class="header__actions">
                {{-- aca va el carrito --}}

                <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span
                            style="background: {{ $mobilbackground }};"><i
                                style="color: {{ $mobilcolor }};">0</i></span></a>
                    <div class="ps-cart__content">
                        <div class="ps-cart__items">
                            <div class="ps-product--cart-mobile">
                                <div class="ps-product__thumbnail">
                                    <a href="#"><img src="{{ asset('dist/images/web/products/clothing/7.jpg') }}"
                                            alt=""></a>
                                </div>
                                <div class="ps-product__content"><a class="ps-product__remove" href="#"><i
                                            class="icon-cross"></i></a><a href="javascript:">MVMTH Classical
                                        Leather Watch In Black</a>
                                    <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                </div>
                            </div>
                            <div class="ps-product--cart-mobile">
                                <div class="ps-product__thumbnail">
                                    <a href="#"><img src="{{ asset('dist/images/web/products/clothing/5.jpg') }}  "
                                            alt=""></a>
                                </div>
                                <div class="ps-product__content"><a class="ps-product__remove" href="#"><i
                                            class="icon-cross"></i></a><a href="javascript:">Sleeve Linen Blend
                                        Caro Pane Shirt</a>
                                    <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                </div>
                            </div>
                        </div>
                        <div class="ps-cart__footer">
                            <h3>Sub Total:<strong>$59.99</strong></h3>
                            <figure><a class="ps-btn" href="javascript:">View Cart</a><a class="ps-btn"
                                    href="javascript:">Checkout</a></figure>
                        </div>
                    </div>
                </div>


                @auth

                    <div class="ps-block--user-header " style="margin-right: 20px;">
                        <a title="DASHBOARD" href="{{ route('dash') }}">
                            <div class="ps-block__left"><i class="icon-speed-fast"></i></div>
                            <div class="ps-block__right">DASHBOARD</div>
                        </a>
                    </div>


                    <div class="ps-block--user-header">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                <div class="ps-block__left"><i class="icon-user-lock"></i></div>
                                <div class="ps-block__right">LOGOUT
                            </a>
                    </div>
                    </a>
                    </form>
                </div>


                @else



                    <div class="ps-block--user-header ps-cart--mini" style="margin-right: 20px;">
                        <a href="javascript:">
                            <div class="ps-block__left"><i class="icon-user-plus"></i></div>
                            <div class="ps-block__right">LOGOUT</div>
                        </a>


                        <div class="ps-cart__content" style="min-width: 234px; right: -30px; padding-top: 103px;     z-index: -1; ">
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

                    <div class="ps-block--user-header ps-cart--mini">
                        <a href="javascript:">
                            <div class="ps-block__left"><i class="icon-register"></i></div>
                            <div class="ps-block__right">REGISTER</div>
                        </a>


                        <div class="ps-cart__content" style="min-width: 234px; right: -30px; padding-top: 103px;     z-index: -1;">
                            <div class="ps-cart__items" style="padding: 0px;">
                                <div class="ps-product--cart-mobile menu__content" style="margin-bottom: 0px;">

                                    <ul class="menu--dropdown">

                                        <li><a href="{{ route('register') }}"><i class="icon-user"></i> REGISTRO CLIENTE</a>
                                        </li>

                                        <li><a href="javascript:"><i class="icon-user"></i> REGISTRO VENDEDOR</a>
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
    <div class="ps-search--mobile">
        <form class="ps-form--search-mobile" action="javascript:" method="get">
            <div class="form-group--nest">
                <input class="form-control" type="text" placeholder="Buscador de productos...">
                <button style="background: {{ $mobilbackground }};"><i class="icon-magnifier"
                        style="color: {{ $mobilcolor }};"></i></button>
            </div>
        </form>
    </div>
</header>
