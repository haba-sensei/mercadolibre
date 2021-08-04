@can('dash.compras.index')
<div class="col-span-12 mt-8 sm:col-span-6 lg:col-span-6">
        <div class="flex items-center h-10 intro-y">
            <h2 class="mr-5 text-lg font-medium truncate">
                Mis Compras
            </h2>

        </div>
        <div class="p-5 mt-5 intro-y box">

            <div class="mt-1">
                <div class="inline-flex w-full mt-1 mb-5 sm:w-auto sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="h-2 mt-1 mr-3 rounded-full w-7 bg-theme-1"></div>Pendiente
                    <div class="h-2 mt-1 ml-3 mr-3 rounded-full w-7 bg-theme-dark-base "></div>Aprobado
                    <div class="h-2 mt-1 ml-3 mr-3 rounded-full w-7 bg-theme-dark-green"></div>Enviado
                    <div class="h-2 mt-1 ml-3 mr-3 rounded-full w-7 bg-theme-6"></div>Cancelado

            </div>
            @if ($compras)
                <div class="w-full mt-1 mb-5 sm:w-auto sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="relative w-full text-gray-700 dark:text-gray-300">
                        <input wire:model.debounce.300ms="search" type="text" class="w-full pr-10 input box placeholder-theme-13" placeholder="Busqueda...">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3 feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </div>
                </div>

                    @foreach ($compras as $item)
                        <a href="{{ route('admin.compras.show', $item ) }}">
                        <div class="intro-x ">
                            <div class="flex items-center px-5 py-3 mb-3 box zoom-in

                            @switch($item->status)
                                @case('ordered')
                                bg-theme-1
                                @break
                                @case('process')
                                bg-theme-dark-base
                                @break
                                @case('deliver')
                                bg-theme-dark-green
                                @break
                                @case('canceled')
                                bg-theme-6
                                @break

                            @endswitch
                            ">

                                <div class="ml-4 mr-auto">
                                    <div class="font-medium text-theme-2">{{ $item->name }}</div>
                                    <div class="text-theme-2 text-xs mt-0.5">ID: <strong >{{ $item->reference_id }}</strong></div>
                                    <div class="text-theme-2 text-xs mt-0.5">Status: <strong class="capitalize">
                                        @switch($item->status)
                                        @case('deliver')
                                        Enviado
                                            @break

                                        @case('ordered')
                                       Pendiente
                                            @break

                                        @case('process')
                                        Aprobado
                                        @break

                                        @case('canceled')
                                        Cancelado
                                        @break
                                    @endswitch

                                    </strong></div>

                                </div>
                                <div class="font-medium text-theme-2">${{ number_format($item->subtotal, 2) }}</div>
                            </div>
                        </div>
                        </a>

                    @endforeach
                    {{ $compras->links() }}
                    @if($compras->count() == 0 )

                            <div class="flex items-center mt-6 mb-6">
                                <div class="w-2 h-2 mr-3 rounded-full bg-theme-11"></div>
                                <span class="truncate">No hay Resultados </span>
                                <div class="flex-1 h-px mx-3 border border-r border-gray-300 border-dashed xl:hidden"></div>

                            </div>
                    @endif
            @else



                @endif




            </div>
        </div>
    </div>

  @endcan
