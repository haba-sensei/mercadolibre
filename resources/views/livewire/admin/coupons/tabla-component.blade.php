<div class="">
    <h2 class="mt-10 text-lg font-medium intro-y">Lista de Cupones</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-no-wrap">

            <a href="{{ route('admin.coupons.create') }}"
             class="flex items-center justify-center mb-2 mr-2 text-white shadow-md button bg-theme-1"
             wire:ignore>
                <i data-feather="plus" class="w-5 h-5 mr-2 text-white"></i> Agregar Cupones
            </a>
            <div class="hidden mx-auto text-gray-600 md:block"> Total de Cupones: {{ $coupons->total() }}</div>
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

                             <th wire:click="sortBy('code')"  class="whitespace-no-wrap cursor-pointer ">Cupon Codigo
                                 @include('partials._sort-icon', ['campo' => 'code'])
                             </th>
                             <th wire:click="sortBy('type')" class="whitespace-no-wrap cursor-pointer ">Cupon Tipo
                                 @include('partials._sort-icon', ['campo' => 'type'])
                             </th>
                             <th class="whitespace-no-wrap ">Cupon Valor </th>
                             <th class="whitespace-no-wrap ">Monto Minimo de Compra </th>
                             <th class="whitespace-no-wrap ">Estado </th>
                             <th  class="whitespace-no-wrap">Accion</th>

                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($coupons as $coupon)
                             <td>{{ $coupon->code }}</td>
                             @if ($coupon->type == 'fixed' )
                                <td>Monto Exacto</td>
                                <td>${{ $coupon->value }}</td>
                             @else
                                <td>Porcentaje</td>
                                <td>{{ $coupon->value }}%</td>
                             @endif
                             <td>${{ $coupon->cart_value }}</td>
                             <td>
                                @if ($coupon->status == 1 )
                               <span class=" text-theme-9">Libre</span>
                                @else
                                <span class=" text-theme-6">Usado</span>
                                @endif
                            </td>
                             <td class="w-56 table-report__action">
                                 <div class="flex items-center justify-center">
                                     <a class="flex items-center mr-3"  href="{{ route('admin.coupons.edit', $coupon) }}">
                                         <img class="w-4 h-4 mr-1 shadow-inner" src="{{ asset('dist/images/edit.svg') }}" width="10" height="10"/> Editar
                                     </a>

                                     <form action="{{ route('admin.coupons.destroy', $coupon) }}" method="POST">
                                         @csrf
                                         @method('delete')

                                         <button type="submit" class="flex items-center text-theme-6">
                                             <img class="w-4 h-4 mr-1 shadow-inner" src="{{ asset('dist/images/delete.svg') }}" width="10" height="10"/>
                                                 Eliminar
                                         </button>

                                     </form>



                                 </div>
                             </td>
                             </tr>


                         @endforeach

                         @if($coupons->count() == 0 )
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

                         {{ $coupons->links() }}

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
