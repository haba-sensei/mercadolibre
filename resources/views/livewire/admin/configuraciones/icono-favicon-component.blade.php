<div class="col-span-12 lg:col-span-8 xxl:col-span-9">

    <div class="flex flex-col-reverse col-span-12 lg:col-span-4 xxl:col-span-3 lg:block">


        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="mr-auto text-base font-medium">
                    Editar Icono & Favicon
                </h2>
            </div>

            <div class="p-2 ">
                {!! Form::model($config_icono_fav, ['route' => ['admin.configuracion.update', $config_icono_fav->id], 'autocomplete' => 'off', 'files' => 'true', 'method' => 'put']) !!}
                <div class="flex">
                    <div class="w-1/2 p-4 " align="center">
                        <div class="relative flex items-center col-span-6 p-5">

                            <div class="w-40 h-32 ml-auto mr-auto image-fit zoom-in " align="center">
                                @if (isset($config_icono_fav->icono))
                                    <img alt="" class=""  src="{{ Storage::url($config_icono_fav->icono) }}">
                                @else
                                    <img alt="" id="" class=" w-96"
                                        src="{{ Storage::url('admin.jpg') }}">
                                @endif

                            </div>
                        </div>
                        <div class="relative cursor-pointer">
                            <button type="button"
                                class="w-1/2 font-medium text-white capitalize cursor-pointer button bg-theme-1">Cambiar
                                Icono</button>

                            {!! Form::file('icono', ['id' => 'icono', 'class' => 'cursor-pointer icono absolute top-0 left-0 w-full h-full opacity-0', 'accept' => '.png, .jpg, .jpeg']) !!}

                            @error('icono')
                                <span class="text-theme-6">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-1/2 p-4 " align="center">
                        <div class="relative flex items-center col-span-6 p-5">

                            <div class="w-40 h-32 ml-auto mr-auto image-fit zoom-in " align="center">
                                 @if (isset($config_icono_fav->favicon))
                                    <img alt="" class=""
                                        src="{{ Storage::url($config_icono_fav->favicon) }}">
                                @else
                                <img alt="" id="" class=" w-96"
                                    src="{{ Storage::url('admin.jpg') }}">
                                 @endif

                            </div>
                        </div>
                        <div class="relative cursor-pointer">
                            <button type="button"
                                class="w-1/2 font-medium text-white capitalize cursor-pointer button bg-theme-1">Cambiar
                                Favicon</button>

                            {!! Form::file('favicon', ['id' => 'favicon', 'class' => ' cursor-pointer absolute top-0 left-0 w-full h-full opacity-0', 'accept' => '.png, .jpg, .jpeg']) !!}

                            @error('favicon')
                                <span class="text-theme-6">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                {!! Form::hidden('modulo', 'icono_favicon') !!}
                <div class="col-span-12 mt-4 mb-5" align="center">
                    {!! Form::submit('Guardar', ['class' => 'w-20 mt-3 text-white button bg-theme-1']) !!}
                </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>

</div>


