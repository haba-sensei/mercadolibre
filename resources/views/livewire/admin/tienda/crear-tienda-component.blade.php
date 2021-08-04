<div>
    @if ($tienda)
    <div class="px-5 ">
        <div class="text-lg font-medium text-center">TIENDA EN REVISIÓN</div>
        <div class="mt-2 text-center text-gray-600">Este proceso sera revisado por los administradores del sitio y puede que se comuniquen contigo por llamada o por email notificandote de la solicitud <strong class="">Muchas Gracias por su preferencia</strong></div>
    </div>
    @else
    <div class="px-5 ">
        <div class="text-lg font-medium text-center">CONFIGURA TU TIENDA</div>
        <div class="mt-2 text-center text-gray-600">Para empezar debes leer el plan de costo de tu futura tienda y presionar <strong>solicitar tienda</strong> en la seccion de abajo.</div>
    </div>

    <div class="flex mt-10">

        <div class="tab-content">
            <div class="flex flex-col tab-content__pane lg:flex-row active" id="layout-1-monthly-fees">

                <div class="flex flex-col justify-center flex-1 pb-10 text-center intro-y sm:px-10 lg:ml-2 lg:mr-2 lg:px-5 lg:pb-0">
                    <div class="text-lg font-medium">Monthly Product Pricing</div>
                    <div class="mt-3 text-gray-700 lg:text-justify dark:text-gray-600">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                        <p class="mt-2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>


                <div class="flex-1 py-16 mb-5 intro-y box lg:ml-2 lg:mr-10 lg:mt-0">
                    <i data-feather="briefcase" class="w-12 h-12 mx-auto text-theme-1 dark:text-theme-10"></i>
                    <div class="mt-10 text-xl font-medium text-center">Business</div>
                    <div class="mt-5 text-center text-gray-700 dark:text-gray-600"> 1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies </div>
                    <div class="px-10 mx-auto mt-2 text-center text-gray-600 dark:text-gray-400">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative mx-auto mt-8 text-5xl font-semibold"> 60 <span class="absolute top-0 right-0 mt-1 -mr-4 text-2xl text-gray-500">$</span> </div>

                        <a type="button" class="mx-auto mt-8 text-white rounded-full button button--lg bg-theme-1" data-toggle="tab" data-target="#layout-1-annual-fees" href="javascript:">SOLICITAR TIENDA</a>
                    </div>

                </div>

            </div>

            <div class=" tab-content__pane" style="width: 60rem;" id="layout-1-annual-fees">

                <div class="px-5 pt-10 mt-10 border-t border-gray-200 sm:px-20 dark:border-dark-5">
                    <div class="text-base font-medium">Configuración de la Tienda</div>

                    {!! Form::open(['route' => 'admin.tienda.store', 'autocomplete' => 'off', 'files'=>'true']) !!}


                    <div class="grid grid-cols-12 gap-4 mt-5 gap-y-5">
                        <div class="col-span-12 intro-y sm:col-span-6">
                            <div class="mb-2">Nombre </div>

                                {!! Form::text('name', null, ['id' => 'name', 'class' => 'flex-1 w-full border input', 'placeholder' => 'Ingrese el Nombre']) !!}
                                @error('name')
                                    <span class="text-theme-6">
                                        {{ $message }}
                                    </span>
                                @enderror

                        </div>
                        <div class="col-span-12 intro-y sm:col-span-6">
                            <div class="mb-2">Slug </div>

                                {!! Form::text('slug', null, ['id' => 'slug', 'class' => 'flex-1 w-full border input', 'placeholder' => 'Ingrese el slug', 'readonly']) !!}
                                @error('slug')
                                <span class="text-theme-6">
                                {{ $message }}
                                </span>
                                @enderror


                        </div>
                        <div class="col-span-12 intro-y sm:col-span-6">
                            <div class="mb-2">Email </div>

                                {!! Form::text('email', null, ['class' => 'flex-1 w-full border input', 'placeholder' => 'Ingrese el Email' ]) !!}
                                @error('email')
                                <span class="text-theme-6">
                                {{ $message }}
                                </span>
                                @enderror


                        </div>
                        <div class="col-span-12 intro-y sm:col-span-6">
                            <div class="mb-2">Telefono </div>

                                {!! Form::text('phone', null, ['class' => 'flex-1 w-full border input', 'placeholder' => 'Ingrese el telefono' ]) !!}
                                @error('phone')
                                <span class="text-theme-6">
                                {{ $message }}
                                </span>
                                @enderror

                        </div>
                        <div class="col-span-12 intro-y sm:col-span-12">
                            <div class="mb-2">Resumen de la tienda</div>

                            {!! Form::textarea('resumen', null, ['class' => 'flex-1 w-full border input', 'placeholder' => 'Ingrese el resumen de la tienda' ]) !!}
                                @error('resumen')
                                <span class="text-theme-6">
                                {{ $message }}
                                </span>
                                @enderror


                        </div>
                        <div class="col-span-12 mx-auto intro-y sm:col-span-12">
                            <div class="mb-2">Imagen de la Tienda</div>

                                @isset ($tienda->image)
                                    <img id="picture" src="{{ Storage::url($tienda->url_perfil) }}" class="w-65 h-65">
                                @else
                                    <img id="picture" src="{{ asset('/storage/tienda.jpg') }}" class="w-65 h-65 ">
                                @endisset

                                {!! Html::decode(Form::label('file', '<i data-feather="image" class="w-4 h-4 "></i> Seleccionar Imagen', ['class' => 'flex items-center justify-center w-61 mb-2  text-white button button--sm bg-theme-1'])) !!}

                                {!! Form::file('file', ['class' => ' hidden', 'accept' => '.png, .jpg, .jpeg' ]) !!}

                                @error('file')
                                <span class="text-theme-6">
                                {{ $message }}
                                </span>
                                @enderror
                        </div>
                        <br><br>
                        <div class="flex items-center justify-center col-span-12 mt-5 intro-y sm:justify-end">

                            <a class="justify-center block w-24 text-gray-600 bg-gray-200 button dark:bg-dark-1 dark:text-gray-300" data-toggle="tab" data-target="#layout-1-monthly-fees" href="javascript:">Retroceder</a>

                            {!! Form::submit('SOLICITAR', ['class' => 'justify-center block w-24 ml-2 text-white button bg-theme-1']) !!}


                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>


            </div>
        </div>

    </div>

    @endif
</div>


