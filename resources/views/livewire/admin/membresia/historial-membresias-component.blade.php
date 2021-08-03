<div class="">
    <h2 class="mt-10 text-lg font-medium intro-y">Lista de Membresias</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-no-wrap">


            <div class="hidden mr-auto text-gray-600 md:block"> Total de Categorias: {{ $tiendas->total() }}</div>
            <div class="w-full mt-3 sm:w-auto sm:mt-0 sm:ml-auto md:ml-0">
                <div class="relative w-56 text-gray-700 dark:text-gray-300">
                    <input wire:model.debounce.300ms="search" type="text" class="w-56 pr-10 input box placeholder-theme-13" placeholder="Busqueda...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3 feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
            </div>
        </div>

             <div class="col-span-12 overflow-auto intro-y lg:overflow-visible">
                 <table class="table -mt-2 table-report">
                     <thead>
                         <tr>
                             <th class="whitespace-no-wrap ">Tienda</th>
                             <th class="whitespace-no-wrap ">Periodo</th>
                             <th class="whitespace-no-wrap ">Membresia </th>
                             <th class="whitespace-no-wrap ">Estado </th>
                         </tr>
                     </thead>
                     <tbody>

                         @foreach ($tiendas as $tienda)
                             <td class="">
                                 <div class="flex">
                                     <div class="w-10 h-10 image-fit zoom-in">
                                         <img class="rounded-md " data-action="zoom" src="{{ Storage::url($tienda->url_perfil) }}" >

                                     </div>
                                     <span class="mt-2 ml-4 -mr-3 capitalize">
                                     <a href="{{ route('admin.membresia.show', $tienda) }}">
                                      {{ $tienda->name }}
                                    </a>
                                </span>
                                    </div>
                             </td>
                             <td>
                             <strong class="">Desde: </strong>   {{ $tienda->membresia->started_at }}  <br>
                             <strong class="">Hasta: </strong>   {{ $tienda->membresia->finish_at }}
                                </td>
                             <td>{{ $tienda->membresia->plan->business }}</td>
                             <td>

                                @if($tienda->membresia->plan->id == 2 )
                                    Nuevo Vendedor
                                @else
                                    Vendedor Recurrente
                                @endif
                             </td>
                             </tr>


                         @endforeach

                         @if($tiendas->count() == 0 )
                         <tr class="">
                             <td class="">
                                 <h1>Sin Resultados</h1>
                             </td>
                             <td class="">

                             </td>
                             <td class="">

                             </td>

                         </tr>
                         @endif
                     </tbody>
                 </table>

                 <div class="mt-5">

                         {{ $tiendas->links() }}

                      <select wire:model="perPage" class="w-20 mt-4 input box sm:mt-0">
                             <option>2</option>
                             <option>5</option>
                             <option>10</option>
                             <option>20</option>
                             <option>50</option>
                             <option>100</option>
                         </select>
                 </div>

             </div>


     </div>



 </div>
