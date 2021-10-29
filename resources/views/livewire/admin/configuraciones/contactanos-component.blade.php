<div class="col-span-12 lg:col-span-8 xxl:col-span-9">

    <div class="flex flex-col-reverse col-span-12 lg:col-span-4 xxl:col-span-3 lg:block">


        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="mr-auto text-base font-medium">
                    Editar Contactanos
                </h2>
            </div>

            <div class="p-5">
                {!! Form::model($config_contactanos, ['route' => ['admin.configuracion.update', $config_contactanos->id], 'autocomplete' => 'off', 'method' => 'put']) !!}

                <div class="col-span-12 ">
                    <div>
                        {!! Form::label('mapa', 'Mapa URL') !!}
                        {!! Form::text('mapa', null, ['class' => 'w-full mt-2 bg-gray-100 border input', 'placeholder' => 'Ingrese el mapa del sistema']) !!}
                        @error('mapa')
                            <span class="text-theme-6">
                                {{ $message }}
                            </span>
                        @enderror


                    </div>
                </div>


                <div class="col-span-12 mt-3">
                    <div>
                        {!! Form::label('facebook', 'Facebook') !!}
                        {!! Form::text('facebook', null, ['class' => 'w-full mt-2 bg-gray-100 border input', 'placeholder' => 'Ingrese el facebook del sistema']) !!}
                        @error('facebook')
                            <span class="text-theme-6">
                                {{ $message }}
                            </span>
                        @enderror


                    </div>
                </div>

                <div class="col-span-12 mt-3">
                    <div>
                        {!! Form::label('twitter', 'Twitter') !!}
                        {!! Form::text('twitter', null, ['class' => 'w-full mt-2 bg-gray-100 border input', 'placeholder' => 'Ingrese el twitter del sistema']) !!}
                        @error('twitter')
                            <span class="text-theme-6">
                                {{ $message }}
                            </span>
                        @enderror


                    </div>
                </div>

                <div class="col-span-12 mt-3">
                    <div>
                        {!! Form::label('youtube', 'Youtube') !!}
                        {!! Form::text('youtube', null, ['class' => 'w-full mt-2 bg-gray-100 border input', 'placeholder' => 'Ingrese el youtube del sistema']) !!}
                        @error('youtube')
                            <span class="text-theme-6">
                                {{ $message }}
                            </span>
                        @enderror


                    </div>
                </div>

                <div class="col-span-12 mt-3">
                    <div>
                        {!! Form::label('num_contacto', 'Numero de Contacto') !!}
                        {!! Form::text('num_contacto', null, ['class' => 'w-full mt-2 bg-gray-100 border input', 'placeholder' => 'Ingrese el numero de contacto del sistema']) !!}
                        @error('num_contacto')
                            <span class="text-theme-6">
                                {{ $message }}
                            </span>
                        @enderror


                    </div>


                </div>

                {!! Form::hidden('modulo', 'contacto') !!}
                <div class="col-span-12 " align="center">
                    {!! Form::submit('Guardar', ['class' => 'w-20 mt-3 text-white button bg-theme-1']) !!}
                </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>

</div>
