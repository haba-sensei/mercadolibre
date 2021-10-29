<div class="col-span-12 lg:col-span-8 xxl:col-span-9">

    <div class="flex flex-col-reverse col-span-12 lg:col-span-4 xxl:col-span-3 lg:block">


        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="mr-auto text-base font-medium">
                   Editar Color del Sistema
                </h2>
            </div>

            <div class="p-5">
                {!! Form::model($config_color, ['route' => ['admin.configuracion.update', $config_color->id], 'autocomplete' => 'off', 'method' => 'put']) !!}

                <div class="col-span-12 ">
                    <div>
                        {!! Form::label('color', 'Color Principal') !!}
                        {!! Form::color('color', $config_color->color, ['class' => 'w-full h-12 mt-2 border input', 'placeholder' => 'Ingrese el color del sistema'
                        ]) !!}
                        @error('color')
                        <span class="text-theme-6">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                {!! Form::hidden('modulo', 'color') !!}
                <div class="col-span-12 " align="center">
                    {!! Form::submit('Guardar', ['class' => 'w-20 mt-3 text-white button bg-theme-1']) !!}
                </div>

               {!! Form::close() !!}
            </div>

        </div>
    </div>

</div>
