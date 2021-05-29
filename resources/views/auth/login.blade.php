<x-guest-layout>
    <div class="ps-section__wrapper">
        <div class="ps-section__left" style="top: -57px; position: relative;">
            <form class="ps-form--account ps-tab-root" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="ps-tabs">
                    <div class="ps-tab active" id="sign-in">
                        <div class="ps-form__content">
                            <h5>Ingresa a tu Cuenta</h5>
                            <div class="form-group">
                                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required
                                autofocus placeholder="EMAIL " />

                            </div>
                            <div class="form-group form-forgot">

                                <x-jet-input id="password" class="form-control" type="password" name="password" required
                                autocomplete="current-password" placeholder="PASSWORD"/>

                            </div>
                            <div class="form-group">
                                <div class="ps-checkbox">
                                    
                                    @if (Route::has('password.request'))
                                       <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">{{ __('Recuperar Password?') }}</a>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group submit">
                                <x-jet-button class="ps-btn ps-btn--fullwidth">
                                    {{ __('Login') }}
                                </x-jet-button>
                            </div>

                            @if (session('status'))
                                <div class="mb-4 text-sm font-medium text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="ps-form__footer">
                                <p>Login con Redes:</p>
                                <ul class="ps-list--social">
                                    <li><a class="facebook" href="{{ url('auth/facebook') }}" ><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="google" href="{{ url('auth/google') }}"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            @if (Session::has('info'))
                            <div class="alert alert-danger">
                            <strong class="">Error</strong> {{ Session::get('info') }}
                            </div>
                            @endif
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="ps-section__right" style="position: relative; top: -38px;">

            <figure class="ps-section__desc">
                <figcaption>Regístrese hoy no deje perder esta oportunidad:</figcaption>
                <p> <strong >Empaques Para Ti - Para toda Ocasión</strong>  tiene todo cubierto desde el clic hasta la entrega. Regístrese o inicie sesión y podrá :</p>
                <ul class="ps-list">
                    <li><i class="icon-credit-card"></i><span>COMPRAS SEGURAS CON WOMPI Y PAYPAL</span></li>
                    <li><i class="icon-clipboard-check"></i><span>HISTORIAL DE TODAS TUS COMPRAS</span></li>
                    <li><i class="icon-bag2"></i><span>COMPRAS CON ENVIO NACIONAL E INTERNACIONAL</span></li>
                    <li><i class="icon-shield-check"></i><span>PROTECCIÓN CONTRA FRAUDE Y ESTAFAS</span></li>
                    <li><i class="icon-store"></i><span>PUEDER SOLICITAR SER UN VENDEDOR!!! <a href=""  style="font-weight: 700; --text-opacity: 1; color: #8e4b10; color: rgba(142, 75, 16, var(--text-opacity));">MAS INFORMACIÓN ACA</a></span></li>
                </ul>
                <div class="form-group submit">
                    <a href="{{ route('register') }}" class="ps-btn ps-btn--fullwidth">Registrate Ya!</a>
                </div>
            </figure>

        </div>
    </div>

</x-guest-layout>
