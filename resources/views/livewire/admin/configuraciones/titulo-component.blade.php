<div class="col-span-12 lg:col-span-8 xxl:col-span-9">

    <div class="flex flex-col-reverse col-span-12 lg:col-span-4 xxl:col-span-3 lg:block">


        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="mr-auto text-base font-medium">
                   Editar Titulo del Sistema
                </h2>
            </div>

            <div class="p-5">
                 {!! Form::model($info_titulo, ['route' => ['admin.configuracion.update', $info_titulo->id], 'autocomplete' => 'off', 'method' => 'put']) !!}

                <div class="col-span-12 ">
                    <div>
                        {!! Form::label('titulo', 'Titulo del sistema') !!}
                        {!! Form::text('titulo', null, ['class' => 'w-full mt-2 bg-gray-100 border input', 'placeholder' => 'Ingrese el titulo del sistema'
                        ]) !!}
                        @error('titulo')
                        <span class="text-theme-6">
                            {{ $message }}
                        </span>
                        @enderror

                        {!! Form::hidden('modulo', 'titulo') !!}
                    </div>
                </div>
                <div class="col-span-12 " align="center">
                    {!! Form::submit('Guardar', ['class' => 'w-20 mt-3 text-white button bg-theme-1']) !!}
                </div>
                 {!! Form::close() !!}
            </div>

        </div>
    </div>

</div>
