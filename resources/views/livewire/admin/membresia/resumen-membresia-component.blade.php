<div class="px-5 pt-5 mt-5 intro-y box">
    <div class="flex flex-col pb-5 -mx-5 border-b border-gray-200 lg:flex-row dark:border-dark-5">
        <div class="flex items-center justify-center flex-1 px-5 lg:justify-start">
            <div class="relative flex-none w-20 h-20 sm:w-24 sm:h-24 lg:w-32 lg:h-32 image-fit">
                <img alt="" class="rounded-full" src="{{ Storage::url($tienda_pic) }}">
            </div>
            <div class="ml-5">
                <div class="w-24 text-lg font-medium capitalize truncate sm:w-40 sm:whitespace-normal">{{ $tienda_name }}</div>
                <div class="text-gray-600 capitalize">{{ $user_name }}</div>
            </div>
        </div>
        <div class="flex-1 px-5 pt-5 mt-6 border-t border-l border-r border-gray-200 lg:mt-0 dark:text-gray-300 dark:border-dark-5 lg:border-t-0 lg:pt-0">
            <div class="font-medium text-center lg:text-left lg:mt-5">Detalles de Contacto</div>
            <div class="flex flex-col items-center justify-center mt-4 lg:items-start">
                <div class="flex items-center truncate sm:whitespace-normal"> <i data-feather="mail" class="w-4 h-4 mr-2"></i> {{ $tienda_mail }} </div>
                <div class="flex items-center mt-3 truncate sm:whitespace-normal"> <i data-feather="phone" class="w-4 h-4 mr-2"></i> {{ $tienda_phone }} </div>
            </div>
        </div>
        <div class="flex-1 px-5 pt-5 mt-6 border-t border-l border-r border-gray-200 lg:mt-0 dark:text-gray-300 dark:border-dark-5 lg:border-t-0 lg:pt-0">
            <div class="font-medium text-center lg:text-left lg:mt-5">Membresia caduca el:</div>
            <div class="flex mt-4 ">

                <div class="w-8 py-3 text-left rounded-md">
                    <div class="text-xl font-medium text-theme-1 dark:text-theme-10">{{ $dia_cad }}</div>

                </div>
                <div class="w-20 py-3 text-left rounded-md">
                    <div class="text-xl font-medium capitalize text-theme-1 dark:text-theme-10">{{ $mes_cad }} </div>

                </div>
                <div class="w-20 py-3 text-left rounded-md">
                    <div class="text-xl font-medium text-theme-1 dark:text-theme-10">{{ $year_cad }} </div>

                </div>
            </div>
        </div>

    </div>

</div>
