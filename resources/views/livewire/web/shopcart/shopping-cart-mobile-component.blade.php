<div class="ps-cart--mobile">
    <div class="ps-cart__content" style="height: 100%; max-height: 374px; overflow-y: scroll;">


        @if (Cart::count() > 0)
        @foreach (Cart::content() as $item)
            <div class="ps-product--cart-mobile" style="padding-top: 24px;">
                <div class="ps-product__thumbnail">
                    <a href="{{ route('web.products.show', $item->model->slug) }}">
                        <img src="{{ Storage::url($item->model->image->url) }}"
                            alt="{{ $item->model->slug }}">
                    </a>
                </div>
                <div class="ps-product__content">
                    <a class="ps-product__remove" href="#" wire:click.prevent="destroy('{{ $item->rowId }}')">
                        <i class="icon-cross"></i>
                    </a>
                    <a href="{{ route('web.products.show', $item->model->slug) }}"> {{ $item->model->name }}</a>
                    <p><strong>Vendedor:</strong> <a href="{{ route('web.tienda.show', $item->model->tienda->slug) }}" > {{ $item->model->tienda->name }} </a></p><small>{{ $item->qty }} x ${{ $item->model->amount }}</small>
                </div>
            </div>
        @endforeach
        @else
        <h3> No hay items en el carrito </h3>
        @endif
    </div>
    <div class="ps-cart__footer" style="position: absolute; bottom: 48px;">
        <h3>Total:<strong>${{ Cart::total() }}</strong></h3>
        <figure>
            <a class="ps-btn" style="padding: 12px 30px!important; margin-right: 16px;" href="{{ route('web.shopcart.index') }}" >Ver Carrito</a>
            <a class="ps-btn" style="padding: 12px 40px!important;" href="checkout.html">Checkout</a></figure>
    </div>
</div>
