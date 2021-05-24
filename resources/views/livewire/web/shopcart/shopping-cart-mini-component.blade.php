<div>
    <div class="ps-cart--mini"><a class="header__extra" href="#">
        <i class="icon-bag2"></i><span><i>{{ Cart::count() }}</i></span></a>
    <div class="ps-cart__content">
        <div class="ps-cart__items" style="height: 100%; max-height: 374px; overflow-y: scroll;">
            @if (Cart::count() > 0)
                @foreach (Cart::content() as $item)
                    <div class="ps-product--cart-mobile">
                        <div class="ps-product__thumbnail">
                            <a href="{{ route('web.products.show', $item->model->slug) }}">
                                <img src="{{ Storage::url($item->model->image->url) }}"
                                 alt="{{ $item->model->slug }}">
                            </a>
                        </div>
                        <div class="ps-product__content">
                            <a class="ps-product__remove" href="#">
                                <i class="icon-cross"></i>
                            </a>
                            <a href="{{ route('web.products.show', $item->model->slug) }}"> {{ $item->model->name }}</a>
                            <p><strong>Vendedor:</strong> YOUNG SHOP</p><small>{{ $item->qty }} x ${{ $item->model->amount }}</small>
                        </div>
                    </div>
                @endforeach
            @else
                <h3> No hay items en el carrito </h3>
            @endif


        </div>
        <div class="ps-cart__footer">
            <h3>Total:<strong>${{ Cart::total() }}</strong></h3>
            <figure><a class="ps-btn" href="{{ route('web.shopcart.index') }}">Ver Carrito</a><a
                    class="ps-btn" href="checkout.html">Checkout</a></figure>
        </div>
    </div>
</div>
</div>
