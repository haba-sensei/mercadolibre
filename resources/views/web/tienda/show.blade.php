@extends('../layouts/web/content')
@section('subcontent')
    <div class="ps-breadcrumb">
        <div class="ps-container">
            <ul class="breadcrumb">
                <li><a href="{{ route('web.home') }}">Inicio</a></li>
                <li style="text-transform: capitalize;"><a href="{{ route('web.tienda.index') }}"> Tiendas </a></li>
                <li style="text-transform: capitalize;">{{ $tienda->name }}</li>
            </ul>
        </div>
    </div>

    <div class="ps-vendor-store">
        <div class="container">
            <div class="ps-section__container">
                <div class="ps-section__left">
                    <div class="ps-block--vendor">
                        <div class="ps-block__thumbnail"><img src="{{ Storage::url($tienda->url_perfil) }}" alt=""></div>
                        <div class="ps-block__container">
                            <div class="ps-block__header">
                                <h4>{{ $tienda->name }}</h4>
                            </div><span class="ps-block__divider"></span>
                            <div class="ps-block__content">
                                <p><strong>{{ $tienda->name }}</strong> {{ $tienda->resumen }}</p><span
                                    class="ps-block__divider"></span>


                            </div>
                            <div class="ps-block__footer">
                                <p>Llamanos directamente: <strong style="font-size: 16px;">{{ $tienda->phone }}</strong></p>

                                <p>Envianos un correo a: <strong style="font-size: 16px;">{{ $tienda->email }}</strong></p>
                                <br>
                                <a class="ps-btn ps-btn--fullwidth" href="">Enviar Correo</a>
                            </div>
                        </div>
                    </div>
                </div>



                        @livewire('web.tienda.table-product', ['tienda' => $tienda])
                        {{-- <livewire:web.tienda.table-product  /> --}}
 

            </div>
        </div>
    </div>

@endsection
