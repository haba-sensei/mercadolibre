<div class="col-span-12 lg:col-span-8 xxl:col-span-9">

    <div class="intro-y box lg:mt-5">
        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="mr-auto text-base font-medium">
                Infomación Personal
            </h2>
        </div>


        <div class="p-5">
            {!! Form::model($info_personal, ['route' => ['admin.perfil.update', $info_personal->id], 'autocomplete' => 'off', 'files' => 'true', 'method' => 'put']) !!}
                <div class="grid grid-cols-12 gap-5">

                    <div class="col-span-12 xl:col-span-4">
                        <div class="p-5 border border-gray-200 rounded-md dark:border-dark-5">
                            <div class="relative w-40 h-40 mx-auto cursor-pointer image-fit zoom-in">
                                <img class="rounded-md" id="picture" alt=""
                                    src="{{ Storage::url($info_personal->profile_photo_path) }}">

                            </div>
                            <div class="relative w-40 mx-auto mt-5 cursor-pointer">
                                <button type="button" class="w-full text-white button bg-theme-1">Cambiar Imagen</button>

                                {!! Form::file('file', ['id' => 'file', 'class' => 'absolute top-0 left-0 w-full h-full opacity-0', 'accept' => '.png, .jpg, .jpeg' ]) !!}

                                @error('file')
                                <span class="text-theme-6">
                                {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-8">
                        <div>
                            {!! Form::label('name', 'Nombre Completo') !!}
                            {!! Form::text('name', null, ['class' => 'w-full mt-2 bg-gray-100 border input', 'placeholder' => 'Ingrese su nombre completo' ]) !!}
                            @error('name')
                                <span class="text-theme-6">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            {!! Form::label('telefono', 'Telefono') !!}
                            {!! Form::text('telefono', $info_personal->perfil->telefono, ['class' => 'w-full mt-2 bg-gray-100 border input', 'placeholder' => 'Ingrese su nombre completo' ]) !!}
                            @error('telefono')
                                <span class="text-theme-6">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mt-3">

                            {!! Form::label('pais', 'Pais') !!}
                            {!! Form::text('pais', $info_personal->perfil->pais, ['class' => 'w-full mt-2 bg-gray-100 border input', 'placeholder' => 'Ingrese su nombre completo' ]) !!}
                            @error('pais')
                                <span class="text-theme-6">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            {!! Form::label('estado', 'Estado') !!}
                            {!! Form::text('estado', $info_personal->perfil->estado, ['class' => 'w-full mt-2 bg-gray-100 border input', 'placeholder' => 'Ingrese su nombre completo' ]) !!}
                            @error('estado')
                                <span class="text-theme-6">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            {!! Form::label('ciudad', 'Ciudad') !!}
                            {!! Form::text('ciudad', $info_personal->perfil->ciudad, ['class' => 'w-full mt-2 bg-gray-100 border input', 'placeholder' => 'Ingrese su nombre completo' ]) !!}
                            @error('ciudad')
                                <span class="text-theme-6">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            {!! Form::label('direccion', 'Direccion') !!}
                            {!! Form::textarea('direccion', $info_personal->perfil->direccion, ['id' => 'direccion', 'class' => 'w-full mt-2 border input']) !!}
                                @error('direccion')
                                <span class="text-theme-6">
                                {{ $message }}
                                </span>
                                @enderror


                        </div>
                        {!! Form::submit('Guardar', ['class' => 'w-20 mt-3 text-white button bg-theme-1']) !!}

                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>

</div>
