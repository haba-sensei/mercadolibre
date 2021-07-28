@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')

@section('subcontent')
@if(session('info'))

<input id="infomensaje" type="hidden" value="{{ session('info') }}" >
<input id="colormensaje" type="hidden" value="{{ session('color') }}" >

@endif

<div class="content">

    <!-- BEGIN: Profile Info -->
    <div class="px-5 pt-5 mt-5 intro-y box">
        <div class="flex flex-col pb-5 -mx-5 border-b border-gray-200 lg:flex-row dark:border-dark-5">
            <div class="flex items-center justify-center flex-1 px-5 lg:justify-start">
                <div class="relative flex-none w-20 h-20 sm:w-24 sm:h-24 lg:w-32 lg:h-32 image-fit">
                    <img alt="" class="rounded-full" src="{{ Storage::url('tiendas/abrazame.png') }}">
                </div>
                <div class="ml-5">
                    <div class="w-24 text-lg font-medium truncate sm:w-40 sm:whitespace-normal">Sylvester Stallone</div>
                    <div class="text-gray-600">Software Engineer</div>
                </div>
            </div>
            <div class="flex-1 px-5 pt-5 mt-6 border-t border-l border-r border-gray-200 lg:mt-0 dark:text-gray-300 dark:border-dark-5 lg:border-t-0 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-5">Detalles de Contacto</div>
                <div class="flex flex-col items-center justify-center mt-4 lg:items-start">
                    <div class="flex items-center truncate sm:whitespace-normal"> <i data-feather="mail" class="w-4 h-4 mr-2"></i> sylvesterstallone@left4code.com </div>
                    <div class="flex items-center mt-3 truncate sm:whitespace-normal"> <i data-feather="phone" class="w-4 h-4 mr-2"></i> +951235477 </div>
                </div>
            </div>
            <div class="flex-1 px-5 pt-5 mt-6 border-t border-l border-r border-gray-200 lg:mt-0 dark:text-gray-300 dark:border-dark-5 lg:border-t-0 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-5">Membresia caduca el:</div>
                <div class="flex mt-4 ">

                    <div class="w-8 py-3 text-left rounded-md">
                        <div class="text-xl font-medium text-theme-1 dark:text-theme-10">{{ $dia_cad }}</div>

                    </div>
                    <div class="w-20 py-3 text-left rounded-md">
                        <div class="text-xl font-medium capitalize text-theme-1 dark:text-theme-10">{{ $mes_cad }}</div>

                    </div>
                    <div class="w-20 py-3 text-left rounded-md">
                        <div class="text-xl font-medium text-theme-1 dark:text-theme-10">{{ $year_cad }}</div>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- END: Profile Info -->
    <div class="mt-5 tab-content">
        <div class="tab-content__pane active" id="profile">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Latest Uploads -->
                <div class="col-span-12 intro-y box lg:col-span-6">
                    <div class="flex items-center px-5 py-5 border-b border-gray-200 sm:py-3 dark:border-dark-5">
                        <h2 class="mr-auto text-base font-medium">
                            Historial de pagos
                        </h2>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="file"> <a href="" class="w-12 file__icon file__icon--directory"></a> </div>
                            <div class="ml-4">
                                <a class="font-medium" href="">Documentation</a>
                                <div class="text-gray-600 text-xs mt-0.5">40 KB</div>
                            </div>
                            <div class="ml-auto dropdown">
                                <a class="block w-5 h-5 dropdown-toggle" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i> </a>
                                <div class="w-40 dropdown-box">
                                    <div class="p-2 dropdown-box__content box dark:bg-dark-1">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white rounded-md dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white rounded-md dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-5">
                            <div class="file">
                                <a href="" class="w-12 file__icon file__icon--file">
                                    <div class="text-xs file__icon__file-name">MP3</div>
                                </a>
                            </div>
                            <div class="ml-4">
                                <a class="font-medium" href="">Celine Dion - Ashes</a>
                                <div class="text-gray-600 text-xs mt-0.5">40 KB</div>
                            </div>
                            <div class="ml-auto dropdown">
                                <a class="block w-5 h-5 dropdown-toggle" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i> </a>
                                <div class="w-40 dropdown-box">
                                    <div class="p-2 dropdown-box__content box dark:bg-dark-1">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white rounded-md dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white rounded-md dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-5">
                            <div class="file"> <a href="" class="w-12 file__icon file__icon--empty-directory"></a> </div>
                            <div class="ml-4">
                                <a class="font-medium" href="">Resources</a>
                                <div class="text-gray-600 text-xs mt-0.5">0 KB</div>
                            </div>
                            <div class="ml-auto dropdown">
                                <a class="block w-5 h-5 dropdown-toggle" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i> </a>
                                <div class="w-40 dropdown-box">
                                    <div class="p-2 dropdown-box__content box dark:bg-dark-1">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white rounded-md dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white rounded-md dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Latest Uploads -->
                <!-- BEGIN: Work In Progress -->
                <livewire:admin.membresia.pasarela-pago-component />
                <!-- END: Work In Progress -->

            </div>
        </div>
    </div>
</div>
@endsection
