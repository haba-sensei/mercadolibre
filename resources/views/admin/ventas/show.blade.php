@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')

@section('subcontent')
@if(session('info'))

<input id="infomensaje" type="hidden" value="{{ session('info') }}" >
<input id="colormensaje" type="hidden" value="{{ session('color') }}" >

@endif
 
@if ($auth == "aproved")

<div class="mt-5 overflow-hidden intro-y box">
    <div class="flex flex-col px-5 pt-10 text-center lg:flex-row sm:px-20 sm:pt-20 lg:pb-20 sm:text-left">
        <div class="text-3xl font-semibold text-theme-1 dark:text-theme-10">ORDEN DE VENTA  <div class="mt-2">
            <span class="text-xl leading-none text-gray-600">ID: {{ $order[0]->reference_id }}</span><br>
            <span class="text-xl leading-none text-gray-600">Fecha: {{ $order[0]->created_at->format('d-m-Y') }}</span>

        </div></div>

        <div class="mt-20 lg:mt-0 lg:ml-auto lg:text-right">
            <div class="text-xl font-medium text-theme-1 dark:text-theme-10">Empaques para ti </div>
            <div class="mt-1">empaques_para_ti@gmail.com</div>
            <div class="mt-1">8023 Amerige Street Harriman, NY 10926.</div>
            <div class="mt-1">9515647454</div>
        </div>
    </div>
    <div class="flex flex-col px-5 pt-10 pb-10 text-center border-b lg:flex-row sm:px-20 sm:pb-20 sm:text-left">
        <div>
            <div class="text-base text-gray-600">Detalles del Cliente</div>
            <div class="mt-2 text-lg font-medium capitalize text-theme-1 dark:text-theme-10">{{ $order[0]->name }}</div>
            <div class="mt-1"><strong class=""> Dirección: </strong>{{ $order[0]->address.", ".$order[0]->city }}</div>
            <div class="mt-1"><strong class=""> Cod. Postal: </strong>{{ $order[0]->postal }} </div>
            <div class="mt-1"><strong class=""> Correo: </strong>{{ $order[0]->user->email }} </div>
            <div class="mt-1"><strong class=""> Tel: </strong>{{ $order[0]->phone }} </div>




        </div>
        <div class="mt-10 lg:mt-0 lg:ml-auto lg:text-right">
            <div class="text-base text-gray-600">Estado del Pago</div>
            <div class="mt-2 text-lg font-medium capitalize text-theme-1 dark:text-theme-10">Medio: {{ $order[0]->transaction->mode }}</div>
            <div class="mt-2 text-lg font-medium text-theme-1 dark:text-theme-10">ID Pago: {{ $order[0]->transaction->transaction_id }}</div>
            <div class="mt-2 text-lg font-medium capitalize text-theme-1 dark:text-theme-10">Estado: {{ $order[0]->transaction->status }}</div>
        </div>
    </div>
    <div class="px-5 py-10 sm:px-16 sm:py-20">
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">DESCRIPCIÓN</th>
                        <th class="text-right border-b-2 dark:border-dark-5 whitespace-nowrap">CANTIDAD</th>
                        <th class="text-right border-b-2 dark:border-dark-5 whitespace-nowrap">PRECIO</th>
                        <th class="text-right border-b-2 dark:border-dark-5 whitespace-nowrap">SUBTOTAL</th>
                    </tr>
                </thead>
                    @livewire('admin.ventas.tabla-productos-component', ['order' => $order] )

            </table>
        </div>
    </div>
    <div class="flex flex-col-reverse px-5 pb-10 sm:px-20 sm:pb-20 sm:flex-row">

        <div class="text-center sm:text-right sm:ml-auto">
            <div class="text-base text-gray-600">Total Facturado  </div>
            <div class="mt-2 text-xl font-medium text-theme-1 dark:text-theme-10">${{ $varPriceItem }}</div>

        </div>

    </div>

    <div class="flex flex-col-reverse px-5 pb-10 sm:px-20 sm:pb-20 sm:flex-row">

        <div class="text-center sm:text-center sm:ml-auto sm:mr-auto">
            <div class="text-base text-gray-600">Nota: Todos los productos que pertenezcan a tiendas diferentes podran estar sugetos a retrazos segun los tiempos de entrega de cada tienda. muchas gracias por su comprensión. </div>


        </div>

    </div>


</div>

@section('script')

    <script type="text/javascript" src="{{ asset('dist/js/custom_dash.js') }}" ></script>

@stop


@else

@endif







@endsection
