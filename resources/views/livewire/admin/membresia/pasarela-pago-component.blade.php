<div class="col-span-12 intro-y box lg:col-span-6">
    <form class="ps-form--checkout" autocomplete="off" wire:submit.prevent='placeMembership'>
        <div class="flex items-center px-5 py-5 border-b border-gray-200 sm:py-0 dark:border-dark-5">
            <h2 class="mr-auto text-base font-medium">
                Pasarela de Pago
            </h2>
            <div class="ml-auto dropdown sm:hidden">
                <a class="block w-5 h-5 dropdown-toggle" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i> </a>
                <div class="w-40 nav-tabs dropdown-box">
                    <div class="p-2 dropdown-box__content box dark:bg-dark-1">
                        <a   data-target="#wompi" class="block p-2 transition duration-300 ease-in-out bg-white rounded-md dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2">Wompi</a>
                        <a href="javascript:;" data-toggle="tab" data-target="#paypal" class="block p-2 transition duration-300 ease-in-out bg-white rounded-md dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2">Paypal</a> </div>
                </div>
            </div>
            <div class="hidden ml-auto nav-tabs sm:flex">

                <input style="opacity: 0;" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="card" wire:model="paymentmode">
                <label wire:ignore for="inlineRadio1" class="flex items-center justify-center w-24 mt-2 mb-2 mr-1 text-white button button--sm bg-theme-1"> <i data-feather="credit-card" class="w-4 h-4 mr-2" ></i> Wompi </label>

                <input style="opacity: 0;" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="paypal" wire:model="paymentmode">
                <label wire:ignore for="inlineRadio2" class="flex items-center justify-center w-24 mt-2 mb-2 mr-1 text-white button button--sm bg-theme-1"  > <i data-feather="link" class="w-4 h-4 mr-2" ></i> Paypal </label>


            </div>

        </div>


        <div class="p-5">

            <div class="flex mb-3 border-b border-gray-200 dark:border-dark-5">
                <div class="pb-5">
                    @if (!Session::has('coupon'))

                    <div class="form-group">
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="have-code" value="1" wire:model="have_coupon">
                            <label for="have-code">Tengo un codigo de descuento</label>
                        </div>
                    </div>

                    @if ($have_coupon == 1)
                    <div class="flex">
                        <div class="w-full pt-5">
                            <input class="w-full border input" type="text" placeholder="Codigo de descuento" id="coupon-code" name="coupon-code" wire:model="coupon_code">
                            @if (Session::has('coupon_message'))
                            <span style="color: red; font-weight: 600;">
                                {{ Session::get('coupon_message') }}
                            </span>
                            @endif
                        </div>
                        <div class="pl-4 pt-7">
                            <a wire:click="applyCouponCode()" class="w-full text-white button bg-theme-1">Aplicar</a>
                        </div>

                    </div>


                    @endif

                    @else
                    <strong>Descuento aplicado </strong>
                    <br>
                    <br>
                    @endif
                </div>
            </div>

            <div class="tab-content">

                @switch($paymentmode)

                @case("card")
                <div class="tab-content__pane active" id="wompi">
                    <div class=" form-group">

                        <label>Numero de Tarjeta</label>
                        <input class="w-full mt-2 border input" type="number" placeholder="000-00-000-0000-0000" wire:model="card_no">

                        @error('card_no')
                        <span style="color: red; font-weight: 600;">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="mt-2 form-group">
                        <label>Nombre del Titular</label>
                        <input class="w-full mt-2 border input" type="text" placeholder="Jorge Acosta" wire:model="card_holder">
                        @error('card_holder')
                        <span style="color: red; font-weight: 600;">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="mt-2 row">
                        <div class="col-8">
                            <div class="">
                                <label>Fechas de Expiración</label>
                                <div class="flex row">
                                    <div class="col-4">
                                        <input class="w-20 mt-2 mr-2 border input" type="number" placeholder="Mes" wire:model="card_exp_month">
                                        @error('card_exp_month')
                                        <span style="color: red; font-weight: 600;">
                                            {{ $message }}
                                        </span>
                                        @enderror

                                    </div>
                                    <div class="col-4">

                                        <input class="w-20 mt-2 mr-2 border input" type="number" placeholder="Año" wire:model="card_exp_year">
                                        @error('card_exp_year')
                                        <span style="color: red; font-weight: 600;">
                                            {{ $message }}
                                        </span>
                                        @enderror

                                    </div>

                                    <div class="col-4">
                                        <input class="w-20 mt-2 mr-2 border input" type="number" placeholder="CVV" wire:model="card_cvc">
                                        @error('card_cvc')
                                        <span style="color: red; font-weight: 600;">
                                            {{ $message }}
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="mt-4 form-group submit">

                        <input type="checkbox" id="check_terms" wire:model="card_check_term">
                        <label for="check_terms">Acepto los <a target="_blank" style="color: #fcb800;" href="https://wompi.co/wp-content/uploads/2019/09/TERMINOS-Y-CONDICIONES-DE-USO-USUARIOS-WOMPI.pdf">Terminos
                                y Condiciones</a> </label>
                        @error('card_check_term')
                        <span style="color: red; font-weight: 600;">
                            {{ $message }}
                        </span>
                        @enderror
                        <button class="w-full mt-5 text-white button bg-theme-1">Proceder a Pagar</button>

                        <div wire:loading wire:target="placeMembership">
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
                <div class="mb-10 tab-content__pane active" id="paypal">
                    <button class="w-full mt-2 text-white button bg-theme-1">Proceder a Pagar</button>

                    <div wire:loading wire:target="placeMembership">
                        Procesando el Pago...
                    </div>


                </div>
                @break

                @endswitch






            </div>
            @if (Session::has('coupon'))

            <h3><strong class="">Codigo:</strong>  <span>{{ session::get('coupon')['code'] }}</span></h3>
            <h3><strong class="">Descuento:</strong>  <span>

                    @if(session::get('coupon')['type'] == 'fixed')
                    <small>COP</small> {{ "$".session::get('coupon')['value'] }}
                    @else
                    {{ session::get('coupon')['value']."%" }}
                    @endif
                </span></h3>
            <small style="color: #fcb800;"><strong> Con Descuento</strong> </small>

            <h1 class="text-3xl font-medium leading-none text-theme-1">Total COP
                <span> ${{ $subtotalDesuento_COP }}  </span></h1>

            <small style="color: #fcb800;"><strong> Con Descuento</strong></small>
            <h1 class="text-3xl font-medium leading-none text-theme-1">Total USD
                <span> ${{ $subtotalDesuento_USD }} </span>
            </h1>




            @else
            <h1 class="text-3xl font-medium leading-none text-theme-1">Total COP
                <span>${{ Session::get('membresia_payment')['subtotal'] }}  </span></h1>
            <h1 class="text-3xl font-medium leading-none text-theme-1">Total USD
                <span>${{ Session::get('membresia_payment')['subtotal_dolar'] }} </span>
            </h1>
            @endif
            <div class="mt-5">Nota: Al pagar una membresia tendras acceso a la plataforma por 1 año, luego de caducado ese año deberas renovar el servicio para continuar usando la plataforma.</div>
        </div>
    </form>
</div>
