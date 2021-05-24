<x-guest-layout>
    <div class="ps-section__wrapper">
        <div class="ps-section__left" style="top: -57px; position: relative;">
            <form class="ps-form--account ps-tab-root" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="ps-tabs">
                    <div class="ps-tab active" id="sign-in">
                        <div class="ps-form__content">
                            <h5>Registra tu Cuenta</h5>
                            <div class="form-group">
                                <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="NOMBRE "  />
                            </div>
                            <div class="form-group">
                                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required  placeholder="EMAIL " />
                            </div>
                            <div class="form-group">
                                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password"  placeholder="PASSWORD " />
                            </div>
                            <div class="form-group">
                                <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password"  placeholder="CONFIRMAR " />
                            </div>
                            <div class="form-group">
                                <div class="ps-checkbox">
                                    <a href="{{ route('login') }}" >Ya tienes cuenta ?</a>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <x-jet-button class="ps-btn ps-btn--fullwidth">
                                    {{ __('Registro') }}
                                </x-jet-button>
                            </div>

                            <x-jet-validation-errors class="mb-4" />

                            <div class="ps-form__footer">
                                <p>Registro con Redes:</p>
                                <ul class="ps-list--social">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="ps-section__right" style="position: relative; top: -110px;">

            <figure class="ps-section__desc">
                <figcaption>Ingresa con tu cuenta y empieza a vender:</figcaption>
                <p> <strong >Empaques Para Ti - Para toda Ocasión</strong>  tiene todo cubierto desde el clic hasta la entrega. Regístrese o inicie sesión y podrá :</p>
                <ul class="ps-list">
                    <li><i class="icon-credit-card"></i><span>COMPRAS SEGURAS CON WOMPI Y PAYPAL</span></li>
                    <li><i class="icon-clipboard-check"></i><span>HISTORIAL DE TODAS TUS COMPRAS</span></li>
                    <li><i class="icon-bag2"></i><span>COMPRAS CON ENVIO NACIONAL E INTERNACIONAL</span></li>
                    <li><i class="icon-shield-check"></i><span>PROTECCIÓN CONTRA FRAUDE Y ESTAFAS</span></li>
                    <li><i class="icon-store"></i><span>PUEDER SOLICITAR SER UN VENDEDOR!!! <a href=""  style="font-weight: 700; --text-opacity: 1; color: #8e4b10; color: rgba(142, 75, 16, var(--text-opacity));">MAS INFORMACIÓN ACA</a></span></li>
                </ul>
                <div class="form-group submit">
                    <a href="{{ route('login') }}" class="ps-btn ps-btn--fullwidth">Ingresa Ya!</a>
                </div>
            </figure>

        </div>
    </div>
</x-guest-layout>
