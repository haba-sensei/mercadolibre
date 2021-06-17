<div>

    <div class="ps-section--shopping ps-shopping-cart" style="padding: 16px 0;">
        <div class="container">
            <div class="ps-section__content">
                <div class="table-responsive">
                     @if (Session::has('info'))
                     <div class="alert alert-success">
                         <strong class="">Éxito</strong> {{ Session::get('info') }}
                     </div>
                     @endif 
                    @if(Cart::count() > 0)
                        <table class="table ps-table--shopping-cart ps-table--responsive">
                            <thead>
                                <tr>
                                    <th>NOMBRE DEL PRODUCTO</th>
                                    <th>PRECIO</th>
                                    <th>CANTIDAD</th>
                                    <th>TOTAL</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Cart::content() as $item)
                                    <tr>
                                        <td data-label="Producto">
                                            <div class="ps-product--cart">
                                                <div class="ps-product__thumbnail">
                                                    <a href="{{ route('web.products.show', $item->model->slug) }}">
                                                        <img src="{{ Storage::url($item->model->image->url) }}" alt="{{ $item->model->slug }}">
                                                    </a>
                                                </div>
                                                <div class="ps-product__content">
                                                    <a href="{{ route('web.products.show', $item->model->slug) }}">
                                                        {{ $item->model->name }}
                                                    </a>
                                                    <p>Vendedor : <a href="{{ route('web.tienda.show', $item->model->tienda->slug) }}" ><strong> {{ $item->model->tienda->name }}</strong> </a> </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="price" data-label="Precio">${{ $item->model->amount }}</td>
                                        <td data-label="Cantidaa">
                                            <div class="form-group--number">
                                                <button class="up" wire:click.prevent="increseQty('{{ $item->rowId }}', '{{ $item->model->id }}')">+</button>
                                                <button class="down" wire:click.prevent="decreseQty('{{ $item->rowId }}', '{{ $item->model->id }}')">-</button>
                                                <input class="form-control" type="text"  value="{{ $item->qty }}" disabled>
                                            </div>
                                        </td>
                                        <td data-label="Total">${{ $item->subtotal }} </td>
                                        <td data-label="Acciones"><a href="#" wire:click.prevent="destroy('{{ $item->rowId }}')"><i class="icon-cross"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <section class="ps-section--account">
                            <div class="container">
                                <div class="ps-block--payment-success">
                                    <h3>El carrito esta vacio !</h3>
                                    <p>Muchas gracias por tu elección pero para continuar debes agregar un producto al carrito de compras ! Gracias. </p>
                                </div>
                            </div>
                        </section>
                    @endif
                </div>
                <div class="ps-section__cart-actions">
                    <a class="ps-btn" href="{{ route('web.products.showAll') }}">
                        <i class="icon-arrow-left"></i>
                         Regresar a la tienda
                    </a>
                </div>
            </div>
            @if(Cart::count() > 0)
            <div class="ps-section__footer">
                <div class="row " style="display: block!important;">

                    <div class="">
                        <div class="ps-block--shopping-total">
                            <div class="ps-block__header">
                                <p>Subtotal <span> ${{ Cart::subtotal() }}</span></p>
                                <p>Impuesto <span> $0</span></p>

                            </div>
                            <div class="ps-block__content">

                                <h3>Total <span>${{ Cart::subtotal() }}</span></h3>
                            </div>
                        </div><a class="ps-btn ps-btn--fullwidth" href="#" wire:click.prevent="checkout">Proceder a Pagar</a>
                    </div>


                </div>
            </div>
            @else

            @endif
        </div>
    </div>
</div>
