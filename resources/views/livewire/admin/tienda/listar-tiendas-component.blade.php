@can('dash.tienda.solicitudes')
    <div class="col-span-12 mt-8 sm:col-span-12 lg:col-span-12">
        <div class="flex items-center h-10 intro-y">
            <h2 class="mr-5 text-lg font-medium truncate">
                Lista de Solicitudes de Tiendas
            </h2>

        </div>
        <div class="p-5 mt-5 intro-y box">

            <div class="mt-1">

                @if ($solicitudes)

                    @foreach ($solicitudes as $item)
                    <div class="flex items-center mt-6 mb-6">
                        <div class="w-2 h-2 mr-3 rounded-full bg-theme-11"></div>
                        <span class="capitalize truncate">{{ $item->name }} </span>
                        <div class="flex-1 h-px mx-3 border border-r border-gray-300 border-dashed xl:hidden"></div>
                        <span class="font-medium cursor-pointer xl:ml-auto">

                            {!! Form::model( $item, ['route' => ['admin.tienda.update', $item], 'method' => 'put']) !!}

                            {{ Form::button('<i data-feather="play" class="report-box__icon text-theme-10"></i>', ['type' => 'submit'] )  }}

                            {!! Form::close() !!}
                        </span>
                    </div>
                    @endforeach

                @else
                <div class="flex items-center mt-6 mb-6">
                    <div class="w-2 h-2 mr-3 rounded-full bg-theme-11"></div>
                    <span class="truncate">No hay solicitudes </span>
                    <div class="flex-1 h-px mx-3 border border-r border-gray-300 border-dashed xl:hidden"></div>

                </div>
                @endif



            </div>
        </div>
    </div>
@endcan

