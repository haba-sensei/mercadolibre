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
                            @if(Cart::count() > 0)
                                @foreach (Cart::content() as $item)
                                    <tr>
                                        <td data-label="Product">
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
                                                    <p>Sold By:<strong> YOUNG SHOP</strong></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="price" data-label="Price">${{ $item->model->amount }}</td>
                                        <td data-label="Quantity">
                                            <div class="form-group--number">
                                                <button class="up">+</button>
                                                <button class="down">-</button>
                                                <input class="form-control" type="text" placeholder="1" value="{{ $item->qty }}">
                                            </div>
                                        </td>
                                        <td data-label="Total">${{ $item->subtotal }}</td>
                                        <td data-label="Actions"><a href="#"><i class="icon-cross"></i></a></td>
                                    </tr>
                                @endforeach
                            @else
                                    <tr class="">
                                        No hay items en el carrito
                                    </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="ps-section__cart-actions"><a class="ps-btn" href="shop-default.html"><i class="icon-arrow-left"></i> Back to Shop</a><a class="ps-btn ps-btn--outline" href="shop-default.html"><i class="icon-sync"></i> Update cart</a></div>
            </div>
            <div class="ps-section__footer">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <figure>
                            <figcaption>Coupon Discount</figcaption>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <div class="form-group">
                                <button class="ps-btn ps-btn--outline">Apply</button>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <figure>
                            <figcaption>Calculate shipping</figcaption>
                            <div class="form-group">
                                <select class="ps-select">
                                    <option value="1">America</option>
                                    <option value="2">Italia</option>
                                    <option value="3">Vietnam</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Town/City">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Postcode/Zip">
                            </div>
                            <div class="form-group">
                                <button class="ps-btn ps-btn--outline">Update</button>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-block--shopping-total">
                            <div class="ps-block__header">
                                <p>Subtotal <span> ${{ Cart::subtotal() }}</span></p>
                                <p>Impuesto <span> ${{ Cart::tax() }}</span></p>
                            </div>
                            <div class="ps-block__content">
                                <ul class="ps-block__product">
                                    <li><span class="ps-block__shop">YOUNG SHOP Shipping</span><span class="ps-block__shipping">Free Shipping</span><span class="ps-block__estimate">Estimate for <strong>Viet Nam</strong><a href="#"> MVMTH Classical Leather Watch In Black ×1</a></span></li>
                                    <li><span class="ps-block__shop">ROBERT’S STORE Shipping</span><span class="ps-block__shipping">Free Shipping</span><span class="ps-block__estimate">Estimate for <strong>Viet Nam</strong><a href="#">Apple Macbook Retina Display 12” ×1</a></span></li>
                                </ul>
                                <h3>Total <span>${{ Cart::total() }}</span></h3>
                            </div>
                        </div><a class="ps-btn ps-btn--fullwidth" href="checkout.html">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
