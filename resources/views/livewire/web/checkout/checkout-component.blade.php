<section class="ps-section--account ps-checkout">
    <div class="container">

        <div class="ps-section__content">

            <form class="ps-form--checkout" autocomplete="off" wire:submit.prevent='placeOrder'>
                <div class="ps-form__content">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block--shipping">
                                <h3 class="ps-form__heading">Información de Envio</h3>
                                <div class="ps-block__panel">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label >Nombre Completo </label>
                                                <input type="text" class="form-control" placeholder="Nombre completo" wire:model="name">

                                                @error('name')
                                                <span style="color: red; font-weight: 600;">
                                                {{ $message }}
                                                </span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">

                                                <label >Telefono de Contacto </label>
                                                <input type="text" class="form-control" placeholder="Telefono de contacto" wire:model="phone">

                                                @error('phone')
                                                <span style="color: red; font-weight: 600;">
                                                {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">

                                                <label >Dirección Completa </label>
                                                <input type="text" class="form-control" placeholder="Dirección completa" wire:model="address">

                                                @error('address')
                                                <span style="color: red; font-weight: 600;">
                                                {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">

                                                <label >Ciudad </label>
                                                <input type="text" class="form-control" placeholder="Ciudad" wire:model="city">

                                                @error('city')
                                                <span style="color: red; font-weight: 600;">
                                                {{ $message }}
                                                </span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">

                                                <label >Codigo postal </label>
                                                <input type="text" class="form-control" placeholder="Codigo postal" wire:model="postal">

                                                @error('postal')
                                                <span style="color: red; font-weight: 600;">
                                                {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-form__total">
                                <h3 class="ps-form__heading">Resumen de Compra</h3>
                                    @if(Session::has('checkout'))
                                        <div class="content">
                                            <div class="ps-block--payment-method">

                                            <table class="table ps-block__products">
                                                @if(Cart::count() > 0)

                                                    <tbody>
                                                        @foreach (Cart::content() as $item)
                                                            <tr>
                                                                <td>
                                                                    <a href="{{ route('web.products.show', $item->model->slug) }}" >
                                                                        {{ $item->model->name }} x{{ $item->qty }}
                                                                    </a>
                                                                    <p>Vendedor:
                                                                        <a href="{{ route('web.tienda.show', $item->model->tienda->slug) }}"> <strong>{{ $item->model->tienda->name }}</strong> </a>
                                                                    </p>
                                                                </td>
                                                                <td>${{ $item->model->amount }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>

                                                @endif
                                            </table>



                                            <ul class="ps-tab-list">
                                                <li class="active">
                                                    <input class="form-check-input" style="opacity: 0;" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="card" wire:model="paymentmode">
                                                    <label class="ps-btn ps-btn--fullwidth"   for="inlineRadio1">Wompi</label>

                                                </li>

                                                <li class="">
                                                    <input class="form-check-input" style="opacity: 0;" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="paypal" wire:model="paymentmode">
                                                    <label class="ps-btn ps-btn--fullwidth"   for="inlineRadio2">Paypal</label>

                                                </li>
                                            </ul>
                                            <div class="ps-tabs">

                                                @switch($paymentmode)
                                                    @case("card")
                                                    <div class="ps-tab active" id="visa">



                                                        <div class="form-group">
                                                            <label>Numero de Tarjeta</label>
                                                            <input class="form-control" type="number" placeholder="000-00-000-0000-0000" wire:model="card_no">

                                                            @error('card_no')
                                                            <span style="color: red; font-weight: 600;">
                                                            {{ $message }}
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nombre del Titular</label>
                                                            <input class="form-control" type="text" placeholder="Jorge Acosta" wire:model="card_holder">
                                                            @error('card_holder')
                                                            <span style="color: red; font-weight: 600;">
                                                            {{ $message }}
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <div class="form-group">
                                                                    <label>Fechas de Expiración</label>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" type="number" placeholder="Mes" wire:model="card_exp_month">
                                                                                @error('card_exp_month')
                                                                                <span style="color: red; font-weight: 600;">
                                                                                {{ $message }}
                                                                                </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" type="number"  placeholder="Año" wire:model="card_exp_year">
                                                                                @error('card_exp_year')
                                                                                <span style="color: red; font-weight: 600;">
                                                                                {{ $message }}
                                                                                </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <label>CVC</label>
                                                                    <input class="form-control" type="number" placeholder="123" wire:model="card_cvc">
                                                                    @error('card_cvc')
                                                                    <span style="color: red; font-weight: 600;">
                                                                    {{ $message }}
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group submit">

                                                           <input type="checkbox"  id="check_terms" wire:model="card_check_term">
                                                           <label for="check_terms">Acepto los <a target="_blank" style="color: #fcb800;" href="https://wompi.co/wp-content/uploads/2019/09/TERMINOS-Y-CONDICIONES-DE-USO-USUARIOS-WOMPI.pdf">Terminos y Condiciones</a>  </label>
                                                            @error('card_check_term')
                                                            <span style="color: red; font-weight: 600;">
                                                            {{ $message }}
                                                            </span>
                                                            @enderror
                                                           <button class="ps-btn ps-btn--fullwidth">Proceder a Pagar </button>
                                                           <div wire:loading wire:target="placeOrder">
                                                            Procesando el Pago...
                                                            </div>
                                                            <br><br>

                                                            @if (Session::has('info'))
                                                            <div class="alert alert-danger">
                                                                <strong class="">{{ Session::get('info') }}</strong>
                                                            </div>
                                                            @endif
                                                        </div>

                                                    </div>
                                                        @break
                                                    @case("paypal")
                                                    <div class="ps-tab active" id="paypal">
                                                        <a class="ps-btn" href="#">Pagar con Paypal</a>
                                                    </div>
                                                        @break
                                                    {{-- @default --}}

                                                @endswitch

                                                </div>
                                            <br>
                                            @error('paymentmode')
                                            <span style="color: red; font-weight: 600;">
                                            {{ $message }}
                                            </span>
                                            @enderror

                                            <p class="">Nota: si compras tus productos con varios vendedores tus productos podrian llegar en paquetes diferentes y con tiempos de entrega diferentes.</p>
                                            <h3>Total <span>${{ Session::get('checkout')['subtotal'] }}</span></h3>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</section>
