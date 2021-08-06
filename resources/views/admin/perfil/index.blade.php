@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')

@section('subcontent')
    @if (session('info'))

        <input id="infomensaje" type="hidden" value="{{ session('info') }}">
        <input id="colormensaje" type="hidden" value="{{ session('color') }}">

    @endif


    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Mi Perfil
        </h2>
    </div>


    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="flex flex-col-reverse col-span-12 lg:col-span-4 xxl:col-span-3 lg:block">
            <div class="mt-5 intro-y box">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ Storage::url( $user_perfil->profile_photo_path ) }}">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="text-base font-medium capitalize">{{ $user_perfil->name }}</div>
                    </div>

                </div>
                <div class="p-5 border-t border-gray-200 dark:border-dark-5">
                    <a class="flex items-center font-medium " href=""> <i
                            data-feather="activity" class="w-4 h-4 mr-2"></i> Información Personal </a>

                    <a class="flex items-center mt-5 font-medium" href="">
                        <i data-feather="mail" class="w-4 h-4 mr-2"></i>
                        Cambiar Correo </a>

                    <a class="flex items-center mt-5 font-medium" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i>
                        Cambiar Contraseña </a>

                </div>

            </div>
        </div>

        {{-- <div class="col-span-12 lg:col-span-8 xxl:col-span-9">

            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="mr-auto text-base font-medium">
                        Infomación Personal
                    </h2>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 xl:col-span-4">
                            <div class="p-5 border border-gray-200 rounded-md dark:border-dark-5">
                                <div class="relative w-40 h-40 mx-auto cursor-pointer image-fit zoom-in">
                                    <img class="rounded-md" alt=""
                                        src="{{ Storage::url($user_perfil->profile_photo_path) }}">

                                </div>
                                <div class="relative w-40 mx-auto mt-5 cursor-pointer">
                                    <button type="button" class="w-full text-white button bg-theme-1">Cambiar Imagen</button>
                                    <input type="file" class="absolute top-0 left-0 w-full h-full opacity-0">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-8">
                            <div>
                                <label>Nombre Completo</label>
                                <input type="text" class="w-full mt-2 bg-gray-100 border cursor-not-allowed input"
                                    placeholder="Input text" value="Denzel Washington" disabled>
                            </div>
                            <div class="mt-3">
                                <label>Telefono</label>
                                <input type="text" class="w-full mt-2 bg-gray-100 border cursor-not-allowed input"
                                    placeholder="Input text" value="+57951678" disabled>
                            </div>
                            <div class="mt-3">
                                <label>Pais</label>
                                <div class="mt-2">
                                    <select data-search="true" class="w-full tail-select">
                                        <option value="1">Admiralty</option>
                                        <option value="2">Aljunied</option>
                                        <option value="3">Ang Mo Kio</option>
                                        <option value="4">Bartley</option>
                                        <option value="5">Beauty World</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Estado</label>
                                <div class="mt-2">
                                    <select data-search="true" class="w-full tail-select">
                                        <option value="1">018906 - 1 STRAITS BOULEVARD SINGA...</option>
                                        <option value="2">018910 - 5A MARINA GARDENS DRIVE...</option>
                                        <option value="3">018915 - 100A CENTRAL BOULEVARD...</option>
                                        <option value="4">018925 - 21 PARK STREET MARINA...</option>
                                        <option value="5">018926 - 23 PARK STREET MARINA...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Ciudad</label>
                                <div class="mt-2">
                                    <select data-search="true" class="w-full tail-select">
                                        <option value="1">018906 - 1 STRAITS BOULEVARD SINGA...</option>
                                        <option value="2">018910 - 5A MARINA GARDENS DRIVE...</option>
                                        <option value="3">018915 - 100A CENTRAL BOULEVARD...</option>
                                        <option value="4">018925 - 21 PARK STREET MARINA...</option>
                                        <option value="5">018926 - 23 PARK STREET MARINA...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Dirección</label>
                                <textarea class="w-full mt-2 border input"
                                    placeholder="Adress">10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore</textarea>
                            </div>
                            <button type="button" class="w-20 mt-3 text-white button bg-theme-1">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}

        {{-- <div class="col-span-12 lg:col-span-8 xxl:col-span-9">

            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="mr-auto text-base font-medium">
                        Cambiar Correo
                    </h2>
                </div>

            </div>

        </div> --}}
{{-- 
        <div class="col-span-12 lg:col-span-8 xxl:col-span-9">

            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="mr-auto text-base font-medium">
                        Cambiar Contraseña
                    </h2>
                </div>

            </div>

        </div> --}}


    </div>

@endsection
