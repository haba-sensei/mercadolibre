<div class="">
    <h2 class="mt-10 text-lg font-medium intro-y">Lista de Transacciones</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-no-wrap">

            <div class="hidden mr-auto text-gray-600 md:block"> Total de Transacciones: {{ $pagos->total() }}</div>
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
                            <th wire:click="sortBy('fecha_at')"  class="whitespace-no-wrap cursor-pointer ">Fecha
                                @include('partials._sort-icon', ['campo' => 'fecha_at'])
                            </th>
                             <th wire:click="sortBy('reference_id')" class="whitespace-no-wrap cursor-pointer ">Referencia
                                 @include('partials._sort-icon', ['campo' => 'reference_id'])
                             </th>
                             <th wire:click="sortBy('transaction_id')"  class="whitespace-no-wrap cursor-pointer ">Transaccion
                                @include('partials._sort-icon', ['campo' => 'transaction_id'])
                            </th>


                             <th  class="whitespace-no-wrap">Monto</th>
                             <th  class="whitespace-no-wrap">Modo</th>
                             <th  class="whitespace-no-wrap">TasaCambio</th>
                             <th  class="whitespace-no-wrap">Estado</th>

                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($pagos as $pago)

                             <td>{{ $pago->fecha_at }}</td>
                             <td>{{ $pago->reference_id }}</td>
                             <td>{{ $pago->transaction_id }}</td>
                             <td>
                                @switch($pago->mode)
                                    @case('card')
                                        COP ${{ $pago->price_membresia }}
                                    @break
                                    @case('paypal')
                                        USD ${{ $pago->price_membresia }}
                                    @break
                                    @case('gratuito')
                                        COP ${{ $pago->price_membresia }}
                                    @break
                                @endswitch



                               </td>
                             <td>
                                @switch($pago->mode)
                                @case('card')
                                    Tarjeta
                                @break
                                @case('paypal')
                                    Paypal
                                @break
                                @case('gratuito')
                                    Gratuito
                                @break
                                @endswitch

                            </td>
                             <td>{{ $pago->tasa_cambio }}</td>
                             <td>
                                @switch($pago->status)
                                @case('approved')
                                    Aprobado
                                    @break
                                @case('declined')
                                    Declinado
                                    @break
                                @case('pending')
                                    Pendiente
                                    @break
                                @case('refunded')
                                    Regresado
                                    @break
                            @endswitch

                                </td>
                             </tr>


                         @endforeach

                         @if($pagos->count() == 0 )
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

                 <div class="">

                         {{ $pagos->links() }}

                         <select wire:model="perPage" class="w-20 mt-3 input box sm:mt-0">
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
