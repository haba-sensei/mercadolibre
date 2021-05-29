<div class="ps-panel--sidebar" id="cart-mobile">
    <div class="ps-panel__header" style="background: {{ $background }}; color: {{ $color }};">
        <h3>Shopping Cart</h3>
    </div>
    <div class="navigation__content">

        <livewire:web.shopcart.shopping-cart-mobile-component />

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
