<div class="">
    <h2 class="mt-10 text-lg font-medium intro-y">Lista de Usuarios</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-no-wrap">

            <div class="hidden mr-auto text-gray-600 md:block"> Total de Usuarios: {{ $users->total() }}</div>
            <div class="w-full mt-3 sm:w-auto sm:mt-0 sm:ml-auto md:ml-0">
                <div class="relative w-56 text-gray-700 dark:text-gray-300">
                    <input wire:model.debounce.300ms="search" type="text" class="w-56 pr-10 input box placeholder-theme-13" placeholder="Busqueda...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3 feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
            </div>
        </div>


        @foreach ($users as $user)

                <div class="col-span-12 intro-y md:col-span-6">
                    <div class="box">
                        <div class="flex flex-col items-center p-5 lg:flex-row">
                            <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                                <img alt="Midone " class="rounded-full" src="{{ asset($user->profile_photo_url) }}" >
                            </div>
                            <div class="mt-3 text-center lg:ml-2 lg:mr-auto lg:text-left lg:mt-0">
                                <a href="{{ route('admin.users.edit', $user) }}" class="font-medium">{{ $user->name }}</a>
                                <div class="text-gray-600 text-xs mt-0.5">{{ $user->email }}</div>
                            </div>
                            <div class="flex mt-4 lg:mt-0">
                                <a href="{{ route('admin.users.edit', $user) }}" class="mr-2 text-white button button--sm bg-theme-1" wire:ignore><i data-feather="eye" class="mx-auto" ></i> Permisos</a>

                            </div>
                        </div>
                    </div>
                </div>

        @endforeach

        @if($users->count() == 0 )
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

                <div class="col-span-12 intro-y md:col-span-12">

                         {{ $users->links() }}

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
