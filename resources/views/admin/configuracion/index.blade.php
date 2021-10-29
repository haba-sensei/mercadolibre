@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')

@section('subcontent')
@if(session('info'))

<input id="infomensaje" type="hidden" value="{{ session('info') }}" >
<input id="colormensaje" type="hidden" value="{{ session('color') }}" >

@endif



<div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">
        Configuraciones del sistema
    </h2>
</div>

<livewire:admin.configuraciones.configuraciones-component />



{{--
<div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">


<div class="col-span-12 mt-6 xl:col-span-4">
<div class="flex items-center h-10 intro-y">
    <h2 class="mr-5 text-lg font-medium truncate">
        Titulo App
    </h2>
</div>
<div class="mt-5">

    <div class="intro-y">
        <div class="flex items-center px-4 py-4 mb-3 box zoom-in" style="margin-bottom: 2rem;">
            <div class="ml-4 mr-auto">
                <div class="font-medium">Empaques Para Ti</div>
            </div>

        </div>
    </div>

    <a href="" class="block w-full py-4 mt-3 text-center border border-dotted rounded-md intro-y border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">Editar Titulo</a>
</div>
</div>

<div class="col-span-12 mt-6 xl:col-span-4">
<div class="flex items-center h-10 intro-y">
    <h2 class="mr-5 text-lg font-medium truncate">
        Icono & Favicon
    </h2>
</div>
<div class="mt-5">

    <div class="intro-y">
        <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
            <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-3.jpg">
            </div>
            <div class="ml-4 mr-auto">
                <div class="font-medium">Arnold Schwarzenegger</div>
                <div class="text-gray-600 text-xs mt-0.5">29 October 2021</div>
            </div>
            <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-9">137 Sales</div>
        </div>
    </div>

    <a href="" class="block w-full py-4 text-center border border-dotted rounded-md intro-y border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">View More</a>
</div>
</div>

<div class="col-span-12 mt-6 xl:col-span-4">
<div class="flex items-center h-10 intro-y">
    <h2 class="mr-5 text-lg font-medium truncate">
        Color Dashboard
    </h2>
</div>
<div class="mt-5">

    <div class="intro-y">
        <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
            <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-3.jpg">
            </div>
            <div class="ml-4 mr-auto">
                <div class="font-medium">Arnold Schwarzenegger</div>
                <div class="text-gray-600 text-xs mt-0.5">29 October 2021</div>
            </div>
            <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-9">137 Sales</div>
        </div>
    </div>

    <a href="" class="block w-full py-4 text-center border border-dotted rounded-md intro-y border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">View More</a>
</div>
</div>





<div class="col-span-12 mt-6 xl:col-span-4">
    <div class="flex items-center h-10 intro-y">
        <h2 class="mr-5 text-lg font-medium truncate">
            Slider principal
        </h2>
    </div>
    <div class="mt-5">
        <div class="intro-y">
            <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('dist/images/preview-1.jpg') }}">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium">Slider 1</div>

                </div>

                <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-6"> <i  data-feather="trash" class="w-4 h-6 " ></i></div>
            </div>
        </div>
        <div class="intro-y">
            <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-11.jpg">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium">Russell Crowe</div>
                    <div class="text-gray-600 text-xs mt-0.5">7 October 2020</div>
                </div>
                <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-9">137 Sales</div>
            </div>
        </div>
        <div class="intro-y">
            <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium">Al Pacino</div>
                    <div class="text-gray-600 text-xs mt-0.5">18 September 2021</div>
                </div>
                <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-9">137 Sales</div>
            </div>
        </div>
        <div class="intro-y">
            <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-14.jpg">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium">Kevin Spacey</div>
                    <div class="text-gray-600 text-xs mt-0.5">21 May 2021</div>
                </div>
                <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-9">137 Sales</div>
            </div>
        </div>
        <a href="" class="block w-full py-4 text-center border border-dotted rounded-md intro-y border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">View More</a>
    </div>
</div>

<div class="col-span-12 mt-6 xl:col-span-4">
    <div class="flex items-center h-10 intro-y">
        <h2 class="mr-5 text-lg font-medium truncate">
            Banners
        </h2>
    </div>
    <div class="mt-5">
        <div class="intro-y">
            <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-3.jpg">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium">Arnold Schwarzenegger</div>
                    <div class="text-gray-600 text-xs mt-0.5">29 October 2021</div>
                </div>
                <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-9">137 Sales</div>
            </div>
        </div>
        <div class="intro-y">
            <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-11.jpg">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium">Russell Crowe</div>
                    <div class="text-gray-600 text-xs mt-0.5">7 October 2020</div>
                </div>
                <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-9">137 Sales</div>
            </div>
        </div>
        <div class="intro-y">
            <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium">Al Pacino</div>
                    <div class="text-gray-600 text-xs mt-0.5">18 September 2021</div>
                </div>
                <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-9">137 Sales</div>
            </div>
        </div>
        <div class="intro-y">
            <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-14.jpg">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium">Kevin Spacey</div>
                    <div class="text-gray-600 text-xs mt-0.5">21 May 2021</div>
                </div>
                <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-9">137 Sales</div>
            </div>
        </div>
        <a href="" class="block w-full py-4 text-center border border-dotted rounded-md intro-y border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">View More</a>
    </div>
</div>

<div class="col-span-12 mt-6 xl:col-span-4">
    <div class="flex items-center h-10 intro-y">
        <h2 class="mr-5 text-lg font-medium truncate">
            Orden de Categorias
        </h2>
    </div>
    <div class="mt-5">
        <div class="intro-y">
            <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-3.jpg">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium">Arnold Schwarzenegger</div>
                    <div class="text-gray-600 text-xs mt-0.5">29 October 2021</div>
                </div>
                <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-9">137 Sales</div>
            </div>
        </div>
        <div class="intro-y">
            <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-11.jpg">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium">Russell Crowe</div>
                    <div class="text-gray-600 text-xs mt-0.5">7 October 2020</div>
                </div>
                <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-9">137 Sales</div>
            </div>
        </div>
        <div class="intro-y">
            <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium">Al Pacino</div>
                    <div class="text-gray-600 text-xs mt-0.5">18 September 2021</div>
                </div>
                <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-9">137 Sales</div>
            </div>
        </div>
        <div class="intro-y">
            <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-14.jpg">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium">Kevin Spacey</div>
                    <div class="text-gray-600 text-xs mt-0.5">21 May 2021</div>
                </div>
                <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-9">137 Sales</div>
            </div>
        </div>
        <a href="" class="block w-full py-4 text-center border border-dotted rounded-md intro-y border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">View More</a>
    </div>
</div>

<div class="col-span-12 mt-6 xl:col-span-4">
    <div class="flex items-center h-10 intro-y">
        <h2 class="mr-5 text-lg font-medium truncate">
            PopUp Oferta
        </h2>
    </div>
    <div class="mt-5">

        <div class="intro-y">
            <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-3.jpg">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium">Arnold Schwarzenegger</div>
                    <div class="text-gray-600 text-xs mt-0.5">29 October 2021</div>
                </div>
                <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-9">137 Sales</div>
            </div>
        </div>

        <a href="" class="block w-full py-4 text-center border border-dotted rounded-md intro-y border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">View More</a>
    </div>
</div>

</div> --}}



@endsection
