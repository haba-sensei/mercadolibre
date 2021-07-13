@can('dash.tienda.solicitudes')
    <div class="col-span-12 mt-8 sm:col-span-12 lg:col-span-12">
        <div class="flex items-center h-10 intro-y">
            <h2 class="mr-5 text-lg font-medium truncate">
                Lista de Tiendas
            </h2>

        </div>
        <div class="p-5 mt-5 intro-y box">

            <div class="mt-1">

                @if ($vendedores)

                    @foreach ($vendedores as $item)
                    <div class="box">
                        <div class="flex flex-col items-center p-5 lg:flex-row">

                        <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                            <img class="rounded-full" src="{{ asset('storage/'.$item->url_perfil) }}" >
                        </div>
                        <div class="mt-3 text-center lg:ml-2 lg:mr-auto lg:text-left lg:mt-0">
                            <a href="{{ route('admin.users.edit', $item->user) }}" class="font-medium capitalize">{{ $item->name }}</a>
                            <div class="text-gray-600 text-xs mt-0.5">{{ $item->user->name }}</div>
                        </div>
                        <div class="font-medium text-gray-600 capitalize">Business Año Gratuito</div>
                    </div>
                    {{-- <div class="flex items-center mt-6 mb-6">
                        <div class="w-2 h-2 mr-3 rounded-full bg-theme-11"></div>
                        <span class="capitalize truncate">{{ $item->name }} </span>
                        <div class="flex-1 h-px mx-3 border border-r border-gray-300 border-dashed xl:hidden"></div>
                        <span class="font-medium cursor-pointer xl:ml-auto">

                            {!! Form::model( $item, ['route' => ['admin.tienda.update', $item], 'method' => 'put']) !!}

                            {{ Form::button('<i data-feather="play" class="report-box__icon text-theme-10"></i>', ['type' => 'submit'] )  }}

                            {!! Form::close() !!}
                        </span>
                    </div> --}}
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

