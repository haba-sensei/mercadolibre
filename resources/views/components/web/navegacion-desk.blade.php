<nav class="navigation">
    <div class="container">
        <div class="navigation__left">
            <div class="menu--product-categories">
                <div class="menu__toggle"><i class="icon-menu"></i><span > LISTA DE CATEGORIAS</span></div>
                <div class="menu__content">
                    <ul class="menu--dropdown">

                        <x-web.lista-categorias :categories="$categories" />

                    </ul>
                </div>
            </div>
        </div>
        <div class="navigation__right">
            <ul class="menu">

                <x-web.links />

            </ul>
            <div class="inline ps-block--header-hotline">
                <p><i class="icon-telephone"></i>Atención al cliente:<strong> 1-800-234-5678</strong></p>
            </div>
        </div>
    </div>
</nav>
