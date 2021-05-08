<div class="">
    <h2 class="mt-10 text-lg font-medium intro-y">Lista de Productos</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-no-wrap">

            <a href="{{ route('admin.products.create') }}"
             class="flex items-center justify-center mb-2 mr-2 text-white shadow-md button bg-theme-1"
             wire:ignore>
                <i data-feather="plus" class="w-5 h-5 mr-2 text-white"></i> Agregar Producto
            </a>
            <div class="hidden mx-auto text-gray-600 md:block"> Total de Productos: {{ $products->total() }}</div>
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

                            <th  class="whitespace-no-wrap">IMAGENES</th>
                             <th wire:click="sortBy('name')"  class="whitespace-no-wrap cursor-pointer ">NOMBRE
                                 @include('partials._sort-icon', ['campo' => 'name'])
                             </th>
                             {{-- <th wire:click="sortBy('stock')" class="whitespace-no-wrap cursor-pointer ">STOCK
                                 @include('partials._sort-icon', ['campo' => 'stock'])
                             </th> --}}
                             <th wire:click="sortBy('amount')" class="whitespace-no-wrap cursor-pointer ">PRECIO
                                @include('partials._sort-icon', ['campo' => 'amount'])
                            </th>
                            <th wire:click="sortBy('status')" class="whitespace-no-wrap cursor-pointer ">ESTADO
                                @include('partials._sort-icon', ['campo' => 'status'])
                            </th>
                             <th  class="whitespace-no-wrap">ACCIÓN</th>

                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($products as $product)
                             <tr class="">
                                <td style="width: 18%;">
                                    <div class="flex">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img class="rounded-md " data-action="zoom" src="{{ Storage::url($product->image->url) }}" >
                                        </div>
                                        @foreach ($product->gallery as $item_gallery)

                                        <div class="w-10 h-10 -ml-5 image-fit zoom-in">
                                            <img class="rounded-md " data-action="zoom"  src="{{ Storage::url( $item_gallery->url) }}" >
                                        </div>

                                        @endforeach

                                    </div>
                                </td>
                                <td style="width:48%">
                                    <a href="javascript:" class="font-medium whitespace-nowrap">{{ $product->name }}</a>
                                    <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">{{ $product->category->name }}</div>
                                    <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Stock: {{ $product->stock }}</div>


                                    </td>
                                {{-- <td class="font-bold text-theme-1">{{ $product->stock }}</td> --}}

                                <td style="width: 15%;">

                                    <div class="flex items-center justify-center font-bold text-theme-1">$ {{ $product->amount }} </div>
                                </td>

                                <td class="w-40">

                                        @if ($product->status == 1)
                                        <div class="flex items-center justify-center text-theme-6" wire:ignore>
                                            <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Borrador
                                        </div>
                                        @else
                                        <div class="flex items-center justify-center text-theme-9" wire:ignore>
                                            <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Publicado
                                        </div>
                                        @endif


                                </td>
                                <td class="table-report__action" style="width: 20%;">
                                    <div class="flex items-center justify-center">
                                        <a class="flex items-center mr-3"  href="{{ route('admin.products.edit', $product) }}">
                                            <img class="w-4 h-4 mr-1 shadow-inner" src="{{ asset('dist/images/edit.svg') }}" width="10" height="10"/> Editar
                                        </a>

                                        <form action="{{ route('admin.products.destroy', $product) }}" class="form_elim" method="POST">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="flex items-center text-theme-6">
                                                <img class="w-4 h-4 mr-1 shadow-inner" src="{{ asset('dist/images/delete.svg') }}" width="10" height="10"/> Eliminar

                                            </button>

                                        </form>


                                    </div>
                                </td>
                             </tr>


                         @endforeach

                         @if($products->count() == 0 )
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

                         {{ $products->links() }}

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
