@can('dash.tienda.solicitudes')
    <div class="col-span-12 mt-8 sm:col-span-12 lg:col-span-6">
        <div class="flex items-center h-10 intro-y">
            <h2 class="mr-5 text-lg font-medium truncate">
                Lista de Solicitudes de Tiendas
            </h2>

        </div>
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-no-wrap">

            <div class="hidden mr-auto text-gray-600 md:block"> Total de Vendedores: {{ $solicitudes->total() }}</div>
            <div class="w-full mt-3 sm:w-auto sm:mt-0 sm:ml-auto md:ml-0">
                <div class="relative w-56 text-gray-700 dark:text-gray-300">
                    <input wire:model.debounce.300ms="search" type="text" class="w-56 pr-10 input box placeholder-theme-13" placeholder="Busqueda...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3 feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
            </div>
        </div>
        <div class="p-5 mt-5 intro-y box " style="height: 76%;">

            <div class="mt-1">

                @if ($solicitudes->count() != 0)

                    @foreach ($solicitudes as $item)
                        <div class="mb-4 box">
                            <div class="flex flex-col items-center lg:flex-row" style="padding: 1.6rem;">
                       
                                    <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                                        <img class="rounded-full" src="{{ asset('storage/'.$item->url_perfil) }}" >
                                    </div>
                                    <div class="mt-3 text-center lg:ml-2 lg:mr-auto lg:text-left lg:mt-0">
                                        <a href="{{ route('admin.membresia.show', $item) }}" class="font-medium capitalize">{{ $item->name }}</a>
                                        <div class="text-gray-600 text-xs mt-0.5">{{ $item->user->name }}</div>
                                    </div>

                                    <span class="font-medium cursor-pointer xl:ml-auto">

                                        {!! Form::model( $item, ['route' => ['admin.tienda.update', $item], 'method' => 'put']) !!}

                                        {{ Form::button('<i data-feather="play" class="report-box__icon text-theme-10" ></i>', ['type' => 'submit', 'wire:ignore'] )  }}

                                        {!! Form::close() !!}
                                    </span>
                            </div>
                        </div>
                    @endforeach

                    <div class="mt-5">

                        {{ $solicitudes->links() }}

                     <select wire:model="perPage" class="w-20 mt-4 input box sm:mt-0">
                            <option>2</option>
                            <option>5</option>
                            <option>10</option>
                            <option>20</option>
                            <option>50</option>
                            <option>100</option>
                        </select>
                </div>
                @else

                <div class="box">
                    <div class="flex flex-col items-center lg:flex-row" style="padding: 1.6rem;">
                        <div class="w-2 h-2 mr-3 rounded-full bg-theme-11"></div>
                        <span class="truncate">No hay solicitudes </span>
                        <div class="flex-1 h-px mx-3 border border-r border-gray-300 border-dashed xl:hidden"></div>
                    </div>
                </div>

                @endif



            </div>
        </div>
    </div>
@endcan

