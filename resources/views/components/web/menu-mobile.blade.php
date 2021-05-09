<div class="ps-panel--sidebar" id="cart-mobile">
    <div class="ps-panel__header" style="background: {{ $background }}; color: {{ $color }};">
        <h3>Shopping Cart</h3>
    </div>
    <div class="navigation__content">
        <div class="ps-cart--mobile">
            <div class="ps-cart__content">
                <div class="ps-product--cart-mobile">
                    <div class="ps-product__thumbnail">
                        <a href="#"><img src="img/products/clothing/7.jpg" alt=""></a>
                    </div>
                    <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                        <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                    </div>
                </div>
            </div>
            <div class="ps-cart__footer">
                <h3>Sub Total:<strong>$59.99</strong></h3>
                <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
            </div>
        </div>
    </div>
</div>
<div class="ps-panel--sidebar" id="navigation-mobile">
    <div class="ps-panel__header" style="background: {{ $background }}; color: {{ $color }};">
        <h3>Categorias</h3>
    </div>
    <div class="ps-panel__content">
        <ul class="menu--mobile">

            <x-web.lista-categorias :categories="$categories" />

        </ul>
    </div>
</div>
<div class="navigation--list" style="background: {{ $background }}; color: {{ $color }};">
    <div class="navigation__content">
        <a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a>
        <a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categorias</span></a>
        <a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Busqueda</span></a>
        <a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span> Bolsa</span></a></div>
</div>
<div class="ps-panel--sidebar" id="search-sidebar">
    <div class="ps-panel__header" style="background: {{ $background }}; color: {{ $color }};">
        <form class="ps-form--search-mobile" action="javascript:" method="get">
            <div class="form-group--nest">
                <input class="form-control" type="text" placeholder="Buscador de productos...">
                <button style="background: {{ $mobilbackground }};"><i class="icon-magnifier" style="color: {{ $mobilcolor }};  "></i></button>
            </div>
        </form>
    </div>
    <div class="navigation__content"></div>
</div>
<div class="ps-panel--sidebar" id="menu-mobile">
    <div class="ps-panel__header" style="background: {{ $background }}; color: {{ $color }};  ">
        <h3>Menu</h3>
    </div>
    <div class="ps-panel__content">
        <ul class="menu--mobile">

            <x-web.links />


        </ul>
    </div>
</div>
